<?php
    require_once '../common/set_inc_admin.php';
    if(isset($_POST['submit'])){
        $rule=serialize($_POST['rule']);
        if($patService->setSettings('rule',$rule)){
            alertjump('修改成功','index.php');
        }else{
            alertback('修改失败');
        }
        exit();
    }
    $data=$patService->getSettings();
    $smarty->assign('rule',unserialize($data['rule']));
    $smarty->display('index.html');