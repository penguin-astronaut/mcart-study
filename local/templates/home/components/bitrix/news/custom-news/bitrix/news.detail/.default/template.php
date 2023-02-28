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

<div class="row align-items-center">
    <div class="col-md-6 order-md-2" data-aos="fade-up" data-aos-delay="100">
        <?if($arResult["DETAIL_PICTURE"]):?>
            <img src="<?=$arResult["DETAIL_PICTURE"]['SRC']?>" alt="Image" class="img-fluid">
        <?else:?>
            <img src="/local/templates/.default/images/hero_bg_1.jpg" alt="Image" class="img-fluid">
        <?endif?>
    </div>
    <div class="col-md-5 mr-auto order-md-1"  data-aos="fade-up" data-aos-delay="200">
        <div class="site-section-title mb-3">
            <h2><?=$arResult["NAME"]?></h2>
        </div>
        <p><?=$arResult["DETAIL_TEXT"];?></p>
    </div>
</div>