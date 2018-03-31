<?php

include("connect.php");

if($_POST["req_score"]){
	$i=1;
	$skoring=mysql_query("select * from skor order by skor desc limit 8") or die("koneksi table gagal".mysql_error());
	$jml=mysql_num_rows($skoring);
	while($row=mysql_fetch_array($skoring)){
		$scr.="score_".$i."=".$row["skor"]."&nama_".$i."=".$row["id"];

		if($jml<=$jml-1){
			$src.="&";
		}
		echo $scr;
	}
	

}else{

$i=1;
	$skoring=mysql_query("select * from skor order by skor desc limit 8") or die("koneksi gagal".mysql_error());
	$jml=mysql_num_rows($skoring);
	while($row=mysql_fetch_array($skoring)){
		
		$scr="score_".$i."=".$row["skor"]."&nama_".$i."=".$row["id"]."&";
		echo $scr;
		$i++;
	}

}


?>