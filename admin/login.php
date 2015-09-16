<?php
    require_once '../common/set_inc_admin.php';
    if(isset($_SESSION['admin'])){
        jump('index.php');
        exit();
    }
    if(isset($_POST['login'])){

    }
    $smarty->display('login.html');