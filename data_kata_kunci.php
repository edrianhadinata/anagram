<?php

//data kata kunci

include("connect.php");
$sel=mysql_query("select * from kata");
$jml=mysql_num_rows($sel);
	$i=0;
	while($row=mysql_fetch_array($sel)){
		$i++;
		$data[$i]=$row["clue"];
	}
	$data2=array_rand($data,1);
	$hasil=mysql_query("select * from kata where id_kata='".$data2."'");
	$data3=mysql_fetch_array($hasil);
	$char=$data3["kata"];

	function acak_huruf($karakter){
		
		$string='';
		$panjang=strlen($karakter);
		for($i=0;$i<$panjang;$i++){
			$char_kata[$i]=$karakter{$i};
		}
		shuffle($char_kata);
		for($i=0;$i<$panjang;$i++){
			$string.=$char_kata[$i];
		}
		return $string;
	}
	
	//echo "kataKunci=".$data3["clue"]."&kata_acak=".acak_huruf($char);
	
if(isset($_GET["acak_clue"])){

	echo "kataKunci=".$data3["clue"]."&kunciAcak=".acak_huruf($char);
	
}



?>