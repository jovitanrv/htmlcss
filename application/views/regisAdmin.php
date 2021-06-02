<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

</head>
<style media="screen">
  body { background-color: #E2F0F1; }
  .atas { height: 100px; background-color: #00A8A8; width: 60%; padding-top: 12px; margin-left: 20%; margin-top: 50px;}
  button { background-color: #00A8A8; color: white; border-radius: 10px; padding: 5px; width: 60px;
           height: 35px; font-size: 10px; }
  button:hover { cursor: pointer; background-color: #13326D; }
  .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
            margin-left: 20%; width: 60%; height: 100%; background-color: white; }
  h1 { color : white;
       font-family: serif;
       margin-top: 2%;}
</style>
<body>
  <div class="atas">
    <h1><center><b>REGISTRASI ADMIN</b></center</h1>
  </div>
  <div class="middle">
    <form class="form-horizontal" action="<?php echo site_url('admController/regisAdmin'); ?>" method="post" class="regis">
      <div class="form-group">
        <label class="control-label col-sm-3" for="nama">Nama Lengkap :</label>
        <div class="col-sm-6">
          <input type="nama" class="form-control" id="namaAdm" placeholder="Nama Lengkap" name="namaAdm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">E-mail :</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="emailAdm" placeholder="E-mail" name="emailAdm">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="alamat">Alamat :</label>
        <div class="col-sm-6">
          <textarea type="text" class="form-control" id="alamatAdm" name="alamatAdm" placeholder="Alamat"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="pwd">Password :</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="passAdm" placeholder="Password" name="passAdm">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="font-size:12px; padding:3px;">Daftar</button>
            <div id="myModal" class="modal fade" tabindex="-100" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">Pendaftaran berhasil!</h4>
                  </div>
                  <!-- <div class="modal-footer">
                    <a href="<?php echo site_url('pjmController/login'); ?>"><button type="button" class="btn btn-default" data-dismiss="modal">Login</button></a>
                  </div> -->
                </div>
              </div>
          </div>
          </div>
        </div>
      </form>
  </div>
    <script type="text/javascript">
      $('#myModal').modal('show');
    </script>
  </body>
</html>
