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
                  Form input materi baru
            </div>
        <div class="card-body">
                <a href=".php" class="btn btn-danger mb-3">kembali</a>
          <form method="POST">
          <div class="mb-3">
                <label class="form-label">materi</label>
                    <input type="text"  name="tmateri" class="form-control"  placeholder="masukan materi">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                    <input type="text" name="tdeskripsi" class="form-control"  placeholder="masukan deskripsi">
            </div>
            <div class="mb-3">
                <label class="form-label">link</label>
                    <input type="text" name="tlink" class="form-control"  placeholder="masukan link">
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
                  Data materi baru
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
                    <th>materi</th>
                    <th>Deskripsi</th>
                    <th>link</th>
                    <th>Aksi</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Teknik Powerpoint</td>
                    <td>Lorem ipsum dolor sit amet. 
                        Aut laboriosam voluptas ab quia commodi 33 accusantium quasi qui reiciendis Quis aut laborum pariatur.
                        Aut ullam doloremque qui sunt error ab vero odio sed voluptate dolorem At quae odio qui dolores laudantium.</td>
                    <td>www</td>
                    <td>
                         <a href="#" class="btn btn-warning">Edit</a>
                         <a href="#" class="btn btn-danger">hapus</a>
                    </td>
                </tr>

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