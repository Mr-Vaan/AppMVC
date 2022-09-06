<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Button trigger modal -->
<div class="container mt-3">    
    <div class="row">
        <div class="col-lg-6">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Barang
            </button>
            <br><br>
        </div>
    </div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="form-group">
                    <label for="kode">Kode Barang</label>
                    <!-- name="nama" -> buat diambil Associative Arraynya nanti. -->
                    <input type="text" class="form-control" id="kode" name="kode"> 
                </div>
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <!-- name="nrp" -> buat diambil Associative Arraynya nanti. -->
                    <input type="text" class="form-control" id="nama" name="nama"> 
                </div>
                <div class="form-group">
                    <label for="harga">Harga Barang</label>
                    <!-- name="email" -> buat diambil Associative Arraynya nanti. -->
                    <input type="text" class="form-control" id="harga" name="harga"> 
                </div>
                <div class="form-group">
                    <label for="harga">Stock Barang</label>
                    <!-- name="email" -> buat diambil Associative Arraynya nanti. -->
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Stock : 1000"> 
                </div>
                <div class="form-group">
                    <label for="distributor">Distributor</label>
                    <!-- name="email" -> buat diambil Associative Arraynya nanti. -->
                    <input type="text" class="form-control" id="distributor" name="distributor"> 
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<div class="container mt-3"></div>
    <div class="row">
        <div class="col-lg-5">
            <h1>Data Barang</h1>
              <!-- BISA SAJA KITA MEMAKAI SWEET ALERT UNTUK FRAMEWORK POP UP -->
              <div class="justify-content-end">
                    <li class="list-group-item" aria-disabled="true">A disabled item
                        <a href="#" class="badge badge-primary btn-primary float-right">Detail</a>
                        <a href="#" class="badge badge-success btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#FormModal">Ubah</a>
                        <a href="#" class="badge badge-danger btn-danger float-right"">Hapus</a>
                    </li>
              </div>
              <div class="justify-content-end">
                    <li class="list-group-item" aria-disabled="true">A disabled item
                        <a href="#" class="badge badge-primary btn-primary float-right">Detail</a>
                        <a href="#" class="badge badge-success btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#FormModal">Ubah</a>
                        <a href="#" class="badge badge-danger btn-danger float-right"">Hapus</a>
                    </li>
              </div>
              <div class="justify-content-end">
                    <li class="list-group-item" aria-disabled="true">A disabled item
                        <a href="#" class="badge badge-primary btn-primary float-right">Detail</a>
                        <a href="#" class="badge badge-success btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#FormModal">Ubah</a>
                        <a href="#" class="badge badge-danger btn-danger float-right"">Hapus</a>
                    </li>
              </div>
              <div class="justify-content-end">
                    <li class="list-group-item" aria-disabled="true">A disabled item
                        <a href="#" class="badge badge-primary btn-primary float-right">Detail</a>
                        <a href="#" class="badge badge-success btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#FormModal">Ubah</a>
                        <a href="#" class="badge badge-danger btn-danger float-right"">Hapus</a>
                    </li>
              </div>
              <div class="justify-content-end">
                    <li class="list-group-item" aria-disabled="true">A disabled item
                        <a href="#" class="badge badge-primary btn-primary float-right">Detail</a>
                        <a href="#" class="badge badge-success btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#FormModal">Ubah</a>
                        <a href="#" class="badge badge-danger btn-danger float-right"">Hapus</a>
                    </li>
              </div>

    </div>
        <div class="col-lg-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Column 2 -->
            
            








        </div>    
    </div>













</body>


















</html>