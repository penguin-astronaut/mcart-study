<?php

AddEventHandler("main", "OnBeforeUserRegister", ["AuthEvents", "BeforeUserRegister"]);

class AuthEvents
{
    public static function BeforeUserRegister(&$arFields)
    {
        if (isset($arFields['UF_USER_TYPE'])) {
            $arFields["GROUP_ID"][] = $arFields['UF_USER_TYPE'] == 1 ? 7 : 6;
        }
    }
}