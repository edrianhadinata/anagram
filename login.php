	
	<?php
	
	$me=33;
	
/**
 * User has already logged in, so display relavent links, including
 * a link to the admin center if the user is an administrator.
 */
if($session->logged_in){

	$q = "SELECT username FROM ".TBL_ACTIVE_USERS
		." ORDER BY timestamp DESC,username";
	$result = $database->query($q);
	/* Error occurred, return given name by default */
	$num_rows = mysql_numrows($result);
	if(!$result || ($num_rows < 0)){
	   echo "Kesalahan pada saat menampilkan informasi";
	}
	else if($num_rows > 0){
	   /* Display active users, with link to their info */
	  
	  
	   
	   for($i=0; $i<$num_rows; $i++){
		  $uname = mysql_result($result,$i,"username");
			echo "<tr height=".$me."> ";
			echo "<td colspan=3>Selamat Datang <a href=\"userinfo.php?user=$uname\">".$session->username."</a> ";
			echo "</tr>";
		  
	   }
	  
	}


	 if($session->isAdmin()){
			echo "<tr height=".$me."> 
				<td colspan=3><a href=\"admin/admin.php\">Admin Center</a>] &nbsp;&nbsp;</td> 
			</tr>";
		}
		echo "[<a href=\"process.php\">Logout</a>]";
	
		
	
	?>

<?php

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

<form name="form_login" method="POST" action="process.php">

	<table class="login_table">
	
	<tr height="<?php echo $me; ?>"> 
			<td width="40">User ID</td><td> : </td><td><input type="text" name="user" class="inp_login" placeholder="user id"> </td> 
		</tr>
	
		<tr height="<?php echo $me; ?>"> 
			<td width="40">Password</td><td> : </td><td><input type="password" name="pass" class="inp_login"  placeholder="password"> </td> 
		</tr>
		<tr height="<?php echo $me; ?>"> 
			<td width="40"></td><td>  </td><td><input type="submit" name="submit" class="btn_login" value="Login"> </td> 
		</tr>
		<tr height="10"> 
			<td width="40"></td><td>  </td><td><a href="index.php?h=reg">Registrasi</a><img src='images/list_icon.png' style="padding-top:4px;padding-left:6px"></td> 
		</tr>
		<input type="hidden" name="sublogin" value="1">
	</table>



</form>
<?php 
}
?>

