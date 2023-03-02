<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="site-section border-bottom">
    <div class="container">
        <div class="col-lg-6 mx-auto">
            <?ShowMessage($arParams["~AUTH_RESULT"]);?>
            <form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
                <? if ($arResult["BACKURL"] <> ''):?>
                    <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
                <?endif;?>
                <input type="hidden" name="AUTH_FORM" value="Y">
                <input type="hidden" name="TYPE" value="SEND_PWD">

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="USER_LOGIN"><?=GetMessage("sys_forgot_pass_login1")?></label>
                        <input type="text" id="USER_LOGIN" class="form-control" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>">
                        <input type="hidden" name="USER_EMAIL" />
                    </div>
                </div>
                <div><small><?echo GetMessage("sys_forgot_pass_note_email")?></small></div>
                <?if($arResult["USE_CAPTCHA"]):?>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <div>
                                <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                                <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
                            </div>
                            <div><?echo GetMessage("system_auth_captcha")?></div>
                            <div><input type="text" name="captcha_word" maxlength="50" value="" /></div>
                        </div>
                    </div>
                <?endif?>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input class="btn btn-primary  py-2 px-4 rounded-0" type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
                    </div>
                </div>
            </form>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
                </div>
            </div>

            <script type="text/javascript">
                document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
                document.bform.USER_LOGIN.focus();
            </script>
        </div>
    </div>
</div>