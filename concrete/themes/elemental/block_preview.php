<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>
<!DOCTYPE html>
<html lang="<?= Localization::activeLanguage() ?>">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="<?= $view->getThemePath() ?>/main.css" />
        <?php View::element('preview_header_required'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="<?= $c->getPageWrapperClass() ?>">
            <div class="ccm-block-preview">
                <?= $innerContent ?>
            </div>
        </div>
        <?php View::element('preview_footer_required'); ?>
        <script type="text/javascript" src="<?= $view->getThemePath() ?>/main.js"></script>
    </body>
</html>
