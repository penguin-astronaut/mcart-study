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

<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">&#8381;<?=number_format($arResult['DISPLAY_PROPERTIES']["PRICE"]["VALUE"], 2, ',', ' ')?></strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">
                        <?if ($arResult['DISPLAY_PROPERTIES']['GALLERY'] && !$arResult['DISPLAY_PROPERTIES']['GALLERY']['ID']):?>
                            <? foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE'] as $photo):?>
                                <div><img src="<?=$photo['SRC']?>" alt="Image" class="img-fluid"></div>
                            <?endforeach;?>
                        <?elseif($arResult['DISPLAY_PROPERTIES']['GALLERY']):?>
                            <div><img src="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC']?>" alt="Image" class="img-fluid"></div>
                        <?else:?>
                            <div><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
                        <?endif;?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">&#8381;<?=number_format($arResult['DISPLAY_PROPERTIES']["PRICE"]["VALUE"], 2, ',', ' ')?></strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
<!--                                <li>
                                    <span class="property-specs">Дата обновления</span>
                                    <span class="property-specs-number"><?/*=$arResult['TIMESTAMP_X']*/?></span>

                                </li>
                                <li>
                                    <span class="property-specs">Количество этажей</span>
                                    <span class="property-specs-number"><?/*=$arResult['DISPLAY_PROPERTIES']['FLOORS_NUMBERS']['VALUE']*/?></span>

                                </li>
                                <li>
                                    <span class="property-specs">Общая площадь</span>
                                    <span class="property-specs-number"><?/*=$arResult['DISPLAY_PROPERTIES']['TOTAL_AREA']['VALUE']*/?></span>
                                </li>-->
                                <li>
                                    <span class="property-specs">Количество санузлов</span>
                                    <span class="property-specs-number"><?=$arResult['DISPLAY_PROPERTIES']['BATHROOMS_NUMBERS']['VALUE']?></span>
                                </li>
                                <li>
                                    <span class="property-specs">Наличие гаража</span>
                                    <span class="property-specs-number"><?=$arResult['DISPLAY_PROPERTIES']['AVAILABILITY_GARAGE']['VALUE'] ?: 'нет'?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Дата обновления</span>
                            <strong class="d-block"><?=ConvertDateTime($arResult['TIMESTAMP_X'], "DD.MM.YYYY HH:MI")?></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Количество этажей</span>
                            <strong class="d-block"><?=$arResult['DISPLAY_PROPERTIES']['FLOORS_NUMBERS']['VALUE']?></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Общая площадь</span>
                            <strong class="d-block"><?=$arResult['DISPLAY_PROPERTIES']['TOTAL_AREA']['VALUE']?></strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black">More Info</h2>
                    <p><?=$arResult["PREVIEW_TEXT"];?></p>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Property Gallery</h2>
                        </div>
                        <?if ($arResult['DISPLAY_PROPERTIES']['GALLERY']):?>
                            <? foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE'] as $photo):?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <a href="<?=$photo['SRC']?>" class="image-popup gal-item"><img src="<?=$photo['SRC']?>" alt="Image" class="img-fluid"></a>
                                </div>
                            <?endforeach;?>
                        <?else:?>
                            <div class="col-12">Изображения отсуствуют</div>
                        <?endif;?>

                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Дополнительные материалы</h2>
                        </div>
                        <?if ($arResult['DISPLAY_PROPERTIES']['MATERIALS'] && !$arResult['DISPLAY_PROPERTIES']['MATERIALS']['ID']):?>
                            <? foreach ($arResult['DISPLAY_PROPERTIES']['MATERIALS']['FILE_VALUE'] as $material):?>
                                <div class="col-12">
                                    <a href="<?=$material['SRC']?>" class="image-popup gal-item"><?=$material['ORIGINAL_NAME']?></a>
                                </div>
                            <?endforeach;?>
                        <? elseif($arResult['DISPLAY_PROPERTIES']['MATERIALS']): ?>
                            <div class="col-12">
                                <a href="<?=$arResult['DISPLAY_PROPERTIES']['MATERIALS']['FILE_VALUE']['SRC']?>" class="image-popup gal-item"><?=$arResult['DISPLAY_PROPERTIES']['MATERIALS']['FILE_VALUE']['ORIGINAL_NAME']?></a>
                            </div>
                        <?else:?>
                            <div class="col-12">Материалы отуствуют</div>
                        <?endif;?>

                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Ссылки на внешние ресурсы</h2>
                        </div>
                        <?if ($arResult['DISPLAY_PROPERTIES']['EXTERNAL_LINKS']):?>
                            <? foreach ($arResult['DISPLAY_PROPERTIES']['EXTERNAL_LINKS']['VALUE'] as $link):?>
                                <div class="col-12">
                                    <a href="<?=$link?>" class="image-popup gal-item"><?=$link?></a>
                                </div>
                            <?endforeach;?>
                        <?else:?>
                            <div class="col-12">Ссылки отуствуют</div>
                        <?endif;?>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 pl-md-5">

                <div class="bg-white widget border rounded">

                    <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>

                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                </div>

            </div>
        </div>
    </div>
</div>