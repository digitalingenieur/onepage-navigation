<?php

$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][]   = 'addNavigation';
$GLOBALS['TL_DCA']['tl_article']['palettes']['default']          = str_replace("{layout_legend}", "{onepage_legend},addNavigation;{layout_legend}", $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['addNavigation'] = 'navigation_title';

$GLOBALS['TL_DCA']['tl_article']['fields']['addNavigation'] = array
(
	'exclude'                 => true,
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['addNavigation'],
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'doNotCopy'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['navigation_title'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['navigation_title'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'search'                  => true,
	'eval'                    => array('mandatory'=>false, 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'long'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);