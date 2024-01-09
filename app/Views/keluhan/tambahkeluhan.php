<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?> 
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Keluhan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pencatatan Keluhan</a></li>
              <li class="breadcrumb-item active">Tambah Keluhan</li>
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
                <h3 class="card-title">Tambah Keluhan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/keluhan/save" method="post">
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
                    <label for="keluhan">Jenis Keluhan</label>
                    <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Masukkan Jenis Keluhan">
                  </div>
                  <div class="form-group">
                  <label>Pilih Teknisi</label>
                        <select class="form-control" name="teknisi">
                          <?php foreach ($teknisi as $t) { ?>
                            <option value="<?= $t['username']; ?>"><?= $t['username']; ?></option>
                          <?php } ?>
                          <option value="-">-</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="tanggapan">Tanggapan</label>
                    <input type="text" class="form-control" id="tanggapan" name="tanggapan" placeholder="Masukkan Tanggapan">
                  </div>
                  <div class="form-group">
                  <label>Prioritas</label>
                        <select class="form-control" name="prioritas">
                          <option value="Level 1">Level 1</option>
                          <option value="Level 2">Level 2</option>
                          <option value="Level 3">Level 3</option>
                          <option value="Level 4">Level 4</option>
                          <option value="Level 5">Level 5</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="progres">Progres</label>
                    <input type="text" class="form-control" id="progres" name="progres" placeholder="Masukkan progres">
                  </div>
                  <div class="form-group">
                        <label>Keterangan</label>
                        <select class="form-control" name="keterangan">
                          <option value="Belum Selesai">Belum Selesai</option>
                          <option value="Selesai di Admin">Selesai di Admin</option>
                          <option value="Selesai di Teknisi">Selesai di Teknisi</option>
                        </select>
                      </div>
                  <div class="form">  
                    <button type="submit" class="btn btn-danger float-right">Tambah Data</button>
                  </div>   
                </div>
                <!-- /.card-body -->
              </form>
            </div>
    <?= $this->endSection(); ?>