<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <style media="screen">
      body { background-color: #E2F0F1; }
      nav { background-color: #008B8B; }
      a { color: white; }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm">
      <a class="navbar-brand" href="<?php echo site_url('pjmController'); ?>">
          <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px; margin-top: -14px;">
      </a>
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('pjmController'); ?>">Home</a></li>
        <li class="active"><a href="<?php echo site_url('C_Buku') ?>">Daftar Buku</a></li>
        <li class="active"><a href="<?php echo site_url('pjmController/cariBuku'); ?>">Pencarian Buku</a></li>
        <li class="active"><a href="<?php echo site_url('pjmController/pageProfil'); ?>">Profil</a></li>
        <li class="active"><a href="<?php echo site_url('pjmController/logout'); ?>">Keluar</a></li>
      </ul>
  </nav>
    <?php $dataAkun = $this->session->userdata('sessPjm'); ?>
    <center style="font-size: 50px; font-family:serif; margin-top:10%;"><b>Selamat Datang, <?php echo $dataAkun['namaPjm']; ?>!</b></center>
</body>
</html>
