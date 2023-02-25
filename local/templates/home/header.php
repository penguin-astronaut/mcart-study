<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addString('<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">');
Asset::getInstance()->addCss("/local/templates/.default/fonts/icomoon/style.css");
Asset::getInstance()->addCss("/local/templates/.default/css/bootstrap.min.css");
Asset::getInstance()->addCss("/local/templates/.default/css/magnific-popup.css");
Asset::getInstance()->addCss("/local/templates/.default/css/jquery-ui.css");
Asset::getInstance()->addCss("/local/templates/.default/css/owl.carousel.min.css");
Asset::getInstance()->addCss("/local/templates/.default/css/owl.theme.default.min.css");
Asset::getInstance()->addCss("/local/templates/.default/css/bootstrap-datepicker.css");
Asset::getInstance()->addCss("/local/templates/.default/css/bootstrap-datepicker.css");
Asset::getInstance()->addCss("/local/templates/.default/css/bootstrap-datepicker.css");
Asset::getInstance()->addCss("/local/templates/.default/css/mediaelementplayer.css");
Asset::getInstance()->addCss("/local/templates/.default/css/animate.css");
Asset::getInstance()->addCss("/local/templates/.default/fonts/flaticon/font/flaticon.css");
Asset::getInstance()->addCss("/local/templates/.default/css/fl-bigmug-line.css");
Asset::getInstance()->addCss("/local/templates/.default/css/aos.css");

Asset::getInstance()->addJs("/local/templates/.default/js/jquery-3.3.1.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/jquery-migrate-3.0.1.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/jquery-ui.js");
Asset::getInstance()->addJs("/local/templates/.default/js/bootstrap.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/owl.carousel.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/mediaelement-and-player.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/jquery.countdown.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/jquery.magnific-popup.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/bootstrap-datepicker.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/bootstrap-datepicker.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/aos.js");
Asset::getInstance()->addJs("/local/templates/.default/js/main.js");
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="/local/templates/.default/template_style.css">
</head>

<body>
<?$APPLICATION->ShowPanel();?>

<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/header/phone.php"
                            )
                        );?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/header/email.php"
                            )
                        );?>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/header/socials.php"
                        )
                    );?>
                </div>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/header/logo.php"
                        )
                    );?>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "36000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_multi"
	),
	false
);?>
                </div>
            </div>
        </div>
    </div>
</div>

<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/local/templates/.default/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10">
                    <h1 class="mb-2"><?$APPLICATION->ShowTitle(false)?></h1>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "nav-breadcrumb",
                        Array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section border-bottom">
        <div class="container">
<? endif; ?>
