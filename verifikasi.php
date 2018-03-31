<?php

//fungsi untuk mencetak semua kemungkinan permutasi disetiap nilai n

include("connect.php");

function ada_data($kata){
	
	$data=mysql_query("select * from kata where kata='".$kata."'");
	$hasil=mysql_num_rows($data);
	return $hasil;
}


function permute($str,$i,$n,$word){
		
	if($i==$n){
		if(ada_data($str)>=1){
			if($str==$word){
				
				print "hasil=1&";
				
			}
		}
	}else{
		for ($j=$i;$j<$n;$j++){
			swap($str,$i,$j);
			permute($str,$i+1,$n,$word);
			swap($str,$i,$j);
			
		}
	}
	
}

//fungsi untuk membuat kombinasi dari karakter $str yang dikirim dari nilai $i dan $j

function swap(&$str,$i,$j){

	$temp=$str[$i];
	$str[$i] = $str[$j];
	$str[$j] = $temp;
}

$str=$_GET["jb"];
$word=$_GET["word"];
//$hasilku=$_GET["hasil"];

if(isset($_GET["jb"])){
 //panggil fungsi nya

//permute($str,0,strlen($str),$word);

	$hasil=ada_data($_GET["jb"]);
	if($hasil==1){
		echo "hasil=1";
	}

}


?>