<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
  <link rel="stylesheet" href="fontawesome-5.2.0\css\all.css">
  <title>tampil data</title>
</head>

<body>
  <div class="container mt-4">
    <h2>DATA NEGARA</h2>
    <br />
    <a href="daftar.php">+ TAMBAH NEGARA</a>
    <br />
    <br />

    <form method="GET" action="" class="row">
      <input type="text" name="cari" placeholder="Search..." class="form-control col-11 ml-3">
      <button type="submit" class="btn btn-primary ml-4"><i class="fa fa-search"></i></button>
    </form>
    <br>

    <table class="table">
      <tr class="bg">
        <th>KODE NEGARA</th>
        <th>NAMA NEGARA</th>
        <th>IBUKOTA NEGARA</th>
        <th>OPSI</th>
      </tr>
      <?php
      include 'koneksi.php';



      if (isset($_GET['cari'])) {
        $query = $_GET['cari'];
        $data = mysqli_query($koneksi, "select * from tb_negara_20101108 where nama_20101108 like '%" . $query . "%'");
      } else {
        $data = mysqli_query($koneksi, "select * from tb_negara_20101108 ");
      }

      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $d['kode_20101108']; ?></td>
          <td><?php echo $d['nama_20101108']; ?></td>
          <td><?php echo $d['ibukota_20101108']; ?></td>
          <td>
            <a href="edit.php?kode_20101108=<?php echo $d['kode_20101108']; ?>" class="btn btn-primary">EDIT</a>
            <a href="hapus.php?kode_20101108=<?php echo $d['kode_20101108']; ?>" class="btn btn-danger">HAPUS</a>
          </td>
        </tr>
      <?php
      }
      ?>

    </table>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="jquery-3.3.1\jquery-3.3.1.js"></script>
  <script src="fontawesome-5.2.0\js\all.js"></script>
  <script src="bootstrap\js\bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>