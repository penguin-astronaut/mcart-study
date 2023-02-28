<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>
<div class="site-section border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.feedback",
                    "feedback",
                    array(
                        "EMAIL_TO" => "chack.k@mail.ru",
                        "EVENT_MESSAGE_ID" => array(
                        ),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array(
                            0 => "NAME",
                            1 => "EMAIL",
                            2 => "MESSAGE",
                        ),
                        "USE_CAPTCHA" => "Y",
                        "COMPONENT_TEMPLATE" => "feedback"
                    ),
                    false
                );?>
            </div>
            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/feedback.php"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>