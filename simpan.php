<?php

include("connect.php");

if(isset($_GET["user"])){

$user=$_GET["user"];
$score=$_GET["score"];
$tgl=date('Y-m-d');
$data_masuk="insert into skor(id,skor,last_used) values('$user','$score','$tgl')";

$data=mysql_query($data_masuk) or die("gagal".mysql_error());


}else{

echo "gak";

}
?>