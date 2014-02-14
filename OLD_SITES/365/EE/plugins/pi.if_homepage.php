<?php

/*
=========================================================================
 Copyright (c) 2008 Mark Bowen Design
=========================================================================
 File: pi.if_homepage.php V1.0.2
-------------------------------------------------------------------------
 Purpose: Check to see if current page is the homepage
=========================================================================
CHANGE LOG :

4th July 2008
	- Version 1.0.0
	- Creation of initial plugin

4th July 2008
	- Version 1.0.1
	- Swapped conditional to say true instead of false ;-)

6th July 2008
	- Version 1.0.2
	- Swapped conditional to say is_homepage instead of true or false ;-)
=========================================================================
*/


$plugin_info = array(
						'pi_name'			=> 'If Homepage',
						'pi_version'		=> '1.0.2',
						'pi_author'			=> 'Mark Bowen',
						'pi_author_url'		=> 'http://www.markbowendesign.com/',
						'pi_description'	=> 'Check to see if current page is the homepage',
						'pi_usage'			=> If_homepage::usage()
					);


class If_homepage {

    var $return_data;

    function If_homepage($str = '')
    {
       
        global $TMPL, $FNS, $PREFS, $REGX;
        $tagdata = $TMPL->tagdata;

		// We'll use this array to store variables that we'll allow
		// to be parsed as conditionals
		$conds = array();

		$homepage = $FNS->fetch_site_index(0);
		$current_uri = $FNS->fetch_current_uri();

		// Determine if fail is TRUE or FALSE
		$conds['is_homepage'] = ($homepage == $current_uri) ? TRUE : FALSE;

		
		// Prep the output using EE's conditional voodoo
		$tagdata = $FNS->prep_conditionals($tagdata, $conds);

		// Spit it out
		$this->return_data = $tagdata;

}
   
// END


    
// ----------------------------------------
//  Plugin Usage
// ----------------------------------------

// This function describes how the plugin is used.
// Make sure and use output buffering

function usage()
{
ob_start(); 
?>

A nice easy one this one!

{exp:if_homepage}

{if true}
This is the homepage
{if:else}
This isn't the homepage
{/if}

{/exp:if_homepage}


<?php
$buffer = ob_get_contents();
	
ob_end_clean(); 

return $buffer;
}
// END


}
// END CLASS
?>