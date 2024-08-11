<?php
//koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "dbcrud2024";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));


//jika tombol disimpan diklik
if (isset ($_POST['bsimpan'])) {


        //data akan disimpan baru
        $simpan = mysqli_query($koneksi, " INSERT INTO tkursus (judul, deskripsi, durasi)
                                           VALUE ( '$_POST[tjudul]',
                                                   '$_POST[tdeskripsi]',
                                                   '$_POST[tdurasi]')
         
                                         ");
        // uji jika simpan data sukses
        if($simpan){
            echo "<script>
                    alert('Simpan data sukses!');
                    document.location='index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Simpan data gagal');
                    document.location='index.php';
                  </script>";
        }
}

//deklarasi variabel untuk menampung data yang akan diedit
$vjudul = "";
$vdeskripsi = "";
$vdurasi = "";

//pengujian jika tombol edit/ hapus diklik
if (isset($_GET['hal'])) {

    //pengujian jika edit data
    if($_GET['hal'] == "edit"){

        //tampilkan data yang akan diedit
        $tampil = mysqli_query($koneksi, " SELECT * FROM tkursus WHERE id_kursus = '$_GET[id]");
        $data = mysqli_fetch_array($tampil);
        if($data){
            //jika data ditemukan, maka data ditampung kedalam variebel
            $vjudul = $data['judul'];
            $vdeskripsi = $data['deskripsi'];
            $vdurasi = $data['durasi'];
        }
    }
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Crud Web </title>
  </head>
  <body>
    <!-- Awal container -->
    <div class="container">
    <h3 class="text-center">Kursus dan materi </h3>

    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                  Form input kursus baru
            </div>
        <div class="card-body">
            <a href="materi.php" class="btn btn-success mb-3">Tambah Materi</a>
          <form method="POST">
          <div class="mb-3">
                <label class="form-label">Judul</label>
                    <input type="text"  name="tjudul"  value="<?=$vjudul?>" class="form-control"  placeholder="masukan judul">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                    <input type="text" name="tdeskripsi" value="<?=$vdeskripsi?>"  class="form-control"  placeholder="masukan deskripsi">
            </div>
            <div class="mb-3">
                <label class="form-label">Durasi</label>
                    <input type="text" name="tdurasi"  value="<?=$vdurasi?>" class="form-control"  placeholder="masukan durasi">
            </div>

            <div class="text-center">
                <hr>
                <button class="btn btn-primary" name="bsimpan" type="submit">simpan</button>
                <button class="btn btn-danger" name="breset" type="submit">reset</button>
            </div>

          </form>      
        </div>
        <div class="card-footer">
                  
        </div>
        </div>
    </div>
    </div>

    <div class="card mt-5">
            <div class="card-header">
                  Data kursus baru
            </div>
        <div class="card-body">
            <div class="col-md-6 mx-auto">
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="tcari" class="form-control" placeholder="Cari">
                        <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                        <button class="btn btn-danger" name="breset" type="submit">Reset</button>
                    </div>
                </form>
            </div>

             <table class="table table-striped  table-hover table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Durasi</th>
                    <th>Aksi</th>
                </tr>

                <?php 
                //persiapan menampilkan data
                    $no = 1;
                    $tampil= mysqli_query($koneksi, "SELECT * FROM tkursus order by id_kursus desc");
                    while ($data = mysqli_fetch_array($tampil)) :
                ?>



                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['deskripsi'] ?> </td>
                    <td><?= $data['durasi'] ?></td>
                    <td>
                         <a href="index.php?hal=edit&id=<?= $data['id_kursus'] ?>" class="btn btn-warning">Edit</a>
                         <a href="index.php?hal=hapus&id=<?= $data['id_kursus'] ?>" class="btn btn-danger">hapus</a>
                    </td>
                </tr>

                <?php 
                    endwhile
                ?>
             </table>

        </div>
        <div class="card-footer">
                  
        </div>
        </div>
    <!-- Akhir container -->   

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>