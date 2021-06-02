<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <div class="container">
        
        <div style="background-color: #cce6ff; width: 50%; margin-left: 25%; border-radius: 15px;">
            <!-- form here -->
            <?= $this->session->flashdata('message');?>

            <form method="POST" action="<?= site_url('crud_book_C/addBook'); ?>" enctype="multipart/form-data" accept-charset="UTF-8">
                <div class="form-group" style="padding-top: 8%;">
                    <input type="text" class="form-control" id="vidbook" name="vidbook" placeholder="ID" style="margin-left: 10%; width: 81%;">
                    <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('vidbook'); ?> </font></div>
                    
                </div>
                
                <div class="form-group" style="padding-top: 2%;">
                    <input type="text" class="form-control" id="vjudul" name="vjudul" placeholder="Judul" style="margin-left: 10%; width: 81%;">
                    <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('vjudul'); ?> </font></div>
                </div>
                
                <div class="form-group" style="padding-top: 2%;">
                    <input type="text" class="form-control" id="vpenulis" name="vpenulis" placeholder="Penulis" style="margin-left: 10%; width: 81%;">
                    <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('vpenulis'); ?> </font></div>
                </div>

                <div class="form-group" style="padding-top: 2%;">
                    <input type="text" class="form-control" id="vpenerbit" name="vpenerbit" placeholder="Penerbit" style="margin-left: 10%; width: 81%;">
                    <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('vpenerbit'); ?> </font></div>
                </div>
                
                <div class="form-group" style="padding-top: 2%;">
                    <input type="number" class="form-control" id="vjhal" name="vjhal" placeholder="Jumlah Halaman" style="margin-left: 10%; width: 81%;">
                    <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('vjhal'); ?> </font></div>
                </div>

                <div class="form-group" style="padding-top: 2%;">
                    <input type="number" class="form-control" id="vstock" name="vstock" placeholder="Jumlah Ketersediaan" style="margin-left: 10%; width: 81%;">
                    <div style="padding-left : 11%;"><font color="red" size="2px"> <?= form_error('vstock'); ?> </font></div>
                </div>

                
                <div class="form-group" style="padding-top: 2%;">
                    <label for="exampleFormControlFile1" style="margin-left: 10%;"s>Sinopsis</label>
                    <textarea class="form-control" id="vsinopsis" name="vsinopsis" rows="7" style="margin-left: 10%; width: 80%;"></textarea>
                </div>

                <div class="form-group" style="padding-top: 2%;">
                        <label for="exampleFormControlFile1" style="margin-left: 10%;"s>Cover Buku</label>
                        <input type="file" class="form-control-file" id="vcover" name="vcover" style="margin-left: 10%;">
                <div style="padding-bottom: 2%; margin-top: 2%;">
                    <button type="reset" class="btn btn-secondary" style="width: 15%; height: 8%; margin-left: 10%;">Reset</button>
                    <button type="submit" class="btn btn-primary" style="width: 15%; height: 8%; margin-left: 4%;">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>