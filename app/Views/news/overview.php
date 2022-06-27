<h2><?= esc($title) ?></h2>


<!--
    Alternative syntax for control structures
    (PHP 4, PHP 5, PHP 7, PHP 8)
    PHP offers an alternative syntax for some of its control structures; namely, if, while, for, foreach, and switch.
    In each case, the basic form of the alternate syntax is to change the opening brace to a colon (:)
    and the closing brace to endif;, endwhile;, endfor;, endforeach;, or endswitch;, respectively.
-->
<?php if (!empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/ci4-board/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach; ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif; ?>