<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>hapus data</title>
  </head>
  <body>
  <div class="row d-flex justify-content-center">
  <div class="col-4 xs-auto justify-content-center border mt-5 p-4 rounded bg-light ">
    <h1>Edit data mahasiswa</h1>
    <a href="view.php">KEMBALI</a>

    <?php
    include'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa where id='$id'");
    while($d= mysqli_fetch_array($data)){
    ?>


    <form action="update.php" action="action">
        <div class="form-group font-weight-bolder">
          <label for="formGroupExampleInput">Nama</label>
          <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="nama" required value="<?php echo $d['nama']; ?>">
        </div>
        <div class="form-group font-weight-bolder">
          <label for="formGroupExampleInput2">NIM</label>
          <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
          <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="nim" required value="<?php echo $d['nim']; ?>">
        </div>
        <div class="form-group font-weight-bolder">
          <label for="formGroupExampleInput2">Alamat</label>
          <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="alamat" required value="<?php echo $d['alamat']; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


    <?php 
	}
	?>

    
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>