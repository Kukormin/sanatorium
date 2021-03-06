<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"san", 
	array(
		"IBLOCK_TYPE" => "aspro_resort_catalog",
		"IBLOCK_ID" => "21",
		"NEWS_COUNT" => "6",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "FORM_ORDER",
			2 => "PRICE",
			3 => "PRICEOLD",
			4 => "PRICE_WEEKEND",
			5 => "PRICE_WEEKEND_OLD",
			6 => "SIZE_ZHILAYA",
			7 => "WIFI",
			8 => "CHILD_0",
			9 => "CHILD_4",
			10 => "DAYS",
			11 => "SLEEP_ROOM",
			12 => "RELAX_WITH_CHILD",
			13 => "PROGRAMMS",
			14 => "PROFILES",
			15 => "DISTANCE",
			16 => "FOOD",
			17 => "STIKERS",
			18 => "TIZERS",
			19 => "SWIM_POOL",
			20 => "TYPE_BUILDINGS",
			21 => "SHOW_ON_INDEX_PAGE",
			22 => "FILTER_PRICE",
			23 => "ARTICLE",
			24 => "TYPE",
			25 => "SIZE",
			26 => "COLOR",
			27 => "SIZE_KUXNI",
			28 => "LINK_PROJECTS",
			29 => "GARAGE",
			30 => "APPOINTMENT",
			31 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"SORT_PROP" => "",
		"SORT_PROP_DEFAULT" => "name",
		"SORT_DIRECTION" => "asc",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "FORM_ORDER",
			2 => "PRICE",
			3 => "PRICEOLD",
			4 => "PRICE_WEEKEND",
			5 => "PRICE_WEEKEND_OLD",
			6 => "SIZE_ZHILAYA",
			7 => "WIFI",
			8 => "CHILD_0",
			9 => "CHILD_4",
			10 => "DAYS",
			11 => "SLEEP_ROOM",
			12 => "RELAX_WITH_CHILD",
			13 => "PROGRAMMS",
			14 => "PROFILES",
			15 => "DISTANCE",
			16 => "FOOD",
			17 => "STIKERS",
			18 => "SWIM_POOL",
			19 => "ARTICLE",
			20 => "TYPE",
			21 => "SIZE",
			22 => "COLOR",
			23 => "SIZE_KUXNI",
			24 => "LINK_PROJECTS",
			25 => "GARAGE",
			26 => "APPOINTMENT",
			27 => "STATUS",
			28 => "BRAND",
			29 => "DOCUMENTS",
			30 => "PLANIROVKA",
			31 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"VIEW_TYPE" => "table",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_DETAIL" => "Y",
		"IMAGE_POSITION" => "top",
		"COUNT_IN_LINE" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"USE_SHARE" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_PRODUCT" => "Забронировать",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_PROJECTS" => "",
		"T_CHARACTERISTICS" => "",
		"FILTER_URL_TEMPLATE" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		"COMPONENT_TEMPLATE" => "san",
		"SET_LAST_MODIFIED" => "N",
		"T_VIDEO" => "",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "SIZE_ZHILAYA",
			1 => "WIFI",
			2 => "CHILD_0",
			3 => "CHILD_4",
			4 => "DAYS",
			5 => "SLEEP_ROOM",
			6 => "RELAX_WITH_CHILD",
			7 => "DISTANCE",
			8 => "FOOD",
			9 => "SWIM_POOL",
			10 => "FILTER_PRICE",
			11 => "SIZE",
			12 => "COLOR",
			13 => "SIZE_KUXNI",
			14 => "GARAGE",
			15 => "APPOINTMENT",
			16 => "",
		),
		"PROP_1" => "FORM_QUESTION",
		"PROP_2" => "FORM_QUESTION",
		"PROP_3" => "FORM_QUESTION",
		"S_DETAIL_PRODUCT" => "Подробнее",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "TIZERS",
			1 => "",
		),
		"T_PLANS" => "",
		"SHOW_SLIDE_PROP" => array(
			0 => "SIZE_ZHILAYA",
			1 => "SLEEP_ROOM",
		),
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"SHARE_HIDE" => "N",
		"SHARE_TEMPLATE" => "",
		"SHARE_HANDLERS" => array(
			0 => "mailru",
			1 => "lj",
			2 => "facebook",
			3 => "vk",
			4 => "delicious",
			5 => "twitter",
		),
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_SHORTEN_URL_KEY" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>