<?php
    require_once '../common/set_inc.php';
    $patService=new PatService();
    $children=$patService->getChildren('11111');
    $grandchildren=$patService->getGrandChildren($children);
    echo var_dump($children);
    echo var_dump($grandchildren);