<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use Magnezit\Finders\IBlockFinder;

$APPLICATION->SetTitle("3D Атлас");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "atlas",
    Array(
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("",""),
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("",""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FILE_404" => "",
        "FILTER_FIELD_CODE" => array("",""),
        "FILTER_NAME" => "arrFilter",
        "FILTER_PROPERTY_CODE" => array("",""),
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => IBlockFinder::atlas(),
        "IBLOCK_TYPE" => "sections",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array("",""),
        "LIST_PROPERTY_CODE" => array("","FILE",""),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "NEWS_COUNT" => "20",
        "PAGE_TITLE" => "3D Атлас",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/3d-atlas/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => Array("detail"=>"#SECTION_CODE_PATH#/#ELEMENT_CODE#/","news"=>"/3d-atlas/","search"=>"search/","section"=>"#SECTION_CODE_PATH#/"),
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "N",
        "USE_FILTER" => "Y",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "Y",
        "USE_SHARE" => "N"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>