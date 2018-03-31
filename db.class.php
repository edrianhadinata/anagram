<?php

//class database

include("conn.php");

class DB{
	
	var $db;
	var $user;
	function DB(){
		$this->db=mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die("koneksi gagal".mysql_error());
		mysql_select_db(DB_NAME) or die("hubungan ke database gagal".mysql_error());
	}
	
	function confirmUserPass($user,$pass){
		$qcon=mysql_query("select id,password from ".TB_USER." where id='$user' and password='$pass'",$this->db);
		if(($qcon==1) ||(mysql_num_rows($qcon)==1)){
			return 0;
		}
	}
	
	function confirmAdminPass($user,$pass){
		$qcon=mysql_query("select id,password from ".TB_ADMIN." where id='$user' and password='$pass'",$this->db);
		if(($qcon==1) ||(mysql_num_rows($qcon)==1)){
			return 1;
		}
	}
	
	
	
}

$database=new DB();



?>