<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="site-section border-bottom">
    <div class="container">
        <form class="col-lg-6 mx-auto" name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
            <div class="text-center">
                <?
                ShowMessage($arParams["~AUTH_RESULT"]);
                ShowMessage($arResult['ERROR_MESSAGE']);
                ?>
            </div>
            <input type="hidden" name="AUTH_FORM" value="Y" />
            <input type="hidden" name="TYPE" value="AUTH" />
            <?if ($arResult["BACKURL"] <> ''):?>
                <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
            <?endif?>
            <?foreach ($arResult["POST"] as $key => $value):?>
                <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
            <?endforeach?>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="login"><?=GetMessage("AUTH_LOGIN")?></label>
                    <input type="text" id="login" class="form-control" name="USER_LOGIN" value="<?=$arResult["LAST_LOGIN"]?>">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="password"><?=GetMessage("AUTH_PASSWORD")?></label>
                    <input type="password" id="password" class="form-control"  name="USER_PASSWORD" value="">
                </div>
            </div>

            <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                <div class="row form-check form-check-inline mb-3">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y"/>
                        <label class="form-check-label" for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?=GetMessage("AUTH_REMEMBER_ME")?></label>
                    </div>
                </div>
            <?endif;?>

            <?if ($arResult["CAPTCHA_CODE"]):?>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <td colspan="2">
                            <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
                            <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
                            <input type="text" name="captcha_word" maxlength="50" value="" /></td>
                    </div>
                </div>
            <?endif?>

            <div class="row form-group">
                <div class="col-md-12">
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" />
                    </div>
                </div>
            </div>

            <?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="text-center">
                        <noindex>
                            <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
                        </noindex>
                    </div>
                </div>
            </div>
            <?endif?>

            <?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y"):?>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="text-center">
                        <noindex>
                            <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a><br />
                        </noindex>
                    </div>
                </div>
            </div>
            <?endif?>

        </form>
    </div>
</div>
<script type="text/javascript">
<?if ($arResult["LAST_LOGIN"] <> ''):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>