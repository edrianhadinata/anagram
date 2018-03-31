<?php


class veri_link{

	public $inp;
		
	function veri_link($t){
		
		if($t=="help"){
			
			include(help.php);
			
		}else if($t=="reg"){
		
			include(reg.php);
		}else if($t=="create"){
		
			include(user.php);
		
		}else{
			include(fist_image.php);
		
		}
	}
	
}


?>