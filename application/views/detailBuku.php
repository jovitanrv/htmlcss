<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <title>Detail Buku</title>
    <style media="screen">
     body { background-color: #E2F0F1; }
     .atas { height: 100px; background-color: #00A8A8; width: 60%; padding-top: 3px; margin-left: 20%; margin-top: 5px;}
      nav { background-color: #008B8B; }
      a { color: white; }
     .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
        margin-left: 20%; width: 60%; height: 400px; background-color: white; }
     button { background-color: #00A8A8; color: white; border-radius: 10px; padding: 5px; width: 70px; height: 45px; font-size: 12px; }
     button:hover { cursor: pointer; background-color: #13326D; }
     #pic { width: 100%; }
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
    <div class="atas">
      <h1 style="color:white;"><center><?= $detail['judul']; ?></center></h1>
    </div>
    <div class="middle">
      <div class="top">
        <div class="col-sm-4">
          <img id="pic" src="<?= base_url('images/').$detail['imgpath'];?>" alt="">
        </div>
        <div class="col-sm-8">
          <p> <?= $detail['sinopsis']; ?><?php?></p>
        </div>
      </div>
      <div class="bottom">
        <div class="col-sm-6">
          <h5>Ketersediaan: <?= $detail['stock']; ?><?php?></h5>
        </div>
        <div class="col-6">
          <a href="<?php echo site_url(); ?>/C_Buku/konfPinjam/<?= $detail['id_buku'] ?>"><button type="button" name="button">Pinjam</button></a>
        </div>
      </div>
    </div>
  </body>
</html>
