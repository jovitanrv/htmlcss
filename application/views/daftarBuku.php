<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Buku Tersedia</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
  <style media="screen">
    body { background-color: #E2F0F1; }
    .atas { height: 100px; background-color: #00A8A8; width: 60%; padding-top: 3px; margin-left: 20%; margin-top: 5px;}
    #pic { height : auto; width : 190px; }
    table { margin-left : 20%; background-color: white; width : 60%; }
    td { padding : 20px 20px 20px 20px ; }

    button { background-color: #00A8A8; color: white; border-radius: 10px; padding: 5px; width: 70px; height: 45px; font-size: 12px; }
    button:hover { cursor: pointer; background-color: #13326D; }
    .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
      margin-left: 20%; width: 60%; background-color: white; }
    h1 { color: white; font-family: serif; margin-top: 27px;}
    nav { background-color: #008B8B; }
    a { color: white;}
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
        <h1><center>Daftar Buku Tersedia</center></h1>
    </div>
    <div class="middle">
    
  
    </div>
    <table>
<<<<<<< HEAD

=======
>>>>>>> 5177801d5a38ead789490b6da258ab997a110484
      <?php foreach($list_buku as $buku): ?>
      <tr style="margin-top: 10px;">
        <td> <img id="pic"  src="<?= base_url('images/').$buku['imgpath'];?>" style="object-fit: contain;" ></td>
        <td style="font-size:16px;"> <?= $buku['judul']; ?> </td>
        <td><a href="<?php echo site_url(); ?>/C_Buku/detailBuku/<?= $buku['id_buku'] ?>"> <button type="button">Peminjaman</button> </a></td>
      </tr>
      <?php endforeach ?>
    </table>
    <!-- <center>
    <button type="button" href="<?php echo site_url('pjmController'); ?>">Kembali</button>
    </center> -->
  </body>
</html>
