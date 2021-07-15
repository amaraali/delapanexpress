<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title><?= $judul; ?></title>
</head>

<body class="mt-5" background="<?= base_url() ?>assets/img/bg.png">

  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url() ?>assets/img/yuki.png" alt="" width="30" height="30">
      </a>
      <a class="navbar-brand" href="<?= base_url(); ?>tracking">DELAPAN EXPRESS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url(); ?>tracking/daftarlayanan">Layanan <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>tracking/informasi">Informasi</a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>tracking/aboutus">Tentang Kami</a>
        </div>
        <div><a class="nav-link " href="<?= base_url(); ?>autentifikasikasi">Login</a></div> -->
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-item nav-link" href="<?= base_url(); ?>tracking/daftarlayanan">Layanan <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link" href="<?= base_url(); ?>tracking/informasi">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link" href="<?= base_url(); ?>tracking/aboutus">Tentang Kami</a>
          </li>
        </ul>
        <a class="nav-link my-2 my-sm-0" href="<?= base_url(); ?>autentifikasi">Login</a>
      </div>
    </div>
  </nav>


  <!-- ##################################### -->