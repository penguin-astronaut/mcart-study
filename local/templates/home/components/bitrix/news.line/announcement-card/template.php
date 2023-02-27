<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="row mb-5">
    <?
    $arPropItems = array_flip(array_column($arResult["ITEMS"], 'ID'));
    $necessaryProperties = ['PRICE', 'TOTAL_AREA', 'FLOORS_NUMBERS', 'BATHROOMS_NUMBERS', 'AVAILABILITY_GARAGE'];
    CIBlockElement::GetPropertyValuesArray($arPropItems, $arParams['IBLOCKS'][0], ['CODE' => array_map(fn($item) => $item['CODE'], $arPropItems)]);
    ?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
                <figure>
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
                </figure>
                <div class="prop-text">
                    <div class="inner">
                        <span class="price rounded">&#8381; <?=$arPropItems[$arItem['ID']]['PRICE']['VALUE']?></span>
                        <h3 class="title"><?=$arItem["NAME"]?></h3>
                        <p class="location"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
                    </div>
                    <div class="prop-more-info">
                        <div class="inner d-flex">
                            <div class="col">
                                <span>Площадь:</span>
                                <strong><?=$arPropItems[$arItem['ID']]['TOTAL_AREA']['VALUE']?>м<sup>2</sup></strong>
                            </div>
                            <div class="col">
                                <span>Этажей:</span>
                                <strong><?=$arPropItems[$arItem['ID']]['FLOORS_NUMBERS']['VALUE']?></strong>
                            </div>
                            <div class="col">
                                <span>Ванных:</span>
                                <strong><?=$arPropItems[$arItem['ID']]['BATHROOMS_NUMBERS']['VALUE']?></strong>
                            </div>
                            <div class="col">
                                <span>Гараж:</span>
                                <strong><?=$arPropItems[$arItem['ID']]['AVAILABILITY_GARAGE']['VALUE'] ?: 'нет'?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?endforeach;?>
</div>
