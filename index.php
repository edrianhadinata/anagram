<?php

include("include/session.php");
include("include/view_active.php");
include("content.php");

?>


 <html>
 
	<head>
		<title> <?php echo $cont->title_header; ?> </title>
	</head>
	<script language="javascript">AC_FL_RunContent = 0;</script>
	<script src="AC_RunActiveContent.js" language="javascript"></script>
	<link href='css/style.css' type='text/css' rel='stylesheet'>
	<link href='images/icon_rabbit.gif' type='image' rel='icon'>
<body>

	<div id="warp">
		
		<div id="header">
			
			<a href='index.php'><div id="logo"></div></a> 
			<div id="login">
					<?php include($cont->cek_self($_SERVER['PHP_SELF']));?>		
			</div>			
			
			<br style="clear:both;">
		</div>
		<div id="mid">
		
			<div id="content">
				
				<div id="h_warp"> 
					<div id="sub_header"><b><?php echo $cont->title_header; ?> </b> | Online <b><?php echo $database->num_active_guests; ?></b> Tamu | Online <b><?php echo $database->num_active_users; ?></b> Member 
					
			</div>
					<div id="left_sub_header">
					
						<?php echo $cont->help; ?> <img src='images/list_icon.png' style="padding-top:6px;padding-left:6px">
					
					</div>
				<div style="clear:both"></div>
				</div>
				
				<div id="g_content">
				
				<?php 
				if(isset($_GET['h'])){
				
				include($cont->imp_file($_GET['h'])); 
				}
				?>
				
				</div>
				
			</div>	
			
			
		</div>
		
		<div id="footer"><div id="line_foo"></div>
		<p align="center"><?php echo $cont->footer; ?></p></div>

	</div>
</body>	
 
 
</html>
