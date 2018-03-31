<?php

//fungsi untuk mencetak semua kemungkinan permutasi disetiap nilai n


function permute($str,$i,$n){
	if($i==$n)
	
			print $str." ";
		
	else{
		for ($j=$i;$j<$n;$j++){
			swap($str,$i,$j);
			permute($str,$i+1,$n);
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

$str="hey";

permute($str,0,strlen($str)); //panggil fungsi nya



?>