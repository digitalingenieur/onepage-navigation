<?php

ClassLoader::addNamespaces(array
(
	'Contao'
));

ClassLoader::addClasses(array
(
	'Contao\ModuleOnePageNavigation' => 'system/modules/onepage-mavigation/modules/ModuleOnePageNavigation.php',
	'Contao\OnePageHook'             => 'system/modules/onepage-mavigation/classes/OnePageHook.php'
));

TemplateLoader::addFiles(array
(
	'mod_onepage_navigation' => 'system/modules/onepage-mavigation/templates/modules'
));