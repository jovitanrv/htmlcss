
<div>
<?php $dataa = $this->session->userdata('sessAdm'); ?>
    <div style="margin-left: 5%;">
            halo admin  <?= $dataa['namaAdm']; ?>
        </div>
<div>
    <center>

        <a href="<?php echo site_url('crud_book_C/addBookV'); ?>" style="color: white;"><button class="adm_button">Tambah</button></a>
        <a href="<?php echo site_url('crud_book_C/editbookV'); ?>" style="color: white;"><button class="adm_button">Ubah</button></a> <br>
        <a href="<?php echo site_url('crud_book_C/delbookV'); ?>" style="color: white;"><button class="adm_button">Hapus</button></a>
        <a href="<?php echo site_url('crud_book_C/viewbookV'); ?>" style="color: white;"><button class="adm_button">Daftar Buku</button></a> <br>
        <a href="<?php echo site_url('crud_book_C/retbookV'); ?>" style="color: white;"><button class="adm_button">Pengembalian Buku</button></a>
    </center>
    </div>
</body>
</html>
