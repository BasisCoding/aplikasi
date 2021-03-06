<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <link rel="icon" href="<?= base_url('assets/img/serang.png') ?>">
    <title><?= $title ?></title>
  </head>
  <body >

    <!-- navbar open -->
      <nav class="navbar shadow navbar-expand-lg navbar-light fixed-top  ">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url() ?>">
            Pemerintah Kabupaten Serang
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link active" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/pengaduan_masyarakat') ?>">Pengaduan Masyarakat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" id="tombol" href="<?= base_url('auth/login'); ?>">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- nav close -->

      <div class="container container-Second">
        <div class="row ">
          <div class="col-xs-12  col-lg-8 col-md-12 mb-3">
            <div id="carouselExampleCaptions" class="carousel slide  " data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active shadow">
                  <img src="<?= base_url('assets/'); ?>img/1.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/'); ?>img/2.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/'); ?>img/4.jpg" class="d-block w-100" alt="...">

                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-xs-6  col-lg-4 col-md-12 mb-2 ">
            <div class="card card-info mb-3 shadow  bg-light">
              <div class="card-body text-center">
                  <img src="<?= base_url('assets/img/serang.png') ?>" class="logo" alt="">
                  <h5>Dinas Pekerjaan Umum Dan Penataan Ruang</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-content   border-0">
        <div class="list-group-item list-group-item-action active">
          <h5 class="mb-1"><?= $title ?></h5>
        </div>
          <div class="card-body">
            <?= $this->session->flashdata('image'); ?>
            <div class="table-responsive">
              <table class="table display">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kd jalan</th>
                    <th scope="col">Nama Jalan</th>
                    <th scope="col">Nama Desa</th>
                    <th scope="col">Pekerasan</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no= 1 ; foreach ($jalan as $jalan): ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $jalan['id_jalan'] ?></td>
                    <td><?= $jalan['nama_jalan'] ?></td>
                    <td><?= $jalan['nama_desa'] ?></td>
                    <td><?= $jalan['pekerasan'] ?></td>
                    <td><a href="<?= base_url("auth/view/".$jalan['id_jalan']) ?>" class="badge badge-secondary" >details</a></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-md-6  segment-one">
                <h3>contact</h3>
                <ul>
                  <li><i class="fas fa-home"></i> Jl. Tb. Suwandi, Lingkar Selatan Cikulur Ciracas, Serang, Kec. Serang, Kota Serang, Banten 42116 </li>
                  <li><i class="fas fa-phone-alt"></i> <label for="">+08965367536</label> </li>
                    <li><i class="fas fa-envelope-open"></i> <label for="">kab.pupr@serang.com</label> </li>
                </ul>
              </div>
              <div class="col-md-6  segment-two">
                <h3>Follow Social Media</h3>
                <a href="https://web.facebook.com/deni.outsider.39" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
                <a href="https://www.instagram.com/accounts/login/?next=/deniandiansyah/" target="_blank"> <i class="fab fa-instagram"></i> </a>
                <a href="#" target="_blank"> <i class="fab fa-twitter-square"></i> </a>
                <a href="#" target="_blank"> <i class="fab fa-youtube"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Image and text -->
      <!-- Bootstrap core JavaScript-->
      <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
      <script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>
      <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
      <!-- Page level custom scripts -->
      <script src="<?= base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
      <script src="<?= base_url('assets/') ?>js/demo/chart-pie-demo.js"></script>
      <script src="<?= base_url('assets/') ?>js/<?= $script ?>"></script>
      <script src="<?= base_url('assets/') ?>dist/sweetalert2.all.min.js"></script>
      <script src="<?= base_url('assets/') ?>js/sweetalertku.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
          $('table.display').DataTable();
      } );
      </script>
      <script type="text/javascript">
          $('.custom-file-input').on('change', function(){
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass('selected').html(filename);

        });
      </script>
  </body>
</html>
