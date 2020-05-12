<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD doni wirawan</title>
  </head>
  <body>
  <div class="container">
    <h1 class="text-center">form pendaftaran siswa</h1>
	<form action="input_data.php" method="POST">
		<div class="form-group">
			<label for="formGroupExampleInput">Nama</label>
			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="nama" required>
		</div>
		<div class="form-group">
			<label for="formGroupExampleInput2">NIM</label>
			<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="nim" required>
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Alamat</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"  required></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Daftar</button>
	</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>