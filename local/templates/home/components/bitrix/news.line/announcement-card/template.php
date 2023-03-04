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
                        <span class="price rounded">&#8381; <?=$arItem['PROPERTY_PRICE_VALUE']?></span>
                        <h3 class="title"><?=$arItem["NAME"]?></h3>
                        <p class="location"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></p>
                    </div>
                    <div class="prop-more-info">
                        <div class="inner d-flex">
                            <div class="col">
                                <span>Площадь:</span>
                                <strong><?=$arItem['PROPERTY_TOTAL_AREA_VALUE']?>м<sup>2</sup></strong>
                            </div>
                            <div class="col">
                                <span>Этажей:</span>
                                <strong><?=$arItem['PROPERTY_FLOORS_NUMBERS_VALUE']?></strong>
                            </div>
                            <div class="col">
                                <span>Ванных:</span>
                                <strong><?=$arItem['PROPERTY_BATHROOMS_NUMBERS_VALUE']?></strong>
                            </div>
                            <div class="col">
                                <span>Гараж:</span>
                                <strong><?=$arItem['PROPERTY_AVAILABILITY_GARAGE_VALUE'] ?: 'нет'?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?endforeach;?>
</div>
