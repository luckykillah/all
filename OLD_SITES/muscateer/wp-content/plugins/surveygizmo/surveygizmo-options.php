<?php
/*
Please see surveygizmo.php for more information
or visit www.SurveyGizmo.com
*/

load_plugin_textdomain('surveygizmo');

// set paramters to default, if not exists

add_option('sgizmo_userkey', '');

if(isset($_POST[store_key]))
    {
      update_option('sgizmo_userkey',$_POST[sgizmo_key]);      
    }

$userkey = get_option('sgizmo_userkey');   

?>
<div class="wrap"> 
	<h2><?php _e('Configure: SurveyGizmo Plugin', 'surveygizmo') ?></h2> 
	<p><?php _e('In order to use this plugin with your SurveyGizmo account you must enter your "User API Key."<br/>  This key allows the plugin to securely access your account from Wordpress.<br/><br/>Find your User API Key on your <a href="http://www.surveygizmo.com/surveybuilder/account"  target=_blank >account page</a>.<br/><br/><strong>If you don\'t have a SurveyGizmo account,  <a href="http://www.surveygizmo.com/?ap=wp" target=_blank >signup for a free one here</a>.', 'surveygizmo') ?></strong></p>
<form name="form1" method="post" action="<?php bloginfo('wpurl');?>/wp-admin/options-general.php?page=surveygizmo.php">
		<fieldset class="options">
			    <?php _e('Enter Survey User API Key', 'surveygizmo') ?>: <input type="text" name="sgizmo_key" value="<?php echo $userkey ?>" />
                <br/><br />

                <p class="submit"><input type="submit" name="store_key" value="<?php _e('Save API Key &amp; Activate Plugin', 'surveygizmo') ?>" ></p>            
		</fieldset>
	</form> 
</div>