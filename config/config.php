<?php

/**
 * Frontend-Module
 **/
array_insert($GLOBALS['FE_MOD']['navigationMenu'], count($GLOBALS['FE_MOD']['navigationMenu']), array
(
	'onepage_navigation'     => 'ModuleOnePageNavigation'
));

/**
 * Hooks
 **/
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('OnePageHook', 'replaceScrollTag');

/**
 * Javascript
 **/
$GLOBALS['TL_JQUERY']['scrollToJS'] = '<script src="system/modules/onepage-navigation/assets/js/jquery.scrollTo.min.js"></script>';
$GLOBALS['TL_JQUERY']['onepageJS']  = '<script src="system/modules/onepage-navigation/assets/js/onepage.js"></script>';