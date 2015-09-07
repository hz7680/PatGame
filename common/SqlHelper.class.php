<?php
	class SqlHelper{
		var $conn;
		var $dbname;
		var $dbuser;
		var $dbpwd;
		var $host;
		var $charset;
		
		public  function __construct($dbname,$dbuser,$dbpwd,$host,$charset){
			$this->dbname=$dbname;
			$this->dbuser=$dbuser;
			$this->dbpwd=$dbpwd;
			$this->host=$host;
			$this->charset=$charset;
			$this->conn=mysql_connect($this->host,$this->dbuser,$this->dbpwd);
			if(!$this->conn){
				die("连接失败".mysql_error());
			}
			mysql_query("set names ".$this->charset);
			mysql_select_db($this->dbname);
		}
		
		//增删改
		public function excuteNonQuery($sql){
			if(mysql_query($sql,$this->conn)){
				return  true;
			}else{
				return false;
			}
		}
		//查询数据
		public function excuteDataArray($sql){
			$res=mysql_query($sql,$this->conn);
			if($res){
				$arr=array();
				while(NULL!=($row=mysql_fetch_array($res))){
					$arr[]=$row;
				}
				mysql_free_result($res);
				return $arr;
			}else{
				return false;
			}
		}
		//查询数目
		public function excuteScalar($sql){
			$res=mysql_query($sql);
			$count=mysql_result($res,0,0);
			mysql_free_result($res);
			return $count;
		}
		//关闭数据库连接
		public function close(){
			if(!empty($this->conn)){
				mysql_close($this->conn);
			}
		}
	}
?>