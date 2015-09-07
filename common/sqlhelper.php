<?php
	require_once '../common/SqlHelper.class.php';
	require_once '../common/config/mysql.config.php';
	$sqlhelper=new SqlHelper($dbname,$dbuser,$dbpwd,$host,$charset);