<?php

namespace Contao;

class OnePageHook extends \Controller
{
	public function replaceScrollTag($strTag)
	{
		$value = false;
		$arrExplode = explode("::", $strTag);

		if($arrExplode[0] == "scroll" && count($arrExplode) == 3)
		{
			if(substr($arrExplode[1], 0, 1) == "#")
			{
				$arrExplode[1] = substr($arrExplode[1], 1);
			}

			$value = '<a href="#" data-scroll="' . $arrExplode[1] . '" title="' . $arrExplode[2] . '">' . $arrExplode[2] . '</a>';
		}

		if($arrExplode[0] == "lightbox")
		{
			$objPage = \PageModel::findById($arrExplode[1]);
			$url = $this->generateFrontendUrl($objPage->row(), '');

			if($objPage->pageTitle)
			{
				$objPage->title = $objPage->pageTitle;
			}

			$value = '<a href="' . $url . '" class="cboxElement" title="' . $objPage->title . '">' . $objPage->title . '</a>';
		}

		return $value;
	}
}