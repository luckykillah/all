<?php
/*
Plugin Name: SurveyGizmo
Plugin URI: http://www.surveygizmo.com/add-ons/wordpress-survey-plugin/?ap=wp
Description: The SurveyGizmo WordPress plugin lets you access and monitor your SurveyGizmo.com surveys remotely. You'll need a SurveyGizmo account - <a href="http://www.surveygizmo.com/?ap=wp">get one here free</a>. Plugin
Author: SurveyGizmo, Christian Vanek & Scott McDaniel
Version: 1.2
Author URI: http://www.widgix.com/
  
Copyright 2006  Widgix Software 

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License Version 2, as 
published by the Free Software Foundation in June 1991.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along 
with this program (intouch-license-gpl.txt); if not, write to the 

	Free Software Foundation, Inc., 
	59 Temple Place, 
	Suite 330, 
	Boston, 
	MA 02111-1307 USA*/

/*
Do not modify the following code to manipulate the output of this plugin. 
For configuration options, please see �Options� in wp-admin.
*/

load_plugin_textdomain('surveygizmo');
$ok = @include("class-snoopy.php");
if(!$ok)$ok = @include("../wp-includes/class-snoopy.php");
if(!$ok)$ok = @include("/wp-includes/class-snoopy.php");
if(!$ok)$ok = @include("wp-includes/class-snoopy.php");

/* ===== REGISTER PAGES: O P T I O N S  &  D A S H B O A R D  ======== */

function sgizmo_options_page() {
    add_options_page(
        __('Settings', 'surveygizmo'),
        __('SurveyGizmo', 'surveygizmo'),
        10,
        basename(__FILE__),
        'surveygizmo_options'
    );
} 

function sgizmo_dashboard_page() {
    add_dashboard_page(
        __('Dashboard', 'surveygizmo'),
        __('SurveyGizmo', 'surveygizmo'),
        10,
        basename(__FILE__),
        'surveygizmo_dashboard'
    );
}

function surveygizmo_options(){
	require (WP_PLUGIN_DIR . '/surveygizmo/surveygizmo-options.php');
}

function surveygizmo_dashboard(){
	require (WP_PLUGIN_DIR . '/surveygizmo/surveygizmo-dashboard.php');
}

/* ===== C O M M U N I C A T I O N   F U N C T I O N S  ======== */

function sgizmo_fetch_surveys($options = "")
{
    $user_key = get_option('sgizmo_userkey');
    $agent = "SurveyGizmo Plugin (compatible; MSIE 6.0; Windows NT 5.0)";  
    $wordpress_key = "h2b49gs9mt6ebpog286vaktw"; //This key is specific to this WordPress plugin. You can get your own for your projects by contacting support@sgizmo.com
	
    $url = "http://app.sgizmo.com/http_api/plugin.php?dk={$wordpress_key}&uk={$user_key}&cmd=GETSURVEYLIST" . ($options != "" ? "&" . $options : "") ; 
	
    //$tree = wp_remote_fopen($url);
    
    $snoop = new Snoopy();
    $tree = $snoop->fetch($url);
    $tree = $snoop->results;
    
    $xmltree = domxml_xmltree2($tree);
    return($xmltree);	
}

function sgizmo_checkcapabilities()
{
    if(!extension_loaded("curl") && !ini_get("allow_url_fopen")) $errors[] = "You do not have CURL and safemode has disabled url reading through fopen  (we need one of those)";
    if(!extension_loaded("dom") && !extension_loaded("domxml"))$errors[] = "You do not have DOM or DOMXML extensions (we need one of those)";    
     
    if(is_array($errors))return($errors);
    else return(true);
}


function sgizmo_checkresponse(&$treedom)
{
       if($treedom === false)return(false);
       
       //$node_array = $treedom->get_elements_by_tagname("status");
       
       if(strtoupper($treedom[APIRESULTS][0][STATUS][0][VALUE]) != "SUCCESS")return(false);
       
       return(true);
}

    function domxml_xmltree2($document)
    {
        $parse = new XMLParserSG($document);
        $tree= $parse->getTree();
        return($tree);
    }


class XMLParserSG {
    var $data;              
    var $vals;              
    var $collapse_dups;     
    var $index_numeric;     
    function XMLParserSG($data_source, $data_source_type='raw', $collapse_dups=0, $index_numeric=0) {
        $this->collapse_dups = $collapse_dups;
        $this->index_numeric = $index_numeric;
        $this->data = '';
        if ($data_source_type == 'raw')
            $this->data = $data_source;

        elseif ($data_source_type == 'stream') {
            while (!feof($data_source))  
                $this->data .= fread($data_source, 1000);
        } elseif (file_exists($data_source))
            $this->data = implode('', file($data_source));
        else {
            $fp = fopen($data_source,'r');
            while (!feof($fp))
                $this->data .= fread($fp, 1000);
            fclose($fp);
        }
    }
    function getTree() {
        $parser = xml_parser_create('ISO-8859-1');
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_parse_into_struct($parser, $this->data, $vals, $index);
        xml_parser_free($parser);

        $i = -1;
        return $this->getchildren($vals, $i);
    }
    function buildtag($thisvals, $vals, &$i, $type) { 
        // JDL + JM: PHP 5 requires initialization
        $tag = array();

        if (isset($thisvals['attributes']))
            $tag['ATTRIBUTES'] = $thisvals['attributes'];

        // complete tag, just return it for storage in array
        if ($type === 'complete')
            $tag['VALUE'] = $thisvals['value'];

        // open tag, recurse
        else
            $tag = array_merge($tag, $this->getchildren($vals, $i));

        return $tag;
    }
    function getchildren($vals, &$i) { 
        $children = array();     // Contains node data

        // Node has CDATA before it's children   
        if ($i > -1 && isset($vals[$i]['value']))
            $children['VALUE'] = $vals[$i]['value'];

        // Loop through children, until hit close tag or run out of tags
        while (++$i < count($vals)) {

            $type = $vals[$i]['type'];

            // 'cdata':     Node has CDATA after one of it's children
            //              (Add to cdata found before in this case)
            if ($type === 'cdata')
                $children['VALUE'] .= $vals[$i]['value'];

            // 'complete':  At end of current branch  
            // 'open':      Node has children, recurse
            elseif ($type === 'complete' || $type === 'open') {
                // EP: Preserve parent tag name
                $name = $vals[$i]['tag'];
                $tag = $this->buildtag($vals[$i], $vals, $i, $type);
                if ($this->index_numeric) {
                    $tag['TAG'] = $name;
                    $children[] = $tag;
                } else
                    $children[$name][] = $tag;
            }

            // 'close:      End of node, return collected data
            //              Do not increment $i or nodes disappear!
            elseif ($type === 'close')
                break;
        }
        if ($this->collapse_dups)
            foreach($children as $key => $value)
                if (is_array($value) && (count($value) == 1))
                    $children[$key] = $value[0];
        return $children;
    } 
}    

// add actions and filters
add_action('admin_menu', 'sgizmo_options_page');
add_action('admin_menu', 'sgizmo_dashboard_page');

?>