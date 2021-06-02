<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="src/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>src/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>src/js/bootstrap.js"></script>
    <style media="screen">
      body { background-color: #E2F0F1; }
      .atas { height: 100px; background-color: #00A8A8; width: 40%; padding-top: 12px; margin-left: 30%; margin-top: 50px;}
      button { background-color: #00A8A8; color: white; border-radius: 10px; padding: 5px; width: 70px; height: 35px; font-size: 12px; }
      button:hover { cursor: pointer; background-color: #13326D; }
      .middle { border : solid 2px white; padding-top : 30px; padding-left : 30px; padding-right : 30px; padding-bottom : 10px;
         margin-left: 30%; width: 40%; background-color: white; }
      .tab { margin-left: 35%;}
      h1 { color : white;
           font-family: serif; }
    </style>
</head>
<body>
  <div class="atas">
    <h1><center><b>LOGIN SEBAGAI</b></center</h1>
  </div>
  <div class="middle">
    <div class="tab">
      <button onclick="peminjam()"> Peminjam </button>
      <button onclick="admin()"> Admin </button>
    </div>
    <div class="tab-content">
        <div id="none">

        </div>
        <div id="peminjam" class="tab-pane fade in active">
            <form action="<?php echo site_url('pjmController/loginPeminjam'); ?>" method="POST">
            <div style="margin : 6px 2px 2px 2px ;">
              <?= $this->session->flashdata('message');?>  
            </div>
            <div class="form-group">
                  <label for="email">Email Peminjam:</label>
                  <input type="email" class="form-control" id="emailPjm" placeholder="Enter Email" name="emailPjm">
              </div>
              <div class="form-group">
                  <label for="pwd">Password :</label>
                  <input type="password" class="form-control" id="passPjm" placeholder="Enter Password" name="passPjm">
              </div>
                <button type="submit">Submit</button>
            </form>
              <h5>Belum memiliki akun?</h5>
              <a href="<?php echo site_url('pjmController/pageRegis'); ?>"><p>Daftar</p></a>

        </div>
        <div id="admin" class="tab-pane fade in">
            <form action="<?php echo site_url('admController/loginAdmin'); ?>" method="POST">
            <div style="margin : 6px 2px 2px 2px ;">
              <?= $this->session->flashdata('message');?>  
            </div>    
            <div class="form-group">
                    <label for="email">Email Admin:</label>
                    <input type="email" class="form-control" id="emailAdm" placeholder="Enter Email" name="emailAdm">
                </div>
                <div class="form-group">
                    <label for="pwd">Password :</label>
                    <input type="password" class="form-control" id="passAdm" placeholder="Enter Password" name="passAdm">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>


    </div>

    <script type="text/javascript">
      function none(){
        document.getElementById('peminjam').style.display = "none";
        document.getElementById('admin').style.display = "none";
      }
      function peminjam(){
        document.getElementById('peminjam').style.display = "block";
        document.getElementById('admin').style.display = "none";
      }

      function admin(){
        document.getElementById('admin').style.display = "block";
        document.getElementById('peminjam').style.display = "none";
      }

    </script>
  </div>
</body>
</html>7
