<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container-fluid">        
    <div class="row">

    <div class="col-md-12">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Stock</th>
                <th scope="col">Cover</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book): ?>
                <tr>
                <th scope="row"> <?= $book['id_buku'] ?> </th>
                <td><?= $book['judul'] ?></td>
                <td><?= $book['penulis'] ?></td>
                <td><?= $book['penerbit'] ?></td>
                <td><?= $book['stock'] ?></td>
                <td style="width: 10%;"> <img id="pic" width="100%" height="30%" src="<?= base_url('images/').$book['imgpath'];?>" style="object-fit: contain;"></td>
                
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    </div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>