<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <title>Laporan Peminjaman</title>
    <style media="screen">
      body { background-color: #E2F0F1; }
      .atas { height: 100px; background-color: #00A8A8; width: 60%; padding-top: 15px; margin-left: 20%; margin-top: 50px;}
      h1 { color: white; font-family: serif; }
      td { color: #13326D;}
      /* img { padding-left: 100px;} */
      button { background-color: #00A8A8; color: white; border-radius: 10px; padding: 5px; width: 70px;
              height: 45px; font-size: 10px; }
      button:hover { cursor: pointer; background-color: #13326D; }
      nav { background-color: #008B8B; }
      a { color: white;}
      .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
         margin-left: 20%; width: 60%; background-color: white; }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="<?php echo site_url('pjmController'); ?>">
           <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px; margin-top: -14px;">
        </a>
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo site_url('pjmController') ?>">Home</a></li>
          <li class="active"><a href="<?php echo site_url('C_Buku') ?>">Daftar Buku</a></li>
          <li class="active"><a href="<?php echo site_url('pjmController/cariBuku'); ?>">Pencarian Buku</a></li>
          <li class="active"><a href="<?php echo site_url('pjmController/pageProfil'); ?>">Profil</a></li>
          <li class="active"><a href="<?php echo site_url('pjmController/logout'); ?>">Keluar</a></li>
        </ul>
    </nav>
    <div class="atas">
      <h1><center><b> KONFIRMASI PEMINJAMAN </b> </center></h1>
    </div>
    <?php $dataAkun = $this->session->userdata('sessPjm'); ?>
      <div class="middle">
      <?= $this->session->flashdata('message');?>
        <div>
          <form class="form-horizontal" action="<?php echo site_url('C_Buku/pinjam'); ?>" method="post">
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">Nama : </label>
              <label class="col-sm-5"><input type="text" style="display:hidden; border:0px;" readonly name="namaPjm" value="<?php echo $dataAkun['namaPjm']; ?>"></input>
                </label>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">E-mail : </label>
              <label class="col-sm-5"><input type="text" style="display:hidden; border:0px;" readonly name="emailPjm" value="<?= $dataAkun['emailPjm']; ?>"></input>
                </label>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">Buku yang dipinjam : </label>
              <label class="col-sm-5"> 
              <input type="text" style="display:hidden; border:0px; width: 500px;" readonly name="judul" value="<?php echo $buku['judul'] ?>">
              </label>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">Tanggal dipinjam : </label>
              <label class="col-sm-5"><input type="text" style="display:hidden; border:0px;" readonly name="tgl_pinjam" value="<?php echo $today=date("Y-m-d"); ?>"> 
              </input> </label>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-4" for="nama">Tanggal dikembalikan : </label>
              <label class="col-sm-5"> 
              <input type="text" style="display:hidden; border:0px;" readonly name="tgl_kembali" value="<?php $back=strtotime("+7 days",strtotime($today)); 
              echo $last=date("Y-m-d",$back); ?>"></input>
              </label>
            </div>
            <!-- <div class="form-group">
              <label class="control-label col-sm-4" for="nama">Kode Peminjaman : </label>
              <label class="col-sm-5">
              <input type="text" style="display:hidden; border:0px;" name="id_pinjam" value="<?php ?>"> 
              </input> </label> -->
            </div>
            <?php
            $data = [
              "emailPjm" => $dataAkun['emailPjm'],
              "id_buku" => $buku['id_buku'],
              "tgl_pinjam" => $today,
              "tgl_kembali" => $last,
              "status" => '1'
            ];

            $this->session->set_userdata('borrow',$data);
          ?>
            <div class="form-group">
              <div class="col-sm-7">
              <input type="text" style="display:hidden; border:0px;" name="id_buku" value="<?php $buku['id_buku']; ?>"></input>
              </div>
              <form action="<?php echo site_url('/C_Buku/pinjam'); ?> ">
                <button type="submit" name="button">Konfirmasi</button>
                <button type="submit" formaction="<?php echo site_url('pjmController'); ?>"> Keluar </button>
              </form>
              
          </div>
          </form>
          
      </div>

  </body>
</html>
