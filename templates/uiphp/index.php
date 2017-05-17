<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.UIPHP
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// realised Mazun Dmytro
defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Output as HTML5
$doc->setHtml5(true);

$menu   = $app->getMenu();
$active = $menu->getActive();
$class  = $active->alias . " pageid-" . $active->id;

//// Getting params from template
//$params = $app->getTemplate(true)->params;
//
//// Detecting Active Variables
//$option   = $app->input->getCmd('option', '');
//$view     = $app->input->getCmd('view', '');
//$layout   = $app->input->getCmd('layout', '');
//$task     = $app->input->getCmd('task', '');
//$itemid   = $app->input->getCmd('Itemid', '');
//$sitename = $app->get('sitename');

// add scripts
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/libs/libs.js');
// add styles
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/libs.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/main.css');


?>

<?php
	$doc = JFactory::getDocument();
		unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
		unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
		unset($doc->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
		unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<!--[if lt IE 9]><script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->

<!--
	<link rel="stylesheet" href="<?php /*echo $this->baseurl . '/templates/' . $this->template . '/css/libs.css'*/?>">
	<link rel="stylesheet" href="<?php /*echo $this->baseurl . '/templates/' . $this->template . '/css/main.css'*/?>">
-->

</head>

<body class="body <?php echo $class; ?>">
	<!-- Body -->
	<div class="site">
		<div class="container">
			<!-- Header -->

			<div class="row">
				<header class="header">
					<div class="row">
						<div class="header__logo">
							<div class="logo">
								<a href="/">
									<!--									--><?//xml version="1.0" encoding="utf-8"?>
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="5 0 172 68" style="enable-background:new 5 0 172 68;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#1CCFC9;}
	.st1{fill:#5C315E;}
	.st2{fill:#09A8A0;}
	.st3{fill:#02877F;}
	.st4{fill:#026D66;}
</style>
										<g id="XMLID_179_">
											<g id="XMLID_4644_">
												<g id="XMLID_175_">
													<path id="XMLID_176_" class="st0" d="M65.8,45.9c-1.8-1.3-4.1-1.3-5.9-0.2L45,35.2l7.6-1.3l-0.8-4.6l-7.6,1.3l10.4-14.9
				c2.1,0.4,4.2-0.4,5.5-2.3c1.7-2.5,1.1-6-1.4-7.7s-6-1.1-7.7,1.4c-1.3,1.8-1.3,4.1-0.2,5.9L40.4,27.9L37.2,10
				c1.7-1.2,2.7-3.3,2.3-5.5c-0.5-3-3.4-5-6.4-4.5s-5,3.4-4.5,6.4c0.4,2.2,2,3.8,4,4.4l3.2,17.9l-6.3-4.4l-2.7,3.8l6.3,4.4
				l-17.9,3.2C14,34,11.9,33,9.7,33.4c-3,0.5-5,3.4-4.5,6.4s3.4,5,6.4,4.5c2.2-0.4,3.8-2,4.4-4l17.9-3.2l-10.4,15
				c-2.1-0.4-4.2,0.4-5.5,2.3c-1.7,2.5-1.1,6,1.4,7.7s6,1.1,7.7-1.4c1.3-1.8,1.3-4.1,0.2-5.9l10.4-14.9l3.2,17.9
				c-1.7,1.2-2.7,3.3-2.3,5.5c0.5,3,3.4,5,6.4,4.5s5-3.4,4.5-6.4c-0.4-2.2-2-3.8-4-4.4l-3.2-18l14.9,10.4c-0.4,2.1,0.4,4.2,2.3,5.5
				c2.5,1.7,6,1.1,7.7-1.4C68.9,51.1,68.3,47.6,65.8,45.9z"/>
													<circle id="XMLID_4751_" class="st0" cx="67.4" cy="28.9" r="5.5"/>
													<circle id="XMLID_4752_" class="st0" cx="15.4" cy="17.3" r="5.5"/>
												</g>
												<path id="XMLID_4736_" class="st1" d="M114.8,32.2v-3.1v-1.4h1.7h1.7c3.1,0,5.2-2,5.2-4.8s-2.1-4.8-5.2-4.8h-3.4h-3.9v3.1v3.5v3
			V34h3.9C114.8,34,114.8,32.2,114.8,32.2z M114.8,21.4v-0.3h0.7h1.9c1.3,0,2,0.6,2,1.7s-0.7,1.8-2,1.8h-1.8h-0.7L114.8,21.4
			L114.8,21.4z"/>
												<path id="XMLID_4735_" class="st1" d="M94.2,34.3c4,0,6.6-2.5,6.6-6.1V18.1h-3.9v10.1c0,1.7-1.1,2.6-2.8,2.6
			c-1.7,0-2.8-0.9-2.8-2.6V18.1h-3.9v10.1C87.5,31.8,90.1,34.3,94.2,34.3z"/>
												<rect id="XMLID_4734_" x="103.9" y="18.1" class="st1" width="3.9" height="15.9"/>
												<path id="XMLID_4731_" class="st1" d="M146.2,32.2v-3.1v-1.4h1.7h1.7c3.1,0,5.2-2,5.2-4.8s-2.1-4.8-5.2-4.8h-3.4h-3.9v3.1v3.5v3
			V34h3.9V32.2z M146.2,21.4v-0.3h0.7h1.9c1.3,0,2,0.6,2,1.7s-0.7,1.8-2,1.8H147h-0.7L146.2,21.4L146.2,21.4z"/>
												<polygon id="XMLID_4730_" class="st1" points="129.1,30.8 129.1,27.8 129.1,27.7 134.9,27.7 134.9,27.8 134.9,30.8 134.9,34
			138.8,34 138.8,27.7 138.8,24.5 138.8,18.1 134.9,18.1 134.9,22.7 134.9,24.5 129.1,24.5 129.1,22.7 129.1,18.1 125.2,18.1
			125.2,24.5 125.2,27.7 125.2,34 129.1,34 		"/>
												<path id="XMLID_4729_" class="st1" d="M88.3,43.4c-0.1,0-0.2,0-0.3,0l-0.1,0.7c0.1,0,0.2,0.1,0.5,0.1c0.8,0,1.1-0.3,1.5-1.2
			l1.5-3.4h-0.9l-0.9,2.1l-0.9-2.1h-0.9l1.4,3.1l-0.1,0.2C88.9,43.2,88.7,43.4,88.3,43.4z"/>
												<path id="XMLID_4728_" class="st1" d="M92,39.6v4.5h1v-1.9h0.2c0.3,0,0.4,0.3,0.8,0.9c0.4,0.7,0.7,1,1.2,1h0.4v-0.8h-0.1
			c-0.3,0-0.5-0.3-0.9-0.9c-0.2-0.3-0.4-0.6-0.5-0.7l1.6-2.1h-1l-1.4,1.9H93v-1.9H92z"/>
												<path id="XMLID_4725_" class="st1" d="M97.8,39.6h-1.5v4.5h1v-1.6h0.4c1.1,0,1.8-0.5,1.8-1.5C99.5,40.1,98.7,39.6,97.8,39.6z
			 M97.7,41.8h-0.4v-1.5h0.4c0.6,0,0.8,0.3,0.8,0.7C98.5,41.6,98.3,41.8,97.7,41.8z"/>
												<path id="XMLID_4722_" class="st1" d="M100.4,44.1l0.3-0.9h1.8l0.3,0.9h1l-1.8-4.5h-0.9l-1.7,4.5H100.4z M101.4,41.4
			c0.1-0.4,0.2-0.7,0.2-0.8l0,0c0,0.1,0.1,0.4,0.2,0.8l0.4,1.1h-1.3L101.4,41.4z"/>
												<path id="XMLID_4721_" class="st1" d="M104.3,39.3c0.3,0,0.5-0.2,0.5-0.5s-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5
			C103.8,39,104,39.3,104.3,39.3z"/>
												<rect id="XMLID_4720_" x="104.5" y="39.6" class="st1" width="1" height="4.5"/>
												<path id="XMLID_4719_" class="st1" d="M106.2,38.8c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5
			C106,39.3,106.2,39,106.2,38.8z"/>
												<polygon id="XMLID_4718_" class="st1" points="107.5,39.6 106.5,39.6 106.5,44.1 107.5,44.1 107.5,42.2 109.5,42.2 109.5,44.1
			110.4,44.1 110.4,39.6 109.5,39.6 109.5,41.4 107.5,41.4 		"/>
												<path id="XMLID_4717_" class="st1" d="M113.5,40.3c0.4,0,0.7,0.1,0.9,0.3l0.4-0.7c-0.4-0.2-0.8-0.4-1.4-0.4
			c-1.5,0-2.3,1.1-2.3,2.3s0.8,2.4,2.3,2.4c0.7,0,1.2-0.3,1.4-0.5l-0.4-0.7c-0.2,0.2-0.5,0.3-1,0.3c-0.9,0-1.3-0.7-1.3-1.6
			C112.2,41,112.7,40.3,113.5,40.3z"/>
												<path id="XMLID_4714_" class="st1" d="M115.6,39.6v4.5h1.4c1.1,0,1.8-0.5,1.8-1.5s-0.7-1.4-1.7-1.4h-0.6v-1.6H115.6z M117.1,42
			c0.6,0,0.8,0.2,0.8,0.7s-0.3,0.7-0.9,0.7h-0.5V42H117.1z"/>
												<path id="XMLID_4713_" class="st1" d="M119.5,39.6v4.5h1v-1.9h0.2c0.3,0,0.4,0.3,0.8,0.9c0.4,0.7,0.7,1,1.2,1h0.4v-0.8H123
			c-0.3,0-0.5-0.3-0.9-0.9c-0.2-0.3-0.4-0.6-0.5-0.7l1.6-2.1h-1l-1.3,1.9h-0.3v-1.9H119.5z"/>
												<path id="XMLID_4712_" class="st1" d="M126.4,41.6c0.2-0.3,0.4-0.6,0.4-0.7l0,0c0,0.1,0,0.3,0,0.6v2.6h0.9v-4.5h-1l-1.6,2.4
			c-0.3,0.4-0.4,0.7-0.5,0.8l0,0c0-0.1,0-0.4,0-0.7v-2.4h-0.9v4.5h0.9L126.4,41.6z"/>
												<path id="XMLID_4711_" class="st1" d="M130.7,39.3c0.6,0,1.1-0.3,1.1-1h-0.7c0,0.3-0.2,0.4-0.4,0.4c-0.3,0-0.4-0.2-0.4-0.4h-0.7
			C129.6,39,130.2,39.3,130.7,39.3z"/>
												<path id="XMLID_4710_" class="st1" d="M131.8,40.9L131.8,40.9c0,0.1,0,0.3,0,0.6v2.6h0.9v-4.5h-1l-1.6,2.4
			c-0.3,0.4-0.4,0.7-0.5,0.8l0,0c0-0.1,0-0.4,0-0.7v-2.4h-0.9v4.5h0.9l1.7-2.5C131.6,41.3,131.7,41,131.8,40.9z"/>
												<rect id="XMLID_4709_" x="135.1" y="39.6" class="st1" width="1" height="4.5"/>
												<polygon id="XMLID_4708_" class="st1" points="138.1,39.6 137.1,39.6 137.1,44.1 138.1,44.1 138.1,42.2 140.1,42.2 140.1,44.1
			141.1,44.1 141.1,39.6 140.1,39.6 140.1,41.4 138.1,41.4 		"/>
												<path id="XMLID_4707_" class="st1" d="M144.2,44.2c0.7,0,1.2-0.3,1.4-0.5l-0.4-0.7c-0.2,0.2-0.5,0.3-1,0.3c-0.9,0-1.3-0.7-1.3-1.6
			c0-0.8,0.5-1.5,1.3-1.5c0.4,0,0.7,0.1,0.9,0.3l0.4-0.7c-0.4-0.2-0.8-0.4-1.4-0.4c-1.5,0-2.3,1.1-2.3,2.3S142.6,44.2,144.2,44.2z"
												/>
												<polygon id="XMLID_4706_" class="st1" points="147.2,44.1 148.2,44.1 148.2,40.4 149.4,40.4 149.4,39.6 146,39.6 146,40.4
			147.2,40.4 		"/>
												<path id="XMLID_4705_" class="st1" d="M150.9,39.6H150v4.5h0.9l1.7-2.5c0.2-0.3,0.4-0.6,0.4-0.7l0,0c0,0.1,0,0.3,0,0.6v2.6h0.9
			v-4.5h-1l-1.6,2.4c-0.3,0.4-0.4,0.7-0.5,0.8l0,0c0-0.1,0-0.4,0-0.7v-2.5H150.9z"/>
												<polygon id="XMLID_4704_" class="st1" points="154.6,40.4 155.8,40.4 155.8,44.1 156.8,44.1 156.8,40.4 158,40.4 158,39.6
			154.6,39.6 		"/>
												<path id="XMLID_4703_" class="st1" d="M159.8,42.8c-0.2,0.4-0.3,0.6-0.7,0.6c-0.1,0-0.2,0-0.3,0l-0.1,0.7c0.1,0,0.2,0.1,0.5,0.1
			c0.8,0,1.1-0.3,1.5-1.2l1.5-3.4h-0.9l-0.9,2.1l-0.9-2.1h-0.9l1.4,3.1L159.8,42.8z"/>
												<polygon id="XMLID_4702_" class="st1" points="163.8,44.1 164.8,44.1 164.8,40.4 166,40.4 166,39.6 162.6,39.6 162.6,40.4
			163.8,40.4 		"/>
												<polygon id="XMLID_4701_" class="st1" points="91.8,51.7 91.8,47.2 88,47.2 88,51.7 89,51.7 89,48 90.9,48 90.9,51.7 		"/>
												<path id="XMLID_4698_" class="st1" d="M92.6,49.5c0,1.2,0.8,2.3,2.4,2.3c1.5,0,2.3-1.1,2.3-2.4c0-1.2-0.8-2.3-2.3-2.3
			C93.4,47.1,92.6,48.2,92.6,49.5z M96.2,49.5c0,0.8-0.4,1.6-1.3,1.6s-1.3-0.7-1.3-1.6c0-0.8,0.4-1.6,1.3-1.6S96.2,48.6,96.2,49.5z"
												/>
												<path id="XMLID_4697_" class="st1" d="M101.5,47.2h-3.1l-0.1,2.3c-0.1,1-0.2,1.5-0.8,1.6l0.1,0.7c1,0,1.4-0.6,1.6-2.1l0.1-1.7h1.3
			v3.7h1v-4.5H101.5z"/>
												<rect id="XMLID_4696_" x="102.5" y="47.2" class="st1" width="1" height="4.5"/>
												<polygon id="XMLID_4695_" class="st1" points="104.1,48 105.4,48 105.4,51.7 106.4,51.7 106.4,48 107.6,48 107.6,47.2 104.1,47.2
					"/>
												<path id="XMLID_4694_" class="st1" d="M109.1,47.2h-0.9v4.5h0.9l1.7-2.5c0.2-0.3,0.4-0.6,0.4-0.7l0,0c0,0.1,0,0.3,0,0.6v2.6h0.9
			v-4.5h-1l-1.6,2.4c-0.3,0.4-0.4,0.7-0.5,0.8l0,0c0-0.1,0-0.4,0-0.7L109.1,47.2L109.1,47.2z"/>
												<path id="XMLID_4693_" class="st1" d="M114.1,49.1v-1.9h-1v4.5h1v-1.9h0.2c0.3,0,0.4,0.3,0.8,0.9c0.4,0.7,0.7,1,1.2,1h0.4v-0.8
			h-0.1c-0.3,0-0.5-0.3-0.9-0.9c-0.2-0.3-0.4-0.6-0.5-0.7l1.6-2.1h-1l-1.3,1.9H114.1z"/>
												<path id="XMLID_4692_" class="st1" d="M118.3,50.3L118.3,50.3c0-0.1,0-0.4,0-0.7v-2.4h-0.9v4.5h0.9l1.7-2.5
			c0.2-0.3,0.4-0.6,0.4-0.7l0,0c0,0.1,0,0.3,0,0.6v2.6h0.9v-4.5h-1l-1.6,2.4C118.5,50,118.3,50.3,118.3,50.3z"/>
												<polygon id="XMLID_4691_" class="st1" points="124.8,48 126.5,48 126.5,47.2 123.8,47.2 123.8,51.7 124.8,51.7 		"/>
												<path id="XMLID_4688_" class="st1" d="M128.5,50.1c1.1,0,1.8-0.5,1.8-1.5s-0.7-1.4-1.7-1.4h-1.5v4.5h1v-1.6H128.5z M128.1,47.9
			h0.4c0.6,0,0.8,0.3,0.8,0.7c0,0.5-0.3,0.7-0.9,0.7H128L128.1,47.9L128.1,47.9z"/>
												<path id="XMLID_4685_" class="st1" d="M133.2,51.8c1.5,0,2.3-1.1,2.3-2.4c0-1.2-0.8-2.3-2.3-2.3s-2.3,1.1-2.3,2.4
			C130.8,50.7,131.7,51.8,133.2,51.8z M133.2,47.9c0.9,0,1.3,0.7,1.3,1.6c0,0.8-0.4,1.6-1.3,1.6c-0.9,0-1.3-0.7-1.3-1.6
			C131.9,48.6,132.3,47.9,133.2,47.9z"/>
												<path id="XMLID_4684_" class="st1" d="M139.8,47.2l-0.9,2.8c-0.1,0.3-0.2,0.7-0.2,0.8l0,0c0-0.1-0.1-0.5-0.2-0.8l-0.9-2.8h-0.9
			l-0.6,4.5h0.9l0.3-2.3c0-0.3,0.1-0.6,0.1-0.7l0,0c0,0.1,0.1,0.4,0.2,0.7l0.8,2.3h0.9l0.8-2.4c0.1-0.3,0.2-0.5,0.2-0.6l0,0
			c0,0.1,0,0.3,0.1,0.7l0.3,2.3h1l-0.6-4.5H139.8z"/>
												<path id="XMLID_4681_" class="st1" d="M143.6,47.2l-1.7,4.5h1l0.3-0.9h1.8l0.3,0.9h1l-1.8-4.5H143.6z M143.4,50.1l0.4-1.1
			c0.1-0.4,0.2-0.7,0.2-0.8l0,0c0,0.1,0.1,0.4,0.2,0.8l0.4,1.1H143.4z"/>
												<path id="XMLID_4678_" class="st1" d="M150.5,52.7h0.6l0.1-1.8h-0.5v-3.7h-2.9l-0.3,2.3c-0.1,0.8-0.2,1.2-0.5,1.5h-0.4l0.1,1.8
			h0.6l0.1-1h2.9L150.5,52.7z M149.8,50.9H148c0.2-0.2,0.3-0.7,0.4-1.3l0.2-1.6h1.1v2.9H149.8z"/>
												<path id="XMLID_4677_" class="st1" d="M153.9,47.9c0.4,0,0.7,0.1,0.9,0.3l0.4-0.7c-0.4-0.2-0.8-0.4-1.4-0.4
			c-1.5,0-2.3,1.1-2.3,2.3s0.8,2.4,2.3,2.4c0.7,0,1.2-0.3,1.4-0.5l-0.4-0.7c-0.2,0.2-0.5,0.3-1,0.3c-0.9,0-1.3-0.7-1.3-1.6
			C152.6,48.6,153.1,47.9,153.9,47.9z"/>
												<path id="XMLID_4674_" class="st1" d="M156,47.2v4.5h1.4c1.1,0,1.8-0.5,1.8-1.5s-0.7-1.4-1.7-1.4h-0.6v-1.6H156z M157.5,49.6
			c0.6,0,0.8,0.2,0.8,0.7S158,51,157.4,51h-0.5v-1.5L157.5,49.6L157.5,49.6z"/>
												<path id="XMLID_4673_" class="st1" d="M160.9,49.1v-1.9h-1v4.5h1v-1.9h0.2c0.3,0,0.4,0.3,0.8,0.9c0.4,0.7,0.7,1,1.2,1h0.4v-0.8
			h-0.1c-0.3,0-0.5-0.3-0.9-0.9c-0.2-0.3-0.4-0.6-0.5-0.7l1.6-2.1h-1l-1.3,1.9H160.9z"/>
												<path id="XMLID_4670_" class="st1" d="M166.1,47.1c-1.5,0-2.3,1.1-2.3,2.4c0,1.2,0.8,2.3,2.4,2.3c1.5,0,2.3-1.1,2.3-2.4
			C168.5,48.2,167.7,47.1,166.1,47.1z M166.1,51c-0.9,0-1.3-0.7-1.3-1.6c0-0.8,0.4-1.6,1.3-1.6c0.9,0,1.3,0.7,1.3,1.6
			C167.5,50.3,167.1,51,166.1,51z"/>
												<polygon id="XMLID_4669_" class="st1" points="169.2,51.7 170.2,51.7 170.2,48 171.9,48 171.9,47.2 169.2,47.2 		"/>
												<path id="XMLID_4666_" class="st1" d="M174.5,47.1c-1.5,0-2.3,1.1-2.3,2.4c0,1.2,0.8,2.3,2.4,2.3c1.5,0,2.3-1.1,2.3-2.4
			C176.8,48.2,176,47.1,174.5,47.1z M174.5,51c-0.9,0-1.3-0.7-1.3-1.6c0-0.8,0.4-1.6,1.3-1.6c0.9,0,1.3,0.7,1.3,1.6
			S175.4,51,174.5,51z"/>
												<path id="XMLID_4665_" class="st1" d="M89.1,58.6c-0.5,0-0.8-0.1-1-0.3L87.6,59c0.3,0.2,0.8,0.4,1.4,0.4c1,0,1.8-0.4,1.8-1.3
			c0-0.6-0.4-1-1-1.1l0,0c0.5-0.1,0.8-0.5,0.8-1.1c0-0.8-0.7-1.2-1.6-1.2c-0.7,0-1.1,0.2-1.4,0.4l0.4,0.7c0.2-0.2,0.5-0.3,1-0.3
			c0.4,0,0.7,0.2,0.7,0.6c0,0.4-0.3,0.6-0.8,0.6h-0.4v0.7H89c0.5,0,0.9,0.2,0.9,0.7C89.9,58.4,89.6,58.6,89.1,58.6z"/>
												<path id="XMLID_4662_" class="st1" d="M92,60.3l0.1-1H95l0.1,1h0.6l0.1-1.8h-0.5v-3.7h-2.9l-0.3,2.3c-0.1,0.8-0.2,1.2-0.5,1.5
			h-0.3l0.1,1.8L92,60.3L92,60.3z M93,57.2l0.2-1.6h1.1v3h-1.8C92.8,58.3,92.9,57.9,93,57.2z"/>
												<path id="XMLID_4659_" class="st1" d="M98.5,54.7c-1.5,0-2.3,1.1-2.3,2.4c0,1.2,0.8,2.3,2.4,2.3c1.5,0,2.3-1.1,2.3-2.4
			C100.9,55.8,100.1,54.7,98.5,54.7z M98.5,58.6c-0.9,0-1.3-0.7-1.3-1.6c0-0.8,0.4-1.6,1.3-1.6s1.3,0.7,1.3,1.6
			C99.9,57.9,99.5,58.6,98.5,58.6z"/>
												<path id="XMLID_4656_" class="st1" d="M101.6,59.3h1v-1.6h0.4c1.1,0,1.8-0.5,1.8-1.5s-0.7-1.4-1.7-1.4h-1.5
			C101.6,54.8,101.6,59.3,101.6,59.3z M102.6,55.5h0.4c0.6,0,0.8,0.3,0.8,0.7c0,0.5-0.3,0.7-0.9,0.7h-0.4L102.6,55.5L102.6,55.5z"/>
												<path id="XMLID_4653_" class="st1" d="M105.4,57.1c0,1.2,0.8,2.3,2.4,2.3s2.3-1.1,2.3-2.4c0-1.2-0.8-2.3-2.3-2.3
			C106.2,54.7,105.4,55.8,105.4,57.1z M109,57.1c0,0.8-0.4,1.6-1.3,1.6s-1.3-0.7-1.3-1.6c0-0.8,0.4-1.6,1.3-1.6
			C108.6,55.5,109,56.2,109,57.1z"/>
												<path id="XMLID_4649_" class="st1" d="M113.9,55.9c0-0.9-0.7-1.1-1.6-1.1h-1.5v4.5h1.5c1,0,1.8-0.3,1.8-1.3c0-0.6-0.5-1-1-1.1l0,0
			C113.5,56.8,113.9,56.5,113.9,55.9z M111.7,55.5h0.5c0.5,0,0.7,0.2,0.7,0.5c0,0.4-0.2,0.6-0.7,0.6h-0.4L111.7,55.5L111.7,55.5z
			 M113.1,58c0,0.4-0.3,0.6-0.8,0.6h-0.5v-1.2h0.5C112.8,57.3,113.1,57.6,113.1,58z"/>
												<path id="XMLID_4648_" class="st1" d="M115,54.7c-0.3,0-0.5,0.2-0.5,0.5c0,0.4,0.4,0.4,0.4,0.8c0,0.2-0.1,0.5-0.3,0.6h0.6
			c0.2-0.3,0.5-0.8,0.5-1.2C115.6,55,115.3,54.7,115,54.7z"/>
												<path id="XMLID_4645_" class="st1" d="M116.9,57.8c-0.3,0.5-0.5,0.8-0.8,0.8H116v0.8h0.4c0.5,0,0.8-0.2,1.2-1
			c0.3-0.6,0.5-0.9,0.7-0.9h0.1v1.9h1v-4.5h-1.5c-1.1,0-1.7,0.5-1.7,1.3c0,0.7,0.5,1.1,1,1.2l0,0C117.2,57.4,117,57.6,116.9,57.8z
			 M117.2,56.2c0-0.4,0.2-0.6,0.8-0.6h0.5v1.3H118C117.5,56.8,117.2,56.5,117.2,56.2z"/>
											</g>
											<g id="XMLID_5168_">
												<path id="XMLID_1605_" class="st2" d="M31.7,5.9l0.9,4.9c0,0,0.7,0.4,2.4,0.1c1.6-0.2,2.2-1,2.2-1l-0.9-4.8L31.7,5.9z"/>
												<path id="XMLID_183_" class="st2" d="M53.7,8.9L50.8,13c0,0,0.2,0.7,1.6,1.8c1.3,0.9,2.2,0.9,2.2,0.9l2.8-4L53.7,8.9z"/>
												<path id="XMLID_185_" class="st2" d="M11,41.2l4.9-0.8c0,0,0.4-0.7,0.1-2.4c-0.2-1.6-1-2.2-1-2.2l-4.9,0.8L11,41.2z"/>
												<path id="XMLID_187_" class="st2" d="M24.4,58.9l2.9-4.1c0,0-0.2-0.7-1.6-1.8c-1.3-0.9-2.2-0.8-2.2-0.8l-2.8,4.1L24.4,58.9z"/>
												<path id="XMLID_189_" class="st2" d="M46.3,62l-0.9-5c0,0-0.7-0.4-2.4-0.1c-1.6,0.2-2.2,1-2.2,1l0.8,4.9L46.3,62z"/>
												<path id="XMLID_190_" class="st2" d="M64,48.6l-4-3c0,0-0.7,0.2-1.8,1.6c-1,1.3-0.9,2.2-0.9,2.2l4,2.9L64,48.6z"/>
												<g id="XMLID_5167_">
													<g id="XMLID_181_">
														<polygon id="XMLID_1447_" class="st2" points="42.3,33.3 45,35.2 41.7,35.7 41.5,34.4 				"/>
														<polygon id="XMLID_1444_" class="st2" points="35.8,34.4 33.1,32.6 36.3,32 36.6,33.3 				"/>
														<polygon id="XMLID_1390_" class="st2" points="42.3,33.3 44.2,30.6 40.9,31.2 41.2,32.5 				"/>
														<polygon id="XMLID_192_" class="st2" points="35.8,34.4 33.9,37.1 37.1,36.6 36.9,35.2 				"/>
													</g>
													<g id="XMLID_1448_">
														<polygon id="XMLID_1592_" class="st2" points="39.6,37.1 37.7,39.8 37.1,36.6 38.5,36.3 				"/>
														<polygon id="XMLID_4767_" class="st2" points="38.5,30.6 40.3,27.9 40.9,31.1 39.6,31.4 				"/>
														<polygon id="XMLID_1573_" class="st2" points="38.5,30.6 35.8,28.7 36.3,32 37.7,31.7 				"/>
														<polygon id="XMLID_1478_" class="st2" points="39.6,37.1 42.3,39 41.7,35.8 40.4,36 				"/>
													</g>
													<g id="XMLID_4768_">
														<polygon id="XMLID_4769_" class="st3" points="36.9,35.2 37.1,36.6 38.5,36.3 				"/>
														<polygon id="XMLID_4770_" class="st3" points="41.2,32.5 40.9,31.2 39.6,31.4 				"/>
													</g>
													<g id="XMLID_4804_">
														<polygon id="XMLID_4818_" class="st3" points="38.5,36.3 39.6,37.1 40.4,36 				"/>
														<polygon id="XMLID_4805_" class="st3" points="39.6,31.4 38.5,30.6 37.7,31.7 				"/>
													</g>
													<g id="XMLID_4942_">
														<polygon id="XMLID_5162_" class="st3" points="40.4,36 41.7,35.7 41.5,34.4 				"/>
														<polygon id="XMLID_4943_" class="st3" points="37.7,31.7 36.3,32 36.6,33.3 				"/>
													</g>
													<g id="XMLID_5164_">
														<polygon id="XMLID_5166_" class="st3" points="41.5,34.4 42.3,33.3 41.2,32.5 				"/>
														<polygon id="XMLID_5165_" class="st3" points="36.6,33.3 35.8,34.4 36.9,35.2 				"/>
													</g>
													<polygon id="XMLID_5163_" class="st4" points="36.6,33.3 36.9,35.2 38.5,36.3 40.4,36 41.5,34.4 41.2,32.5 39.6,31.4 37.7,31.7
							"/>
												</g>
											</g>
										</g>
</svg>
								</a>
							</div>	<!--	.logo	-->
						</div>		<!--	.header__logo	-->

						<div class="header__menu insidePage__menu">
							<jdoc:include type="modules" name="insidePage__menu" style="xhtml" />
						</div>		<!--	.header__menu insidePage__menu	-->

						<div class="header__search">
							<div class="search">
								<jdoc:include type="modules" name="search" style="xhtml" />
							</div>		<!--	.search		-->
							<div class="language">
								<jdoc:include type="modules" name="language" style="xhtml" />
							</div>		<!--	.language	-->
						</div>		<!--	.header__search		-->
						<div class="header__menu mainPage__menu">
							<jdoc:include type="modules" name="mainPage__menu" style="xhtml" />
						</div>		<!--	.header__menu mainPage__menu	-->
					</div>	<!--	.row	-->
				</header>		<!--	.header		-->

			</div>	<!-- 	.row	 -->
			<div class="breadcrumbs">
				<jdoc:include type="modules" name="breadcrumbs" style="none" />
			</div>	<!--	.breadcrumbs	-->
		</div>	<!--	.container		-->
		<div class="container">
			<!-- Begin Content -->

			<jdoc:include type="component" />
            <div class="row">
                <div class="events">
                    <jdoc:include type="modules" name="events" style="xhtml" />
                </div>	<!--	.events		-->

                <div class="banner">
                    <jdoc:include type="modules" name="banner" style="xhtml" />
                </div>	<!--	.banner		-->
            </div>		<!--	.row	-->

            <div class="row">
                <jdoc:include type="modules" name="content" style="xhtml" />
            </div>		<!--	.row	-->

			<!-- End Content -->
		</div>	<!--	.container 	-->
	</div>  <!--	.site	 -->

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<jdoc:include type="modules" name="footer" style="xhtml" />
			</div>	<!--	.row	-->
		</div>		<!--	.container	-->
	</footer>

<script src="<?php echo $this->baseurl . '/templates/' . $this->template . '/js/common.js'?>"></script>

</body>
</html>
