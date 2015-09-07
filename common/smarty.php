<?php
	require_once "../common/libs/Smarty.class.php";
	$smarty=new Smarty();
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	$smarty->caching=false;