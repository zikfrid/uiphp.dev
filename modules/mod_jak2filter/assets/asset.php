<?php
/**
 * ------------------------------------------------------------------------
 * JA K2 Filter Module for J25 & J3.3
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$basepath = JURI::root(true).'/modules/' . $module->module . '/assets/';
$stylepath = JURI::root(true).'/templates/' . $app->getTemplate() . '/css/';
$doc->addStyleSheet($stylepath.'libs.css');
//$doc->addStyleSheet($basepath.'css/style.css');
//load override css
$templatepath = 'templates/'.$app->getTemplate().'/css/'.$module->module.'.css';
if(file_exists(JPATH_SITE . '/' . $templatepath)) {
	$doc->addStyleSheet(JURI::root(true).'/'.$templatepath);
}

//script
$doc->addScript($basepath.'js/jak2filter.js?v=2');