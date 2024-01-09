<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Garuda CRM</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('home/index'); ?>/images/favicon.ico" />
  <!-- Place favicon.ico in the root directory -->

  <!-- ========================= CSS here ========================= -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap-5.0.0-alpha-2.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/LineIcons.2.0.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.css" />
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

  <!-- ========================= preloader start ========================= -->
  <div class="preloader">
    <div class="loader">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- preloader end -->


  <!-- ========================= header start ========================= -->
  <header class="header">
    <div class="navbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.html">
                <img src="<?= base_url(); ?>/assets/img/logo/GCI@.png" alt="Logo" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                <a class="btn btn-danger" href="/login" style=" margin-left: 813px;">Login</a>
              </div>
              <!-- navbar collapse -->
            </nav>
            <!-- navbar -->
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- navbar area -->
  </header>
  <!-- ========================= header end ========================= -->

  <!-- ========================= hero-section start ========================= -->
  <section id="home" class="hero-section">
    <div class="hero-shape">
      <img src="<?= base_url(); ?>/assets/img/hero/hero-shape.svg" alt="" class="shape">
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content">
            <h1 class="wow fadeInUp" data-wow-delay=".2s">Selamat Datang<span></span> </h1>
            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span>Di Costumer Service</span></h2>
            <h2 class="wow fadeInUp" data-wow-delay=".2s"><span>Garuda Cyber Indonesia</span></h2>
            <br>
            <form action="<?= base_url(); ?>/home/hasiltrek" method="post">
              <?= csrf_field(); ?>
              <p class="wow fadeInUp" data-wow-delay=".4s">
                Untuk mengetahui sejauh mana proses aplikasi anda<br>
                Silahkan masukan kode pemesanan anda.
              </p>
              <div class="input-group input-group-lg">
                <input type="text" class="form-control" placeholder="<?= $kode_p; ?>" aria-label="<?= $kode_p; ?>" aria-describedby="button-addon2" name="kode_p" value="<?= $kode_p; ?>">
                <button class="btn btn-danger" type="submit" id="button-addon2">Cari</button>
              </div>
              <div class="mt-3">
                <a href="/home" class="btn btn-danger ">Kembali</a>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
            <p><b>Kode Pemesanan: <?= $kode_p; ?></b><?php if ($hasiltrek === []) { ?>
                Tidak ditemukan<?php } ?></p> <br>
            <table class="table table-hover">
              <thead class="table-light">
                <tr>
                  <th class="table-danger" scope="col">Klien</th>
                  <th class="table-danger" scope="col">Tanggal</th>
                  <th class="table-danger" scope="col">Aplikasi</th>
                  <th class="table-danger" scope="col">Proses</th>
                  <th class="table-danger" scope="col">Progres</th>
                  <th class="table-danger" scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($hasiltrek as $t) { ?>
                  <tr>
                    <td><?= $t['klien']; ?></td>
                    <td><?= $t['tanggal']; ?></td>
                    <td><?= $t['apk']; ?></td>
                    <td><?= $t['proses']; ?></td>
                    <td><?= $t['progres']; ?></td>
                    <?php if ($t['status'] === 'Aplikasi Sudah Selesai') { ?>
                      <td><b><?= $t['status']; ?></b></td>
                    <?php } else { ?>
                      <td><?= $t['status']; ?></td>
                    <?php } ?>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= hero-section end ========================= -->
  <br><br><br><br><br><br><br>
  <!-- ========================= footer start ========================= -->
  <footer id="footer" class="footer pt-100 pb-70">
    <div class="footer-shape">
      <img src="<?= base_url(); ?>/assets/img/footer/footer-left.svg" alt="" class="shape shape-1">
      <img src="<?= base_url(); ?>/assets/img/footer/footer-right.svg" alt="" class="shape shape-2">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
            <div class="logo">
              <a href="index.html"><img src="<?= base_url(); ?>/assets/img/logo/loho.png" alt="logo" width="210px"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
            <h3>About Us</h3>
            <ul class="links">
              <li>
                <a href="https://garudacyber.co.id/">Home</a>
              </li>
              <li>
                <a href="https://garudacyber.co.id/page/5-profil-garuda-cyber">About Us</a>
              </li>
              <li>
                <a href="https://garudacyber.co.id/page/4-kontak">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <br>
        <p>Designed and Developed by <a href="https://uideck.com" style="color: #fff;" rel="nofollow">Garuda Cyber Indonesia</a></p>
      </div>
    </div>
  </footer>
  <!-- ========================= footer end ========================= -->

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!-- ========================= JS here ========================= -->
  <script src="<?= base_url(); ?>/assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/count-up.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/wow.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/main.js"></script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>