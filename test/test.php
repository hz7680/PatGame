<?php
    require_once '../common/set_inc.php';
    $patService=new PatService();
    echo var_dump($patService->getGoldCoin('123456'));