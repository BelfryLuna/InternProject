<?= $this->extend('layout/template'); ?> 

    <?= $this->section('content'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php foreach ($hasiltrekIn as $h ) { ?>
                   <h3><?= $h['COUNT(DISTINCT kode_p)']; ?></h3>
                <?php } ?>
                <p>Jumlah Pesanan Aplikasi
                   <br>
                   Yang Masuk
                </p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-paper-plane"></i>
              </div>
              <a href="<?= base_url('/trek') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $hasilkeluhanIn->id; ?></h3>

                <p>Jumlah Keluhan
                   <br>
                   Yang Masuk
                </p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-calendar-check"></i>
              </div>
              <a href="<?= base_url('/keluhan') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php foreach ($hasilappIn as $h ) { ?>
                   <h3><?= $h['COUNT(DISTINCT kode_p)']; ?></h3>
                <?php } ?>

                <p>Jumlah Pesanan<br>Aplikasi Yang Sudah Selesai</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-paper-plane"></i>
              </div>
              <a href="<?= base_url('/trek') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3><?= $hasilkeluhanDone->id; ?></h3>

                <p>Jumlah Keluhan <br>Yang Sudah Selesai</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-calendar-check"></i>
              </div>
              <a href="<?= base_url('/keluhan') ?>" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row"> 
        <!-- BAR CHART -->
        <div class="col-lg-6">
            <!-- Bar chart -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Grafik Keluhan per Bulan
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart1" style="height: 250px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-6">
            <!-- Bar chart -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Grafik Aplikasi per Bulan
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div id="bar-chart2" style="height: 250px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
        </div>
        </div>
        
<!-- jQuery -->
<script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/dist/js/adminlte.min.js"></script>
<!-- FLOT CHARTS -->
<script src="<?= base_url(); ?>/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?= base_url(); ?>/plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?= base_url(); ?>/plugins/flot/plugins/jquery.flot.pie.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>/dist/js/demo.js"></script>
<!-- Page specific script -->

            <script>
              $(function() {
                var bar_data = {
                  data : [[1, <?= $getJan['id']; ?>], [2, <?= $getFeb['id']; ?>], [3, <?= $getMar['id']; ?>], [4,<?= $getApr['id']; ?>], [5, <?= $getMei['id']; ?>], [6, <?= $getJun['id']; ?>], [7, <?= $getJul['id']; ?>], [8, <?= $getAgus['id']; ?>], [9, <?= $getSep['id']; ?>], [10, <?= $getOkt['id']; ?>], [11, <?= $getNov['id']; ?>], [12, <?= $getDes['id']; ?>]],
                  bars: { show: true }
                }
                $.plot('#bar-chart1', [bar_data], {
                  grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                  },
                  series: {
                    bars: {
                      show: true, barWidth: 0.5, align: 'center',
                    },
                  },
                  colors: ['#3c8dbc'],
                  xaxis : {
                    ticks: [[1,'Jan'], [2,'Feb'], [3,'Mar'], [4,'Apr'], [5,'Mei'], [6,'Jun'], [7,'Jul'], [8,'Agus'], [9,'Sep'], [10,'Okt'], [11,'Nov'], [12,'Des']]
                  }
                })
              })
            </script>

<script>
              $(function() {
                var bar_data = {
                  data : [
                    [1,<?php foreach ($trekJan as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>],
                    [2,<?php foreach ($trekFeb as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [3, <?php foreach ($trekMar as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [4,<?php foreach ($trekApr as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [5, <?php foreach ($trekMei as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [6, <?php foreach ($trekJun as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [7, <?php foreach ($trekJul as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [8, <?php foreach ($trekAgus as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [9, <?php foreach ($trekSep as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [10, <?php foreach ($trekOkt as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [11, <?php foreach ($trekNov as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>], 
                    [12, <?php foreach ($trekDes as $h ) { ?>
                    <?= $h['COUNT(DISTINCT kode_p)']; ?>
                    <?php } ?>]],
                  bars: { show: true }
                }
                $.plot('#bar-chart2', [bar_data], {
                  grid  : {
                    borderWidth: 1,
                    borderColor: '#f3f3f3',
                    tickColor  : '#f3f3f3'
                  },
                  series: {
                    bars: {
                      show: true, barWidth: 0.5, align: 'center',
                    },
                  },
                  colors: ['#3c8dbc'],
                  xaxis : {
                    ticks: [[1,'Jan'], [2,'Feb'], [3,'Mar'], [4,'Apr'], [5,'Mei'], [6,'Jun'], [7,'Jul'], [8,'Agus'], [9,'Sep'], [10,'Okt'], [11,'Nov'], [12,'Des']]
                  }
                })
              })
            </script>
<?= $this->endSection(); ?>

    
