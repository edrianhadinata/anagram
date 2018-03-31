<div style="margin-top:40;">

<div style="margin:30px;width:570px">

<?php 


/**
 * The user is already logged in, not allowed to register.
 */
if($session->logged_in){
   echo "<h1>Registrasi sudah dilakukan sebelumnya</h1>";
   echo "<p>Maaf <b>$session->username</b>, Sudah ada. "
       ."<a href=\"index.php\">Halaman utama</a>.</p>";
}
/**
 * The user has submitted the registration form and the
 * results have been processed.
 */
else if(isset($_SESSION['regsuccess'])){
   /* Registration was successful */
   if($_SESSION['regsuccess']){
      echo "<h1>Registrasi Berhasil!</h1>";
      echo "<p>Terima Kasih <b>".$_SESSION['reguname']."</b>, data kamu sudah dimasuk kedalam database kami, "
          ."kamu boleh <a href=\"index.php\">log in</a>.</p>";
   }
   /* Registration failed */
   else{
      echo "<h1>Registrasi Gagal</h1>";
      echo "<p>Maaf, terdapat kesalahan pada registrasi dengan user id <b>".$_SESSION['reguname']."</b>, "
          ." registrasi belum lengkap.<br>Silahkan lagi lain waktu.</p>";
   }
   unset($_SESSION['regsuccess']);
   unset($_SESSION['reguname']);
}
/**
 * The user has not filled out the registration form yet.
 * Below is the page with the sign-up form, the names
 * of the input fields are important and should not
 * be changed.
 */

else{
?>
</div>
<form action="process.php" method="POST">

<table border=0 style="margin:auto">

	<tr height='40px'>
		<td colspan=3><b>Pendaftaran Online Game Anagram<b></td>
	</tr>
	<?php 
	if($form->num_errors > 0){
	   echo "<td colspan=3><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
	}
	?>
	<tr height='40px'>
		<td width='150px'> Nama </td> <td>:</td> <td> <input type="text" name="nama" class="inp_register" placeholder="Nama"> <?php  echo $form->error("nama"); ?></td>
	</tr>

	<tr height='40px'>
		<td width='150px'>User ID </td> <td>:</td> <td> <input type="text" name="user" class="inp_register" placeholder="User id"> <?php  echo $form->error("user"); ?> </td>
	</tr>
	
	<tr height='40px'>
		<td width='150px'>Password </td> <td>:</td> <td> <input type="password" name="pass" class="inp_register" placeholder="Password"> <?php  echo $form->error("pass"); ?></td>
	</tr>
	<tr height='40px'>
		<td width='150px'>Email </td> <td>:</td> <td> <input type="text" name="email" class="inp_register" placeholder="Email"> <?php  echo $form->error("email"); ?> </td>
	</tr>
	
	
	<tr height='40px'>
		<td width='150px'>Umur </td> <td>:</td> <td> <input type="text" name="umur" class="inp_register" placeholder="Umur" size='4' maxlength=2> <?php  echo $form->error("umur"); ?></td>
	</tr>
	
	<tr height='40px'>
		<td width='150px'>Alamat</td> <td>:</td> <td> <input type="text" name="alamat" class="inp_register" placeholder="Alamat" size='40'><?php  echo $form->error("alamat"); ?> </td>
	</tr>
<input type="hidden" name="subjoin" value="1">
	<tr height='40px'>
		<td width='150px'></td> <td></td> <td> <input type="submit" name="submit" class="btn_daftar" Value="Daftar"> </td>
	</tr>
	
</table>
<br><br>
<p align='center'> <?php echo $cont->att; ?></p>


</form>
<?php 
}
?>

</div>