<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?><?
$rsUser = CUser::GetByID(6);
$arUser = $rsUser->Fetch();
var_dump($arUser);
var_dump(SITE_ID);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>