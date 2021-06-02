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
            <form method="POST" action="<?= base_url('crud_book_C/delbookV'); ?>" enctype="multipart/form-data" accept-charset="UTF-8">
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="did" name="did" placeholder="Cari ID" aria-label="Cari ID" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="dsearch" name="dsearch">Cari</button>

                    </div>
            </div>

            </form>  
            <?= $this->session->flashdata('message');?>  
            </center>
            </div>
        </div>


        <div class="row">
            <div class="col-md-2" style="margin-left: 5%;">
                <img width="100%" height="100%" src="<?= base_url('images/').$book['imgpath'] ?>" style="object-fit: contain;">
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row" style="background-color: #cce6ff; border-radius: 5px;">
                        <div class="col-md-6" style="padding-top: 2%; padding-bottom: 2%;">
                        
                        <form method="POST" action="<?= base_url('crud_book_C/delbook'); ?>" enctype="multipart/form-data" accept-charset="UTF-8">
                        <input type="text" class="form-control" id="djudul" name="djudul" placeholder="Judul" readonly style="margin-left: 10%; width: 81%; margin-bottom: 3%;" value="<?= $book['judul'] ?>">
                        <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('ejudul'); ?> </font></div>

                        <input type="text" class="form-control" id="dpenulis" name="dpenulis" placeholder="Penulis" readonly style="margin-left: 10%; width: 81%; margin-bottom: 3%;" value="<?= $book['penulis'] ?>">
                        <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('epenulis'); ?> </font></div>
                        
                        <input type="text" class="form-control" id="dpenerbit" name="dpenerbit" placeholder="Penerbit" readonly style="margin-left: 10%; width: 81%; margin-bottom: 3%;" value="<?= $book['penerbit'] ?>">
                        <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('epenerbit'); ?> </font></div>

                        <input type="number" class="form-control" id="djhal" name="djhal" placeholder="Jumlah Halaman" readonly style="margin-left: 10%; width: 81%; margin-bottom: 3%;" value="<?= $book['jhal'] ?>">
                        <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('ejhal'); ?> </font></div>
                        
                        <input type="number" class="form-control" id="dstock" name="dstock" placeholder="Jumlah Stock" readonly style="margin-left: 10%; width: 81%; margin-bottom: 3%;" value="<?= $book['stock'] ?>">
                        <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('estock'); ?> </font></div>    
                    
                    </div>


                        <div class="col-md-6" style="padding-top: 2%; padding-bottom: 2%;">
                        
                        <label for="exampleFormControlFile1" style="margin-left: 5%;">Sinopsis</label>
                        <textarea class="form-control" id="dsinopsis" name="dsinopsis" rows="6" readonly style="margin-left: 4%; width: 80%;">
                        <?= $book['sinopsis'] ?>
                        </textarea>
                        
                        <button type="submit" class="btn btn-danger" style="margin-top: 5%; margin-left: 4%;" onclick="return confirm('hapus buku?');"> Hapus </button>
                        </form>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>