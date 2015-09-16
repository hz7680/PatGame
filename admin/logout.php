<?php
    require_once '../common/set_inc_admin.php';
    unset($_SESSION['admin']);
    jump('login.php');