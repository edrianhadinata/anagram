<?php
	
	$me=33;
	
/**
 * User has already logged in, so display relavent links, including
 * a link to the admin center if the user is an administrator.
 */
if($session->logged_in){
	
	include("import_swf.php");
	

	 if($session->isAdmin()){
			echo "<tr height=".$me."> 
				<td colspan=3><a href=\"admin/admin.php\">Admin Center</a>] &nbsp;&nbsp;</td> 
			</tr>";
		}
		//echo "[<a href=\"process.php\">Logout</a>]";
	
		

}else{

/**
 * User not logged in, display the login form.
 * If user has already tried to login, but errors were
 * found, display the total number of errors.
 * If errors occurred, they will be displayed.
 */
if($form->num_errors > 0){
   echo "<font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font>";
}
?>

<div id="first_images"></div>

<?php 
}
?>