<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
  <link rel="stylesheet" href="fontawesome-5.2.0\css\all.css">

  <title>CRUD doni wirawan</title>
</head>

<body class="bg-">
  <div class="container">
    <div class="row d-flex justify-content-center">

      <div class="col-lg-4 col-xs-10 xs-auto justify-content-center border mt-lg-5 p-4 p-xs-5 rounded bg-light ">
        <h1 class="text-center text-capitalize mt-1">form pendaftaran siswa</h1>
        <form action="input_data.php" method="POST" class="">
          <div class="form-group font-weight-bolder">
            <label for="formGroupExampleInput2">Kode Negara</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="ID01" name="kode" required>
          </div>
          <div class="form-group font-weight-bolder">
            <label for="formGroupExampleInput">Nama Negara</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Negara Kamu" name="nama" required>
          </div>

          <div class="form-group font-weight-bolder">
            <label for="test">Ibukota Negara</label>
            <input class="form-control" id="test" rows="3" name="ibukota" required placeholder="Ibukota Negara"></input>
          </div>
          <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
      </div>
    </div>
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