<?php

//data constant


class data_const{
	
	var $title_header="Game Anagram Main Kata";
	var $footer="Copyright@2013 <a href='index.php?h=create'>Kiki Khairani</a>";
	var $help="<a href='index.php?h=help'>Cara Bermain</a>";
	var $file;
	var $att="* Jika kamu belum punya user id. Silahkan daftar untuk memulai permainan.";
	
	function data_const(){
		
	}
	
	function imp_file($t){
		
		if($t=="help"){
							
			$this->file="help.php";
							
		}else if($t=="reg"){
						
			$this->file="reg.php";
						
		}else if($t=="create"){
						
			$this->file="user.php";
						
		}else if(($t=="")||($t=="/")){
			$this->file="fist_image.php";				
		}
		else{
			$this->file="fist_image.php";	
		}
		return ($this->file);
	}
	
	function cek_self($self){
		if($self=="/anagram/template_4/index.php"){
			$this->file="login.php";
		}else{
			$this->file="blank.php";
		}
		return($this->file);
	}
	
}

$cont=new data_const;

?>