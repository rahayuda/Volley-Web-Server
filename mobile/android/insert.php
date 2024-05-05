<?php
include "koneksi.php";

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';

if (empty($nama) || empty($nim) || empty($alamat)) { 
    echo "Tidak Boleh Kosong"; 
} else if (empty($id)) {
    $query = mysqli_query($con, "INSERT INTO mahasiswa (id, nim, nama, alamat) VALUES (0, '" . $nim . "', '" . $nama . "', '" . $alamat . "')");
    
    if ($query) {
        echo "Data Berhasil Disimpan";
    } else { 
        echo "Data Gagal Disimpan";
    }
} else {
    $query = mysqli_query($con, "UPDATE mahasiswa SET nim = '" . $nim . "', nama = '" . $nama . "', alamat = '" . $alamat . "' WHERE id = '" . $id . "'");
    
    if ($query) {
        echo "Data Berhasil Dirubah";
    } else { 
        echo "Data Gagal Dirubah";
    }
}
?>
