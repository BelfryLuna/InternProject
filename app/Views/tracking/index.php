<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tracking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tracking</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title float-left">Tabel Tracking</h3>
                <a href="/trek/tambahtrek" class="btn btn-danger float-right">Tambah Data Trek</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kode Pemesanan</th>
                    <th>Klien</th>
                    <th>Tanggal</th>
                    <th>Aplikasi</th>
                    <th>proses</th>
                    <th>Progres</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($trek as $t)  { ?>
                    <tr>
                      <td><?= $t['kode_p']; ?></td>
                      <td><?= $t['klien']; ?></td>
                      <td><?= $t['tanggal']; ?></td>
                      <td><?= $t['apk']; ?></td>
                      <td><?= $t['proses']; ?></td>
                      <td><?= $t['progres']; ?></td>
                      <td><?= $t['status']; ?></td>
                      <td>
                      <form action="/Trek/<?= $t['id']; ?>" method="post" class="d-inline">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                      </form>
                      </td>
                    </tr>
                    <?php } ?>  
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