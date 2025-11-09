<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div class="custom-news-template" style="max-width: 800px; margin: 0 auto; padding: 20px; font-family: Arial, sans-serif;">
    <h2 style="text-align: center; color: #333; margin-bottom: 30px;">News</h2>
    
    <?php if (!empty($arResult["ITEMS"])): ?>
        <div class="news-list">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <div class="news-item" style="border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 8px;">
                    <h3 style="margin-top: 0; color: #2c5aa0;">
                        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" style="color: inherit; text-decoration: none;">
                            <?= $item['NAME'] ?>
                        </a>
                    </h3>
                    
                    <div style="color: #666; font-size: 0.9em; margin-bottom: 10px;">
                        <?= FormatDate("d.m.Y", MakeTimeStamp($item['ACTIVE_FROM'])) ?>
                    </div>
                    
                    <?php if ($item['PREVIEW_TEXT']): ?>
                        <p style="color: #555; line-height: 1.6;">
                            <?= $item['PREVIEW_TEXT'] ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div style="text-align: center; padding: 40px; color: #666;">
            <p>No news currently </p>
        </div>
    <?php endif; ?>
</div>
EOF

