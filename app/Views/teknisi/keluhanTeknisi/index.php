<?= $this->extend('layoutuser/template'); ?>

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
              <li class="breadcrumb-item active">pencatatankeluhan</li>
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Klien</th>
                    <th>Tanggal</th>
                    <th>Jenis Keluhan</th>
                    <th>Pilih Teknisi</th>
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
                      <td><?= $k['teknisi']; ?></td>
                      <td><?= $k['tanggapan']; ?></td>
                      <td><?= $k['prioritas']; ?></td>
                      <td><?= $k['progres']; ?></td>
                      <td><?= $k['keterangan']; ?></td>
                      <td>
                      <a href="keluhan/edit/<?= $k['id']; ?>" class="btn btn-warning">Update Data Keluhan</a>  
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
