<?php
defined('BASEPATH') OR exit('No direct script allowed');

class pjmModel extends CI_Model {
    public function addPeminjam() {
        $data = array(
            "namaPjm" => $this->input->post('namaPjm',true),
            "emailPjm" => $this->input->post('emailPjm',true),
            "alamatPjm" => $this->input->post('alamatPjm',true),
            "passPjm" => $this->input->post('passPjm',true)
        );

        $this->db->insert('peminjam',$data);
    }

    public function getPeminjamByEmail($emailPjm) {
        $this->db->select('*');
        $this->db->from('peminjam');
        $this->db->where('emailPjm',$emailPjm);
        $query = $this->db->get();
        return $query->row_array();
    }

    

    public function editPeminjam($emailPjm,$new) {
        $this->db->where('emailPjm',$emailPjm);
        $this->db->update('peminjam',$new);
    }
}

?>
