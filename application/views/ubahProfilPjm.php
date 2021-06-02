<!DOCTYPE html>
<html>
<head>
    <title>Profil Saya</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <style>
        input { margin-left: 30%; margin-right: 30%; margin-bottom: 5px; width: 40%; border: none; line-height: 50px;
                border-bottom: 3px solid #DDD; padding: 10px; border-radius : 6px; }
        input:hover { outline: none; border-bottom : 3px solid #13326D; }
        nav { background-color: #008B8B; }
        a { color: white;}
        button { background-color: #00A8A8; color: white; border-radius: 10px; padding: 5px; width: 70px;
                 height: 45px; font-size: 15px; }
        button:hover { cursor: pointer;
               background-color: #13326D; }
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
        <li class="active"><a href="<?php echo site_url('pjmController/pageEdit'); ?>">Profil</a></li>
        <li class="active"><a href="<?php echo site_url('pjmController/logout'); ?>">Keluar</a></li>
      </ul>
    </nav>
    <div class="profil">
        <h1 style="font-family:serif; margin-top:50px;"><center><b>Ubah Profil</b></center></h1>
        <form method="post" action="<?php echo site_url('pjmController/editPeminjam') ?>">
            <input type="text" name="namaPjm" placeholder="Nama"><br>
            <input type="text" name="alamatPjm" placeholder="Alamat"><br>
            <input type="email" name="emailPjm" placeholder="Email"><br>
            <input type="password" name="passPjm" placeholder="Password"><br>
        <center>
            <!-- <button style="margin-right: 40px;" >Batal</button> -->
            <button type="submit" style="margin-top:35px;">Simpan</button>
        </center>
        </form>
    </div>
</body>
</html>
