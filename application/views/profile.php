<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Profil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <style media="screen">
      body { background-color: #E2F0F1; }
      .atas { height: 100px; background-color: #00A8A8; width: 80%; padding-top: 22px; margin-left: 10%; margin-top: 50px; }
      b { color : white; font-family : serif; font-size : 40px; }
      .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
        margin-left: 10%; width: 80%; height: auto; background-color: white; }
      .bottom { margin-top : 50px; }
      h4 { font-family : serif; }
      nav { background-color: #008B8B; }
      a { color: white; }

      .prof_div{
        margin-left: 4%; 
        border-radius: 2px;
        padding: 2px 5px 2px 5px;
        
      }
      .prof_div2{
        padding: 2px 2px 2px 2px;
      }
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
    <center> <b> PROFIL</b> </center>
  </div>


  <div class="middle">
        <div class="container">
          <div class="row">
              <div class="col-md-4" style="margin-left: 2%; border-style: solid; border-color: black; 
                padding: 5px 5px 5px 5px; border-color: gray; border-radius: 7px;">
              
              <div class="container">
                <div class="row" style=" width: 33%; border-width: 1px;">
                  <div class="prof_div2">Nama &nbsp;</div>
                  <div class="prof_div"> <?= $dataAkun['namaPjm'];?> </div>
                </div>
                <div class="row" style="width: 33%; margin-top: 5px; border-width: 1px;">
                  <div class="prof_div2">Email &nbsp;</div>
                  <div class="prof_div"> <?= $dataAkun['emailPjm'];?> </div>
                </div>
                <div class="row" style="width: 33%;  margin-top: 5px; margin-bottom: 2px; border-width: 1px;">
                  <div class="prof_div2">Alamat </div>
                  <div class="prof_div"> <?= $dataAkun['alamatPjm'];?> </div>
                </div>

              </div>


              </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="margin: 10px 10px 10px 10px;"> 
            <form action="<?= site_url('pjmController/pageEdit')?>">
              <button type="submit" class="btn btn-success"> Ubah Profil</button>
            </form>
          </div>
          </div>
        </div>

      <div style="margin : 15px 0px 2px 0px;">
        <div style="background-color: #008B8B; width: 20%; border-radius: 4px; margin-left: 23px;">
        <center> <font color="white"> Buku yang dipinjam </font> </center></div>

        <?php foreach($buku as $book): ?>

        <div class="card mb-3" style="max-width: 540px; margin-top: 10px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?= base_url('images/').$book['imgpath']?>" class="card-img" >
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title"><?= $book['judul'] ?> </h3>
                <br>
                <p class="card-text"> Tanggal Pinjam  : &nbsp; &nbsp; <?= $book['tgl_pinjam'] ?> </p>
                <p class="card-text"> Tanggal Kembali : &nbsp; <?= $book['tgl_kembali'] ?></p>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach ?>


      </div>
  </div>
  </body>
</html>
