<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Биржа недвижимости");
?>
<?
$GLOBALS['announcementFilter'] = ['!PROPERTY_PREFERRED_DEAL' => false];

$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_banner", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "announcementFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "announcement",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider_banner"
	),
	false
);
?>
<div class="py-5">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/main/feature_1.php"
                    )
                );?>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/main/feature_2.php"
                    )
                );?>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/main/feature_3.php"
                    )
                );?>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>New Properties for You</h2>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.line",
            "announcement-card",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "300",
                "CACHE_TYPE" => "A",
                "DETAIL_URL" => "",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "PREVIEW_PICTURE",
                    2 => "",
                ),
                "IBLOCKS" => array(
                    0 => "5",
                ),
                "IBLOCK_TYPE" => "announcement",
                "NEWS_COUNT" => "9",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "COMPONENT_TEMPLATE" => "announcement-card"
            ),
            false
        );?>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center mb-5">
                <div class="site-section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"priorities", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ICON",
			1 => "LINK",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "priorities"
	),
	false
);?>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <div class="site-section-title">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "news-cards", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
            "DISPLAY_DATE" => "Y",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => $_REQUEST["ID"],	// Код информационного блока
            "IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "3",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
        false
        );?>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>