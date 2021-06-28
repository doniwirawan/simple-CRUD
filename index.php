<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAADAAAKAAAAAAAAAAAAAAAAFwAABy4AAPs4AAD/PwAA/0AAAP85AAD/LgAA8hkAAAkAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAkAAAAALQAA/0cAAP9cAgD/bgUA/3sFAP97BQD/cQUA/18DAP9GAAD/LgAA+AAAAAAAAAAAAAAAAAEAAAQAAAAAMwAA/1EBAP9qBAD/iQQA/70EAf/PAQL/0gEC/8AEAP+iBgD/ewQA/1UCAP80AAD/AAAAAAAAAAABAAADKwAA/1MBAP9rBQD/hAQA/7IDBf/qABf//yBW//8jXf//Ez7/9AAM/78EAP+GBAD/VQEA/y4AAPcAAAAAEgAAAUUAAP93BgD/mQUA/7oDCP/cABr/+wBB//8kh///WL3//1u///81hP/+Ahz/vwUA/3sHAP9GAAD/FQAAAysAAP9bAgD/nwYA/9sABf/fABf//AI///8WeP//Laf//1DQ//+G6///btn//zaH//UADP+hBgD/XQIA/y8AAOo1AAD/bQYA/7sFAf/5ABv/7AAq//8KaP//H5n//ySa//4DYv/6Cm///xuZ//8pfv//Ez3/wgQB/28FAP84AAD/PAAA/3cFAP/LAgL//gky/+oAKP/5AU//9wBO//gBUv/8Alr/9ABT//kBW///FWH//gUm/88BAv96BQD/QAAA/z0AAP92BgD/zAIC//8SPv/7AUL/6gA0/8QAJP/SADH/6AA9/+gAOv/4AD///wxV//0EKf/RAQL/ewUA/0AAAP82AAD/bQUA/7gGAP//DjX//zeS//kAQv+5ACD/uQAc/9QAJf/mADb/7AEz//4LUv//CzH/vwUA/28GAP84AAD/LQAA9VsCAP+cBQD/7QAJ//8xfP//atT//xiP/+IANv/nADb/1AAj/8sAG//zAS//8QAL/6IGAP9dAgD/LgAA5hYAACBDAAD/dQYA/7gGAP/8ABX//zB5//9UtP//O6X//xV1/+cANv/aACb/1gAP/74EAP96BQD/RgAA/wAAAAAAAAAAKwAA9lIBAP+BBQD/uAYA/+4ADf//DTP//yBV//4OP//jABn/vwAK/6UGAP+EBAD/VQEA/ywAAPEAAAAAAAAAAAAAAAAxAAD/UAEA/3UGAP+bBgD/uQUA/8sCAf/KAgH/twYA/5gEAP95BwD/UwEA/zQAAP8AAAAAAAAAAAAAAAAAAAAAAAAAACsAAPFDAAD/WAEA/2kFAP9zBgD/dgUA/2sFAP9eAgD/RQAA/y4AAPIBAAACAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAFgAABSkAAOk1AAD/PAAA/zsAAP83AAD/LAAA5QAAAAAAAAAAAAAAAAAAAAAAAAAA+B8AAOAHAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAQAAgAEAAMADAADgBwAA+B8AAA==" rel="icon" type="image/x-icon" />

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
    <h1 class="font-weight-bold">DATA NEGARA</h1>
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