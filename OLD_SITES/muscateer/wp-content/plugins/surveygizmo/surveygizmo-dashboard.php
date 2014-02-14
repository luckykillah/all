<?php
/*Please see surveygizmo.php for more information 
or visit www.SurveyGizmo.com
*/
load_plugin_textdomain('surveygizmo');

$userkey = get_option('sgizmo_userkey');   

function sgPluginVersionCheck($currentVersion) {
	$plugins = get_plugins();
	global $yourVersion ;
	if (empty($plugins)) {
		echo '<p>';
		_e("Couldn't open plugins directory or there are no plugins available."); 
		echo '</p>';
	} else {
		$pluginData = get_plugin_data("../wp-content/plugins/surveygizmo/surveygizmo.php");
		$yourVersion = $pluginData['Version'];
		if  ($yourVersion < $currentVersion) {
			$msg = "<p class=\"sg_upgrade_message\"><a href=\"http://www.surveygizmo.com/wordpress\" title=\"Upgrade page\">Please upgrade your plugin to the current version {$currentVersion}</a>";
			print $msg;
			return $yourVersion;
		} else {
			return $yourVersion;
		}
	 } 
}

//check the userkey
if(sgizmo_checkcapabilities() !== true)
{
    echo ('<div class="wrap">Sadly you\'re installation of PHP does not meet the requirements to run this plug-in. Specifically: <ul>');
    $errs = sgizmo_checkcapabilities();
    foreach($errs as $val)
    {
       print("<li>{$val}</li>");
    }
    echo ("</ul><br>The good news is that the plugin was installed correctly, so if you fix these issues you'll be all set!</div>");
}
elseif(trim($userkey) == "")
{
    echo ('<div class="wrap">Please go to the <a href="options-general.php?page=surveygizmo.php">SurveyGizmo options page</a> and enter your SurveyGizmo User Key.</div>');
}
else 
{
?>

<style type="text/css" >
 .createSurvey {
 	float:right;
	margin:-50px 40px 0 0;
 }
 .sg_SurveyGrid  
 {
     width:98%;
     margin: 0 auto;    
     font: normal 12px/14px verdana; 
 }
 
  .sg_SurveyGrid  tr th
 {
    background-color:#336699;
    color:white;
    font: bold 11px/12px verdana; 
    text-align:center;
    vertical-align:center;
 }
 .sg_SurveyGrid  tr th.status {
 	font-size:9px !important;
	text-align:center; 
 }
 td.status {
	text-align:center;
 }
 .sg_date {
 	text-align:center;
 }
 td.sg_options
 {
 	text-align:center;
	line-height:1.7em;
	text-transform:capitalize;
	font-size:10px;
	font-weight:bold;
 }	
  .sg_SurveyGrid  tr td
  {
     padding:5px;
  }
 
  .sg_SurveyGrid .sg_RowMod_1 td
  {
    background-color: #eee;
  }
 
  .chrtholder
  {
     padding:0;
     vertical-align:bottom;
     width:20px;
     height:20px;
  }
  .chrt1,.chrt2,.chrt3,.chrt4
  {
     display:block;
     width: 5px;
     font-size:1px;
     float:left;
     margin:0;
     vertical-align:bottom;
  }
  .publishLinks { 
  	font-size:11px;
  	display:block;
	margin: 0;
	color:#555;
	background-color:#F8F8F8;
	border:1px solid #ccc;
	padding:8px;
	display:none;
   }
  .publishLinks p { 
	margin:5px 0 0 0;
	}
  .chrt1 {margin-top:15px;height:5px;background-color:green;}
  .chrt2 {margin-top:10px;height:10px;background-color:magenta;}
  .chrt3 {margin-top:14px;height:6px;background-color:purple;}
  .chrt4 {margin-top:3px;height:17px;background-color:blue;}
  
  .sg_plugin_version { 
  	margin:10px 0;
	text-align:right;
	color:#555;
	}
	
	.sg_upgrade_message a {
	color:#930;
	}
</style>

<div class="wrap"> 
	<h2><?php _e('SurveyGizmo Survey Dashboard', 'surveygizmo') ?></h2> 
				   <a href="http://www.surveygizmo.com/surveybuilder/create" title="Create a new survey" target="_blank" class="button createSurvey">Create New Survey</a>
	<?php
	   $options = "";
	   
	   if($_GET[filter] == "launched") $options = "status=Launched";
	   if($_GET[filter] == "closed") $options = "status=Closed";
	   if($_GET[filter] == "design") $options = "status=In Design";
	   
	   $survey_info = sgizmo_fetch_surveys($options);
	   if(sgizmo_checkresponse($survey_info))
	   {
	      // $surveylist = $survey_info->get_elements_by_tagname("surveylist");
	       
	       $surveys = $survey_info[APIRESULTS][0][SURVEYLIST][0][SURVEY];
	       
		   //Check plugin version
		   //$apiResults = $survey_info->get_elements_by_tagname("apiResults");
		   $currentVersion = $survey_info[APIRESULTS][0][ATTRIBUTES][DEVELOPERAPPVERSION];
		   $yourVersion = sgPluginVersionCheck($currentVersion);
		   
	       if(count($surveys) > 0)
	       {
	           ?>

			   
	           <div style="text-align:right; padding:5px;" >Show only:
	               <a href="?page=surveygizmo.php&filter=all"> All</a> | 
	               <a href="?page=surveygizmo.php&filter=design">In Design</a> | 
	               <a href="?page=surveygizmo.php&filter=launched">Launched</a> | 
	               <a href="?page=surveygizmo.php&filter=closed">Closed</a>
	           </div>
	           <table class="sg_SurveyGrid" border=0 cellspacing="1" cellpadding="2" >
			   <thead>
	           <tr>
	               <th rowspan="2" >Survey Title</th>
	               <th rowspan="2" >Status</th>
	               <th rowspan="2" >Created</th>
	               <th rowspan="2" >Last<br/> Active</th>
	               <th colspan="4" >Response Statistics</th>
	               <th rowspan="2" >Options</th>
	           </tr>	
	           <tr>
	               <th class="status">In&nbsp;Progress</th>
	               <th class="status">Completed</th>
	               <th class="status">Partial</th>
	               <th class="status">Abandoned</th>
	           </tr>
			   </thead>
			   <tbody>               
	           <?php
	           foreach ($surveys as $survey) 
	           {
				   
	              /*
	               $id = $surveys[$i]->get_elements_by_tagname("id");
	               $title = $surveys[$i]->get_elements_by_tagname("title");
	               $created = $surveys[$i]->get_elements_by_tagname("date_created");
	               $activity = $surveys[$i]->get_elements_by_tagname("date_lastactivity");
	               $status = $surveys[$i]->get_elements_by_tagname("status");
	               $completed = $surveys[$i]->get_elements_by_tagname("count_complete");
	               $partial = $surveys[$i]->get_elements_by_tagname("count_partial");
	               $abandoned = $surveys[$i]->get_elements_by_tagname("count_abandoned");
	               $inprogress = $surveys[$i]->get_elements_by_tagname("count_inprogress");
	               $link_preview = $surveys[$i]->get_elements_by_tagname("link_preview");
	               $link_edit = $surveys[$i]->get_elements_by_tagname("link_edit");
	               $link_report = $surveys[$i]->get_elements_by_tagname("link_reporting");
	               $link_js_embed = $surveys[$i]->get_elements_by_tagname("js_embedingcode");
	               $publish_link = $surveys[$i]->get_elements_by_tagname("publish_link");
	               $response_chart = $surveys[$i]->get_elements_by_tagname("response_chart");
                   */
	               $id = $survey[ID][0][VALUE];//
	               $title = $survey[TITLE][0][VALUE];//$surveys[$i]->get_elements_by_tagname("title");
	               $created = $survey[DATE_CREATED][0][VALUE];//$surveys[$i]->get_elements_by_tagname("DATE_CREATED");
	               $activity = $survey[DATE_LASTACTIVITY][0][VALUE];//$surveys[$i]->get_elements_by_tagname("date_lastactivity");
	               $status = $survey[STATUS][0][VALUE];//$surveys[$i]->get_elements_by_tagname("status");
	               $completed = $survey[COUNT_COMPLETE][0][VALUE];//$surveys[$i]->get_elements_by_tagname("count_complete");
	               $partial = $survey[COUNT_PARTIAL][0][VALUE];//$surveys[$i]->get_elements_by_tagname("COUNT_PARTIAL");
	               $abandoned = $survey[COUNT_ABANDONED][0][VALUE];//$surveys[$i]->get_elements_by_tagname("COUNT_ABANDONED");
	               $inprogress = $survey[COUNT_INPROGRESS][0][VALUE];//$surveys[$i]->get_elements_by_tagname("COUNT_INPROGRESS");
	               $link_preview = $survey[LINK_PREVIEW][0][VALUE];//$surveys[$i]->get_elements_by_tagname("LINK_PREVIEW");
	               $link_edit = $survey[LINK_EDIT][0][VALUE];//$surveys[$i]->get_elements_by_tagname("LINK_EDIT");
	               $link_report = $survey[LINK_REPORTING][0][VALUE];//$surveys[$i]->get_elements_by_tagname("LINK_REPORTING");
	               $link_js_embed = $survey[JS_EMBEDINGCODE][0][VALUE];//$surveys[$i]->get_elements_by_tagname("JS_EMBEDINGCODE");
	               $publish_link = $survey[PUBLISH_LINK][0][VALUE];//$surveys[$i]->get_elements_by_tagname("PUBLISH_LINK");
	               $response_chart = $survey[RESPONSE_CHART][0][VALUE];//$surveys[$i]->get_elements_by_tagname("response_chart");
	               ?>
	               <tr class="sg_RowMod_<?php echo  $i % 2 == 0 ? "1" : "0" ?>" >
	                <td><?php echo $title; ?></td>
	                <td class="status"><?php echo  $status; ?></td>
	                <td class="sg_date"><?php echo  $created != "" ? date("m/d/y",strtotime($created)) : "-" ?></td>
	                <td class="sg_date"><?php echo  $activity != "" ? date("m/d/y",strtotime($activity)) : "-" ?></td>
	                <td class="status"><?php echo  number_format($inprogress,0); ?></td>
	                <td class="status"><?php echo  number_format($completed,0); ?></td>
	                <td class="status"><?php echo  number_format($partial,0); ?></td>
	                <td class="status"><?php echo  number_format($abandoned,0); ?></td>	               
	                <td class="sg_options">
				   	<a href="<?php echo  $link_edit; ?>"  target="_blank">Edit</a><br />
					<a href="<?php echo  $link_preview; ?>"  target="_blank">Preview</a><br />
					<a href="<?php echo  $link_report; ?>"  target="_blank">Reports</a><br />
					<?php if ( $status == "Launched" ) { ?>
					<a href="#" onclick="document.getElementById('pub<?php echo  $id ?>').style.display = 'block';return false"  >Pub Links</a>
					<?php } ?>
				    </td>
	               </tr>
				   <tr>
				    <td colspan="9">
						<?php if ( $status == "Launched" ) { ?>
						<div class="publishLinks" id="pub<?php echo $id ?>" >
						<strong>Embed link:&nbsp;</strong> <?php echo htmlentities($link_js_embed); ?> <br />
						<p><strong>Survey link:&nbsp;</strong> <a href="<?php echo htmlentities($publish_link); ?>" target="_blank">
						&lt;a href="<?php echo htmlentities($publish_link); ?>" target="_blank"&gt;My Survey&lt;/a&gt;</a></p> 
						</div>
						<?php } ?>	</td>
				   </tr>	      
	               <?php
	           }
	           ?>
			   </tbody>
			   </table><?php
	       }
	       
	   }
	   else 
	   {
	       ?><?php _e('Error - Your user key may have been mis-typed. ', 'surveygizmo') ?><?php
	   }

	print "<p class=\"sg_plugin_version\"><a href=\"http://www.surveygizmo.com/add-ons/wordpress-survey-plugin/?ap=wp\">SurveyGizmo WordPress Plugin version: ". $yourVersion."</a></p>";
	
	?>
	<p style="text-align:center;"><a href="http://www.surveygizmo.com/?ap=wp">Visit www.SurveyGizmo.com</a></p>
</div>
<?php
}
?>