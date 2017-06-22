<?php

namespace Contao;

class ModuleOnePageNavigation extends \Module
{
	protected $strTemplate = 'mod_onepage_navigation';

	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['personalData'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}

	protected function compile()
	{
		$arrNavigation = array();
		$objArticle = \ArticleModel::findByPid($GLOBALS['objPage']->id);
		while($objArticle->next())
		{
			if($objArticle->addNavigation && $objArticle->published)
			{
				if($objArticle->navigation_title)
				{
					$objArticle->title = $objArticle->navigation_title;
				}

				if (version_compare(VERSION, '4.1', '>='))
				{
					$objArticle->alias = 'article-'.$objArticle->id;
				}

				$arrNavigation[] = (object) $objArticle->row();
			}
		}

		if(!empty($arrNavigation)){
			$arrNavigation[0]->css = 'first active';
			$arrNavigation[count($arrNavigation) - 1]->css = 'last';	
		}
		
		$this->Template->navigation = $arrNavigation;
	}
}