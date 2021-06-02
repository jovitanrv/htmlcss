<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
    $dat = "3.jpg";
?>
    <div class="container-fluid">

        <!-- search bar -->
        <div class="row" style="margin-bottom: 4%;">
            <div class="col-md-9" style="padding-left: 25%;" >
            <center>
            <form method="POST" action="<?= base_url('crud_book_C/retbookV'); ?>" enctype="multipart/form-data" accept-charset="UTF-8">
            
            <div class="input-group mb-3">
                <input type="email" class="form-control" id="remail" name="remail" placeholder="Email Peminjam" aria-label="Cari ID" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="search" name="search">Cari</button>

                    </div>
            </div>

            </form>  
            <?= $this->session->flashdata('message');?>  
            </center>
            </div>
        </div>

        <div class="row">
            <table class="table table-hover" style="margin : 2px 5px 2px 5px ; border-radius: 5px;">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- foreach here -->
                    <?php 
                    if ($books!=null) {
                    if($books[0]['judul']){ ?>

                    <?php foreach($books as $book): ?>
                    <tr>
                    <td style="width: 10%;"> <img id="pic" width="100%" height="30%" src="<?= base_url('images/').$book['imgpath'] ?>" style="object-fit: contain;"></td>
                    <td class="align-middle"> <?= $book['judul']  ?> </td>
                    <td class="align-middle"> <?= $book['tgl_pinjam']  ?> </td>
                    <td class="align-middle"> <?= $book['tgl_kembali']  ?> </td>
                    <td class="align-middle"> 
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal<?= $book['id_pinjam']  ?> ">Kembalikan  </button>
                    </td>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $book['id_pinjam']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $book['judul']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"><img id="pic" width="100%" height="100%" src="<?= base_url('images/').$book['imgpath'] ?>" style="object-fit: fill;"></div>
                <div class="col-md-4">
                    <div class="container-fluid">
                        <?php 
                            // $now = date("2019-12-20");
                            $now = date("Y-m-d");
                            $date1 = date_create($book['tgl_kembali']);
                            $date2 = date_create($now);

                            $diff = date_diff($date1, $date2);

                            $intrv = $diff->format("%R%a");

                            $beda = (int)$intrv;
                            $denda = 0;
                            if($beda<7){
                                $intrv = "0";
                            }
                            else{
                                $intrv2 = $diff->format("%a");
                                $denda = 5000*$intrv2;
                            }

                        ?>

                        <div class="row" style="width: 180%; font-size: 13px;">
                            <div class="col-lg-12">
                            Tanggal Kembali yang ditetapkan : <?= $book['tgl_kembali']  ?>
                            </div>
                        </div>
                        <div class="row" style="width: 180%; margin-top: 5px; font-size: 13px;">
                            <div class="col-lg-12">
                            Tanggal Pengembalian : <?= $now  ?>
                            </div>
                        </div>
                        <div class="row" style="width: 250%; margin-top: 7px; font-size: 13px;">
                            <div class="col-lg-12">
                            Keterlambatan : <?= $intrv ?> hari
                            </div>
                        </div>
                        <div class="row" style="width: 250%; margin-top: 7px; font-size: 13px;">
                            <div class="col-lg-12">
                            Denda : Rp. <?= number_format($denda); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-4"> </div>
                <div class="col-md-4">keterlambatan</div>
                <div class="col-md-4"> </div>
            </div> -->

        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form action="<?= base_url('crud_book_C/returnbook/').$book['id_pinjam']?>">
            <button type="submit" class="btn btn-primary" onclick="return alert('Pengembalian Berhasil');">Konfirmasi</button>
        </form>
    </div>
    </div>
  </div>
</div>

                    
                    
                    </tr>
                    <?php endforeach ?>
                    <?php }
                    
                    else { ?>
                

                            <tr>
                            <td colspan="5" align="center">not found</td>
                            </tr>
                    <?php } }
                        else { ?>
                            <tr>
                                <td colspan="5" align="center">not found</td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>                        




    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>