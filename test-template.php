<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<div style="padding: 20px; background: #f5f5f5; border-radius: 10px; margin: 20px;">
    <h1 style="color: #2e8b57;">Template Test</h1>
    <p>Testing exact copy of index.html design</p>
</div>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "my_custom_design",
    array(
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "0"
    ),
    false
);
?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
