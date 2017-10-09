<?php

defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Permission\Access\Entity\SubmitterEntity as SubmitterPermissionAccessEntity;

if (\Loader::helper('validation/token')->validate('process')) {
    $js = \Loader::helper('json');
    $obj = new \stdClass();
    $pae = SubmitterPermissionAccessEntity::getOrCreate();
    $obj->peID = $pae->getAccessEntityID();
    $obj->label = $pae->getAccessEntityLabel();
    print $js->encode($obj);
}
