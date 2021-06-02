<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pjmController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('pjmModel');
        $this->load->model('M_Pinjam');
    }

    public function index() {
        // $data['judul'] = 'Beranda';
        // $this->load->view('headerPjm',$data);
        $this->load->view('homePeminjam');
    }

    public function login() {
        $this->load->view('login');
    }

    public function pageRegis() {
        $this->load->view('regisPeminjam');
    }

    public function cariBuku() {
        // $data['judul'] = 'Pencarian';
        // $this->load->view('headerPjm',$data);
        $this->load->view('halPencarian');
    }

    public function pageProfil() {
        $data['judul'] = 'Profil';
        $data['dataAkun'] = $this->session->userdata('sessPjm');
        
        //get data buku join yang dipinjam
        $email = $data['dataAkun']['emailPjm'];
        $data['buku'] = $this->M_Pinjam->getbukujoin($email);
        $this->load->view('profile', $data);
    }

    public function pageEdit() {
        $this->load->view('ubahProfilPjm');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('pjmController/login');
    }


    public function regisPeminjam() {
        $this->form_validation->set_rules('namaPjm','Nama','required');
        $this->form_validation->set_rules('emailPjm','Alamat','required');
        $this->form_validation->set_rules('alamatPjm','Email','required');
        $this->form_validation->set_rules('passPjm','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('regisPeminjam');
        } else {
            $this->pjmModel->addPeminjam();
            redirect('pjmController/login');
        }
    }

    public function loginPeminjam() {
        $this->form_validation->set_rules('emailPjm','email','required');
        $this->form_validation->set_rules('passPjm','password','required');
        $emailPjm = $this->input->post('emailPjm');

        if ($this->form_validation->run()) {
            $dataPjm = $this->pjmModel->getPeminjamByEmail($emailPjm);
            // cari akun sesuai email
            if ($dataPjm) {
                $passPjm = $this->input->post('passPjm');
                // pass benar
                if ($dataPjm['passPjm'] == $passPjm) {
                    $sess_data = array(
                        'namaPjm' => $dataPjm['namaPjm'],
                        'emailPjm' => $dataPjm['emailPjm'],
                        'alamatPjm' => $dataPjm['alamatPjm'],
                        'passPjm' => $dataPjm['passPjm']
                    );
                    $this->session->set_userdata('sessPjm',$sess_data);
                    redirect('pjmController');
                    // $this->load->view('homePeminjam',$dataAkun);

                }
                // pass salah
                else {
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert" style="width=30px;">
        <b>Email/Password salah!</b>
        </div>');
                    redirect('pjmController/login');
                }
            }
            // email salah
            else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert" style="width=30px;">
                <b>Email/Password salah!</b>
                </div>');
                redirect('pjmController/login');
            }
        }
        else {
            redirect('pjmController/login');
        }
    }

    public function editPeminjam() {
        $dataAkun = $this->session->userdata('sessPjm');

        $this->form_validation->set_rules('namaPjm','Nama','required');
        $this->form_validation->set_rules('emailPjm','Email','required');
        $this->form_validation->set_rules('alamatPjm','Alamat','required');
        $this->form_validation->set_rules('passPjm','Password','required');

        if ($this->form_validation->run()) {
            $new = array(
                "namaPjm" => $this->input->post('namaPjm',true),
                "emailPjm" => $this->input->post('emailPjm',true),
                "alamatPjm" => $this->input->post('alamatPjm',true),
                "passPjm" => $this->input->post('passPjm',true)
            );
            $this->pjmModel->editPeminjam($dataAkun['emailPjm'],$new);
            redirect('pjmController');
 
        } else {
            redirect('pjmController/pageEdit');
        }
    }
}
?>