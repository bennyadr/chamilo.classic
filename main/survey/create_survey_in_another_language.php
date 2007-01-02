<?php
/*
    DOKEOS - elearning and course management software

    For a full list of contributors, see documentation/credits.html
   
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
    See "documentation/licence.html" more details.
 
    Contact: 
		Dokeos
		Rue des Palais 44 Paleizenstraat
		B-1030 Brussels - Belgium
		Tel. +32 (2) 211 34 56
*/

/**
*	@package dokeos.survey
* 	@author 
* 	@version $Id: create_survey_in_another_language.php 10584 2007-01-02 15:09:21Z pcool $
*/

/*
==============================================================================
		INIT SECTION
==============================================================================
*/
// name of the language file that needs to be included 
$language_file = 'survey';

// including the global dokeos file
require_once ('../inc/global.inc.php');

// including additional libraries
/** @todo check if these are all needed */
/** @todo check if the starting / is needed. api_get_path probably ends with an / */
require_once (api_get_path(LIBRARY_PATH)."/course.lib.php");
require (api_get_path(LIBRARY_PATH)."/groupmanager.lib.php");
require_once (api_get_path(LIBRARY_PATH).'/fileManage.lib.php');
require_once (api_get_path(CONFIGURATION_PATH) ."/add_course.conf.php");
require_once (api_get_path(LIBRARY_PATH)."/add_course.lib.inc.php");
require_once (api_get_path(LIBRARY_PATH)."/surveymanager.lib.php");

/** @todo replace this with the correct code */
/*
$status = surveymanager::get_status();
api_protect_course_script();
if($status==5)
{
	api_protect_admin_script();
}
*/
/** @todo this has to be moved to a more appropriate place (after the display_header of the code)*/
if (!api_is_allowed_to_edit())
{
	Display :: display_header();
	Display :: display_error_message(get_lang('NotAllowedHere'));
	Display :: display_footer();
	exit;
}

$cidReq = $_REQUEST['cidReq'];
$id_survey = intval($_GET['id_survey']);


if(isset($_POST['submit'])){
	
	SurveyManager::create_survey_in_another_language($id_survey, addslashes($_POST['language_choosen']));	
	header('Location:survey_list.php?cidReq='.$cidReq);
	exit;
	
}

$tool_name = get_lang('CreateInAnotherLanguage');
$interbreadcrumb[] = array('url'=>'survey_list.php','name'=>get_lang('SurveyList'));
Display::display_header($tool_name);
api_display_tool_title($tool_name);

$survey_language = SurveyManager::get_data($id_survey, 'lang');
$platform_languages = api_get_languages();

echo '
<form method="POST" action="'.$_SERVER['PHP_SELF'].'?cidReq='.$cidReq.'&id_survey='.$id_survey.'">
<table><tr><td>
'.get_lang('SelectWhichLanguage').'
<select name="language_choosen">
';


for($i=0 ; $i<count($platform_languages) ; $i++){
	
	if($survey_language != $platform_languages['folder'][$i])
		echo '<option value="'.$platform_languages['folder'][$i].'">'.$platform_languages['name'][$i].'</option>';
}

echo '</select></td></tr><tr><td align="center"><br /><br />
<input type="submit" name="submit" value="'.get_lang('Ok').'" />
</td></tr></table>
</form>';

Display :: display_footer();
?>