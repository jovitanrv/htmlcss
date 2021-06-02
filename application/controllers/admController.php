<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('admModel');
    }

    public function index() {
        $data['title'] = "Home Admin";
        $this->load->view('crudAdm/header',$data);
        $this->load->view('homeAdmin');
    }

    public function pageRegis() {
        $this->load->view('regisAdmin');
    }
    public function listBuku() {
        $this->load->view('daftarBuku');
    }

    public function editAkun() {
        $this->load->view('akunAdmin');
    }

    // public function pageEdit() {
    //     $this->load->view('akunAdmin');
    // }

    public function logout() {
        $this->session->sess_destroy();
        redirect('pjmController/login');
    }

    public function regisAdmin() {
        $this->form_validation->set_rules('namaAdm','Nama','required');
        $this->form_validation->set_rules('emailAdm','Alamat','required');
        $this->form_validation->set_rules('alamatAdm','Email','required');
        $this->form_validation->set_rules('passAdm','Password','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('regisAdmin');
        } else {
            $this->admModel->addAdmin();
            redirect('pjmController/login');
        }
    }

    public function loginAdmin() {
        $this->form_validation->set_rules('emailAdm','email','required');
        $this->form_validation->set_rules('passAdm','password','required');
        $emailAdm = $this->input->post('emailAdm');

        if ($this->form_validation->run()) {
            $dataAdm = $this->admModel->getAdminByEmail($emailAdm);
            // cari akun sesuai email
            if ($dataAdm) {
                $passAdm = $this->input->post('passAdm');
                // pass benar
                if ($dataAdm['passAdm'] == $passAdm) {
                    $sess_data = array(
                        'namaAdm' => $dataAdm['namaAdm'],
                        'emailAdm' => $dataAdm['emailAdm'],
                        'alamatAdm' => $dataAdm['alamatAdm'],
                        'passAdm' => $dataAdm['passAdm']
                    );
                    $this->session->set_userdata('sessAdm',$sess_data);
                    redirect('admController');
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

    public function editAdmin() {
        $dataAkun = $this->session->userdata('sessAdm');

        $this->form_validation->set_rules('namaAdm','Nama','required',[
            'required' => 'masuuk'
        ]);
        $this->form_validation->set_rules('emailAdm','Email','required');
        $this->form_validation->set_rules('alamatAdm','Alamat','required');

        if ($this->form_validation->run()) {
            $new = array(
                "namaAdm" => $this->input->post('namaAdm',true),
                "emailAdm" => $this->input->post('emailAdm',true),
                "alamatAdm" => $this->input->post('alamatAdm',true),
            );
            $this->admModel->editAdmin($dataAkun['emailAdm'],$new);

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert" style="width=30px;">
        <b>Ubah data profil sukses!</b>
        </div>');

            redirect('admController/editAkun');

        } else {
            redirect('admController/editAkun');
        }
    }
}
?>
