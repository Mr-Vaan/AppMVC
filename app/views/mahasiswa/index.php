<div class="container mt-3">
  
  <div class="row">
    <div class="col-lg-6">
      <!-- Karena Methodnya static, jadi memanggilnya memakai titik 2(::), contoh -> Flasher::flash(); -->
      <!-- Tampil pesan flashnya -->
      <!-- Selanjutnya, untuk ngesetnya dimana? nah taro saja di controller Mahasiswa.php nya -->
      <?php Flasher::flash(); ?> 
    </div>
  </div>


  <div class="row">
    <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormModal">
            Tambah Data Mahasiswa
        </button>
        <br><br>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
          <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item">
              <?= $mhs['nama']; ?>
              <!-- BISA SAJA KITA MEMAKAI SWEET ALERT UNTUK FRAMEWORK POP UP -->
              <div class="d-flex justify-content-between">
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary btn-primary float-right">Detail</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success btn-success float-right tampilModalUbah" data-toggle="modal" data-target="#FormModal">Ubah</a>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger btn-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>  
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- BASEURL Keluarannya -> http://localhost/phpmvc/public/... -->
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="form-group">
              <label for="nama">Nama</label>
              <!-- name="nama" -> buat diambil Associative Arraynya nanti. -->
              <input type="text" class="form-control" id="nama" name="nama"> 
          </div>
          <div class="form-group">
              <label for="nrp">NRP</label>
              <!-- name="nrp" -> buat diambil Associative Arraynya nanti. -->
              <input type="number" class="form-control" id="nrp" name="nrp"> 
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <!-- name="email" -> buat diambil Associative Arraynya nanti. -->
              <input type="email" class="form-control" id="email" name="email"> 
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Planologi">Teknik Planologi</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
              </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
