<?php
include "koneksi.php";

$id = isset($_POST['id']) ? $_POST['id'] : '';

if (empty($id)) { 
	echo "ID Tidak Ditemukan"; 
} else {

	$query = mysqli_query($con, "DELETE FROM mahasiswa WHERE id=$id");

	if ($query) {
		echo "Data Berhasil Dihapus";
	} else{ 
		echo "Data Gagal Dihapus";
	}	
}
?>