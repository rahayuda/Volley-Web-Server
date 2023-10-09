<?php
	
	include "koneksi.php";
	include "device.php"; 
	
	$username = $_POST['nim'];
	$sha_pass = sha1($_POST['nama']);

	$ip = $IP;
	$perangkat = $agent;
	
	if (empty($username) || empty($sha_pass)) { 
		echo "Kolom isian tidak boleh kosong"; 
		
	} 
	else 
		{
		$login	= mysqli_query($con,"select username, password from user where username = '$username' and password = '$sha_pass'");
		$cek 	= mysqli_num_rows($login);
		
		if($cek > 0){
			echo "berhasil";
			
		} else{ 
			echo "gagal";
			
		}
	}
?>