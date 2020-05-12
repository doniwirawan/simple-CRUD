

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
        <h1 class="text-center text-capitalize mb-2">tampil data siswa disini</h1>
        <a href="daftar.php" class="text-decoration-none h5"><i class="fas fa-plus mr-2 text-decoration-none"></i>Tambah data</a>
        <table class="table border ">
        <thead class="h5">
            <tr class="bg-primary">
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIM</th>
            <th scope="col">ALAMAT</th>
            <th scope="col" class="text-center">OPSI</th>
            </tr>
        </thead>
        <tbody>

            <?php
           
                include 'koneksi.php';
                $no = 1;
		        $data = mysqli_query($koneksi,"select * from mahasiswa");
		        while($d = mysqli_fetch_array($data)){

			?>

                <tr class="">
                    <td class="font-weight-bolder "><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td class="font-weight-bold text-center"> 
                        <a href="edit.php?id=<?php echo $d['id']; ?>" class="mr-3 text-decoration-none"><i class="fas fa-pen mr-2"></i>EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="text-decoration-none"><i class="fas fa-trash mr-2"></i>HAPUS</a>
                    </td>
                </tr>

			<?php 
		    }
		    ?>
        </tbody>
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