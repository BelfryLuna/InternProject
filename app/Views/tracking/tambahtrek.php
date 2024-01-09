<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Tracking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tracking</a></li>
              <li class="breadcrumb-item active">Tambah Data Aplikasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Tambah Trek</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/trek/save" method="post">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="kode">Kode Pemesanan</label>
                    <input type="text" class="form-control" id="kode" name="kode_p" placeholder="Masukkan Kode Pemesanan">
                  </div> -->
                  <div class="form-group">
                    <label for="klien">Klien</label>
                    <input type="text" class="form-control" id="klien" name="klien" placeholder="Masukkan Nama Klien">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="kode" name="tanggal" >
                  </div>
                  <div class="form-group">
                    <label for="apk">Aplikasi</label>
                    <input type="text" class="form-control" id="kode" name="apk" placeholder="Masukkan Nama Aplikasi">
                  </div>
                  <div class="form-group">
                    <label for="proses">Proses</label>
                    <input type="text" class="form-control" id="proses" name="proses" placeholder="Masukkan Proses">
                  </div>
                  <div class="form-group">
                    <label for="progres">Progres</label>
                    <input type="text" class="form-control" id="progres" name="progres" placeholder="Masukkan Progres">
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">

                          <option value="Aplikasi Sudah Selesai">Aplikasi Sudah Selesai</option>
                          <option value="Aplikasi Belum Selesai">Aplikasi Belum Selesai</option>
                        </select>
                      </div>
                  <div class="form">  
                    <button type="submit" class="btn btn-danger float-right">Tambah Data</button>
                  </div>   
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
<?= $this->endSection(); ?>