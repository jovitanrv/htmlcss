<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class M_Buku extends CI_Model {
    
    public function addBuku($data){
      
      $this->db->insert('buku',$data);
    }

    public function updateBuku($id,$data){
      $this->db->where('id_buku',$id);
      $this->db->set('judul',$data['judul']);
      $this->db->set('penulis',$data['penulis']);
      $this->db->set('penerbit',$data['penerbit']);
      $this->db->set('jhal',$data['jhal']);
      $this->db->set('stock',$data['stock']);
      $this->db->set('sinopsis',$data['sinopsis']);
      $this->db->update('buku');

    }

    public function deleteBuku($id){
      $this->db->where('id_buku',$id);
      $this->db->delete('buku');
    }


    public function get_all(){
      $this->db->select('*');
      $this->db->from('buku');
      $query = $this->db->get();
      return $query->result_array();
    }

    public function get_buku($id_buku){
      $this->db->select('*');
      $this->db->from('buku');
      $this->db->where('id_buku',$id_buku);
      $query = $this->db->get();
      return $query->row_array();      
    }

    public function get_buku_keyword(){
      $keyword = $this->input->post('keyword',true);
      $this->db->select('*');
      $this->db->from('buku');
      $this->db->like('judul',$keyword);
      return $this->db->get()->result_array();
    }



  }

 ?>
