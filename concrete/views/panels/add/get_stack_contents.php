<?php

use Concrete\Core\Block\View\BlockView;

defined('C5_EXECUTE') or die('Access Denied.');
?>

<div class="blocks">
    <?php
    foreach ($blocks as $block) {
        $type = $block->getBlockTypeObject();
        $icon = $ci->getBlockTypeIconURL($type);
        ?>
        <div
            class="block ccm-panel-add-block-draggable-block-type"
            data-panel-add-block-drag-item="block"
            data-cID="<?= $stack->getCollectionID() ?>"
            data-block-type-handle="<?= $type->getBlockTypeHandle() ?>"
            data-dialog-title="<?= t('Add %s', t($type->getBlockTypeName())) ?>"
            data-dialog-width="<?= $type->getBlockTypeInterfaceWidth() ?>"
            data-dialog-height="<?= $type->getBlockTypeInterfaceHeight() ?>"
            data-has-add-template="<?= $type->hasAddTemplate() ?>"
            data-supports-inline-add="<?= $type->supportsInlineAdd() ?>"
            data-btID="<?= $type->getBlockTypeID() ?>"
            data-dragging-avatar="<?= h('<p><img src="' . $icon . '" /><span>' . t($type->getBlockTypeName()) . '</span></p>') ?>"
            title="<?= t($type->getBlockTypeName()) ?>"
            data-block-id="<?= (int) $block->getBlockID() ?>"
        >
            <div class="block-name">
                <span class="handle"><?= h($type->getBlockTypeName()) ?></span>
            </div>
            <div class="embed-responsive embed-responsive-4by3 block-content">
                <iframe id="frame" src="<?= URL::to('/ccm/system/panels/add/get_block_preview?blockID='.$block->getBlockID()); ?>" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="block-handle"></div>
        </div>
        <?php
    }
    ?>
</div>
