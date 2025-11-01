<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<div style="padding: 20px; background: #f5f5f5; border-radius: 10px; margin: 20px;">
    <h1 style="color: #2e8b57;">First Template</h1>
    <p>Testing the custom news list template with English content.</p>
</div>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "first_template", 
    array(
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "16",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "DETAIL_URL" => "",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
    ),
    false
);?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
