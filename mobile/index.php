<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <br>
    <h2><b>Mahasiswa</b></h2>
    <hr>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $list = mysqli_query($con, "SELECT * FROM mahasiswa");
          $no = 0;
          while ($row = mysqli_fetch_assoc($list)) {
            $no++;
            ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $row['nim']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['alamat']; ?></td>
              <td><?php echo $row['waktu']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
