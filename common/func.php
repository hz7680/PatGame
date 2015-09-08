<?php
	function jump($url){
		echo "<script>";
			echo "location.href='".$url."';";
		echo "</script>";
	}
	function alert($txt){
		echo "<script>";
			echo "alert('".$txt."');";
		echo "</script>";
	} 
	function alertjump($msg,$url){
		echo "<script>";
			echo "alert('".$msg."');";
			echo "location.href='".$url."';";
		echo "</script>";
	}
	function alertback($msg){
		echo "<script>";
			echo "alert('".$msg."');";
			echo "window.history.back(-1);";
		echo "</script>";
	}
	function guid(){
		$res="";
		if (function_exists('com_create_guid')){
			$res=com_create_guid();
		}else{
			mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
			$charid = strtoupper(md5(uniqid(rand(), true)));
			$hyphen = chr(45);// "-"
			$uuid = chr(123)// "{"
				.substr($charid, 0, 8).$hyphen
				.substr($charid, 8, 4).$hyphen
				.substr($charid,12, 4).$hyphen
				.substr($charid,16, 4).$hyphen
				.substr($charid,20,12)
				.chr(125);// "}"
			$res=$uuid;
		}
		return str_replace('}','',str_replace('{','',str_replace('-','',$res)));
	}
?>
