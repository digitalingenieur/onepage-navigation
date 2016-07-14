<?php

ClassLoader::addNamespaces(array
(
	'Contao'
));

ClassLoader::addClasses(array
(
	'Contao\ModuleOnePageNavigation' => 'system/modules/onepage-navigation/modules/ModuleOnePageNavigation.php',
	'Contao\OnePageHook'             => 'system/modules/onepage-navigation/classes/OnePageHook.php'
));

TemplateLoader::addFiles(array
(
	'mod_onepage_navigation' => 'system/modules/onepage-navigation/templates/modules'
));
