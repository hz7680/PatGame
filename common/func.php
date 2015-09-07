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

?>
