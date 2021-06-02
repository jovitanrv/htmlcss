<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="">
            <img src="<?php echo base_url(); ?>src/logo.png" style="width: 40px">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admController'); ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admController/editAkun'); ?>">Edit Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admController/logout'); ?>">Log Out</a>
            </li>
        </ul>
    </nav>
    <div class="profil">
        <h1><center>Edit Profil</center></h1>
        <?= $this->session->flashdata('message');?>
        <form method="post" action="<?= base_url('admController/editAdmin')?>">
            <input id="namaAdm" type="text" name="namaAdm" placeholder="Nama"><br>
            <input id="emailAdm" type="text" name="emailAdm" placeholder="Email"><br>
            <input id="almtAdm" type="text" name="alamatAdm" placeholder="Alamat"><br>
        
        <center>
            <button style="margin-right: 40px;">Batal</button>
            <button>Simpan</button>
        </center>
        </form>
    </div>
</body>
</html>