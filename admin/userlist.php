<?php
    require_once '../common/set_inc_admin.php';
    $data=$patService->getUserList($_GET);
    $smarty->assign('data',$data);
    $smarty->display('userlist.html');