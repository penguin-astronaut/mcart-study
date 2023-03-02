<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>
<div class="site-section border-bottom">
    <div class="container">
        <div class="col-lg-6 mx-auto">
            <?if($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
                <p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
            <?endif;?>

            <?if(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"] && $arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
                <p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
            <?endif?>

            <?if ($arParams["~AUTH_RESULT"] && $arParams["~AUTH_RESULT"]['TYPE'] === 'ERROR'):?>
                <div class="text-center">
                    <?
                    ShowMessage($arParams["~AUTH_RESULT"]);
                    ?>
                </div>
            <?endif;?>

            <form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data">
                <input type="hidden" name="AUTH_FORM" value="Y" />
                <input type="hidden" name="TYPE" value="REGISTRATION" />

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_NAME"><?=GetMessage("AUTH_NAME")?></label>
                        <input type="text" id="USER_NAME" class="form-control" name="USER_NAME" value="<?=$arResult["USER_NAME"]?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_LAST_NAME"><?=GetMessage("AUTH_LAST_NAME")?></label>
                        <input type="text" id="USER_LAST_NAME" class="form-control" name="USER_LAST_NAME" value="<?=$arResult["USER_LAST_NAME"]?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_LOGIN"><span class="text-danger">*</span><?=GetMessage("AUTH_LOGIN_MIN")?></label>
                        <input type="text" id="USER_LOGIN" class="form-control" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_PASSWORD"><span class="text-danger">*</span><?=GetMessage("AUTH_PASSWORD_REQ")?></label>
                        <input type="password" id="USER_PASSWORD" class="form-control" name="USER_PASSWORD" value="<?=$arResult["USER_PASSWORD"]?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_CONFIRM_PASSWORD"><span class="text-danger">*</span><?=GetMessage("AUTH_CONFIRM")?></label>
                        <input type="password" id="USER_CONFIRM_PASSWORD" class="form-control" name="USER_CONFIRM_PASSWORD" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_EMAIL"><?if($arResult["EMAIL_REQUIRED"]):?><span class="text-danger">*</span><?endif?><?=GetMessage("AUTH_EMAIL")?></label>
                        <input type="email" id="USER_EMAIL" class="form-control" name="USER_EMAIL" value="<?=$arResult["USER_EMAIL"]?>">
                    </div>
                </div>

                <?// ********************* User properties ***************************************************?>
                <?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
                                <?if ($arUserField["MANDATORY"]=="Y"):?><span class="text-danger">*</span><?endif;
                                ?><label class="font-weight-bold"><?=$arUserField["EDIT_FORM_LABEL"]?>: </label>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:system.field.edit",
                                    $arUserField["USER_TYPE"]["USER_TYPE_ID"],
                                    array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?>
                            <?endforeach;?>
                        </div>
                    </div>
                <?endif;?>
                <?// ******************** /User properties ***************************************************?>


                <?if ($arResult["USE_CAPTCHA"] == "Y"):?>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <p class="font-weight-bold"><?=GetMessage("CAPTCHA_REGF_TITLE")?></p>
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <p class="mb-0"><span class="text-danger">*</span><?=GetMessage("CAPTCHA_REGF_PROMT")?>:</td></p>
                            <input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
                        </div>
                    </div>
                <?endif;?>

                <?$APPLICATION->IncludeComponent("bitrix:main.userconsent.request", "",
                    array(
                        "ID" => COption::getOptionString("main", "new_user_agreement", ""),
                        "IS_CHECKED" => "Y",
                        "AUTO_SAVE" => "N",
                        "IS_LOADED" => "Y",
                        "ORIGINATOR_ID" => $arResult["AGREEMENT_ORIGINATOR_ID"],
                        "ORIGIN_ID" => $arResult["AGREEMENT_ORIGIN_ID"],
                        "INPUT_NAME" => $arResult["AGREEMENT_INPUT_NAME"],
                        "REPLACE" => array(
                            "button_caption" => GetMessage("AUTH_REGISTER"),
                            "fields" => array(
                                rtrim(GetMessage("AUTH_NAME"), ":"),
                                rtrim(GetMessage("AUTH_LAST_NAME"), ":"),
                                rtrim(GetMessage("AUTH_LOGIN_MIN"), ":"),
                                rtrim(GetMessage("AUTH_PASSWORD_REQ"), ":"),
                                rtrim(GetMessage("AUTH_EMAIL"), ":"),
                            )
                        ),
                    )
                );?>

                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" />
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p class="mb-0"><?=$arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
                            <p class="mb-0"><span class="text-danger">*</span>-<?=GetMessage("AUTH_REQ")?></p>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="<?=$arResult["AUTH_AUTH_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_AUTH")?></a>
                        </div>
                    </div>
                </div>
            </form>

            <script type="text/javascript">
                document.bform.USER_NAME.focus();
            </script>
        </div>
    </div>
</div>