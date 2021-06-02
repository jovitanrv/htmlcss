<?php

class testing extends CI_Controller {
    public function index() {
        $this->load->library('unit_test');
        $this->load->model('M_Pinjam');
        $this->load->model('M_Buku');

        $test = $this->pinjam_test();
        $expected = TRUE;
        $test_name = 'Peminjaman';
        echo $this->unit->run($test,$expected,$test_name);
    }

    public function pinjam_test() {
        $data = $this->session->userdata('borrow');

        $brw = array(
            "emailPjm" => $data['emailPjm'],
            "id_buku" => $data['id_buku'],
            "tgl_pinjam" => $data['tgl_pinjam'],
            "tgl_kembali" => $data['tgl_kembali'],
            "status" => "1"
        );
        $check = $this->M_Pinjam->cekPinjam($data['id_buku'],$data['emailPjm']);

        if($check){
            //true jika sudah pernah pinjam sebelumnya
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert" style="width=30px;">
            <b>Buku sudah anda pinjam dan belum dikembalikan!</b>
            </div>');
            $konf['buku'] = $this->M_Buku->get_buku($data['id_buku']);
          
        }

        else{

            $book = $this->M_Buku->get_buku($data['id_buku']);

            if ($book['stock']==0){
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert" style="width=30px;">
                <b>Buku tidak tersedia, tidak bisa dipinjam!</b>
                </div>');
                $konf['buku'] = $this->M_Buku->get_buku($data['id_buku']);
            
            }
            else{
                $this->M_Pinjam->redStock($data['id_buku']);
                $this->M_Pinjam->addPinjam($brw);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert" style="width=30px;">
                <b>Peminjaman Berhasil!</b></div>');
                $konf['buku'] = $this->M_Buku->get_buku($data['id_buku']);
                return TRUE;
            }
        }
        return TRUE;
    }
}

?>