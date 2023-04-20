<?php
	
	include "koneksi.php";
	include "device.php"; 
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
	$ip = $IP;
	$perangkat = $agent;
	
	if (empty($nama) || empty($nim) || empty($alamat)) { 
		echo "Tidak Boleh Kosong"; 
		
	} else if(empty($id)) {
		$query = mysqli_query($con,"INSERT INTO mahasiswa (id,nim, nama,alamat,ip,perangkat) VALUES(0,'".$nim."','".$nama."','".$alamat."','".$ip."','".$perangkat."')");
		
		if ($query) {
			echo "Data Berhasil Disimpan";
			
		} else{ 
			echo "Data Gagal Disimpan";
			
		}
	}else{
		$query = mysqli_query($con,"UPDATE mahasiswa set nim = '".$nim."', nama = '".$nama."', alamat = '".$alamat."' where id = '". $id ."'");
		
		if ($query) {
			echo "Data Berhasil Dirubah";
			
		} else{ 
			echo "Data Gagal Dirubah";
			
		}
		
	}
?>