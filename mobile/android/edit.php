<?php
include "koneksi.php";

$id = isset($_POST['id']) ? $_POST['id'] : '';
class emp{}

if (empty($id)) { 
    echo "Error Mengambil Data ID Kosong"; 
} else {
    $query = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id='" . $id . "'");
    $row = mysqli_fetch_array($query);
    
    if (!empty($row)) {
        $response = new emp();
        $response->id = $row["id"];
        $response->nim = $row["nim"];
        $response->nama = $row["nama"];
        $response->alamat = $row["alamat"];
        
        echo(json_encode($response));
    } else { 
        echo("Error Mengambil Data"); 
    }    
}
?>
