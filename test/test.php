<?php
    require_once '../common/set_inc.php';
    $patService=new PatService();
    echo $patService->getRelationTree('123456');