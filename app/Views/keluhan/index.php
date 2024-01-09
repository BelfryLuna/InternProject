<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pencatatan Keluhan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pencatatan Keluhan</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title float-left">Tabel Pencatatan Keluhan</h3>
                <?php if( in_groups('admin')) : ?> 
                <a href="/keluhan/tambahkeluhan" class="btn btn-danger float-right" style="margin-left: 0.5rem;">Tambah Data Keluhan</a>
                <?php endif; ?>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Klien</th>
                    <th>Tanggal</th>
                    <th>Jenis Keluhan</th>
                    <?php if( in_groups('admin')) : ?>
                    <th>Pilih Teknisi</th>
                    <?php endif; ?>
                    <th>Tanggapan</th>
                    <th>Prioritas</th>
                    <th>Progres</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1 ?>
                  <?php foreach($keluhan as $k) : ?>
                    <tr>
                      <th scope="row"><?= $i++; ?></th>
                      <td><?= $k['klien']; ?></td>
                      <td><?= $k['tanggal']; ?></td>
                      <td><?= $k['keluhan']; ?></td>
                      <?php if( in_groups('admin')) : ?> 
                      <td><?= $k['teknisi']; ?></td>
                      <?php endif; ?>    
                      <td><?= $k['tanggapan']; ?></td>
                      <td><?= $k['prioritas']; ?></td>
                      <td><?= $k['progres']; ?></td>
                      <td><?= $k['keterangan']; ?></td>
                      <td>
                      <a href="keluhan/edit/<?= $k['id']; ?>" class="btn btn-warning">Update Data Keluhan</a>  
                      <?php if( in_groups('admin')) : ?>   
                      <a href="keluhan/delete/<?= $k['id']; ?>" class="btn btn-danger">Hapus Data Keluhan</a>
                      <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <?= $this->endSection(); ?>
