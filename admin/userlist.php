<?php
require_once '../common/set_inc_admin.php';


$pagenum=isset($_GET['pagenum'])?$_GET['pagenum']:0;
$patService->getUserList($pagenum);
$smarty->display('userlist.html');