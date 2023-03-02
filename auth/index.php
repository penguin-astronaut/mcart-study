<?
define('NEED_AUTH', true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && $_REQUEST["backurl"]) {
    LocalRedirect($backurl);
}
LocalRedirect("/");
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>