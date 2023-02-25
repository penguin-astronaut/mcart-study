<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;
//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<div>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index + 1 < $itemSize ? '<span class="mx-2 text-white">&bullet;</span>' : '');

	if ($arResult[$index]["LINK"] <> "" && $index != $itemSize-1) {
        $strReturn .= "<a href=\"{$arResult[$index]["LINK"]}\">$title</a>" . $arrow;
	} else {
		$strReturn .= "<strong class=\"text-white\">$title</strong>";
	}
}

return $strReturn . '</div>';