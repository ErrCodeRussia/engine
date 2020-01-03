<?php

/**
 * @var $page base\Page;
 */

$path = new base\routing\Path();
?>

<!doctype html>
<html lang="ru">

<head>
    <?php echo $page->getScripts(); ?>
    <?php include $page->getMeta(); ?>
    <?php echo $page->getStyles(); ?>
    <title><?= $page->getTitle(); ?></title>

    <?php if ($page->getDescription() != '') : ?>
        <meta name="description" content="<?= $page->getDescription(); ?>">
    <?php endif; ?>

    <?php if ($page->getKeywords() != '') : ?>
        <meta name="keywords" content="<?= $page->getKeywords(); ?>">
    <?php endif; ?>
</head>

<body>
    <div class="body">
        <header class="header">
            <?php include $page->getHeader(); ?>
        </header>

        <div class="content">
            <?php
            if (!empty($page->getContent()))
                echo $page->getContent();
            ?>
        </div>

        <footer>
            <?php include $page->getFooter(); ?>
        </footer>
    </div>
</body>

</html>