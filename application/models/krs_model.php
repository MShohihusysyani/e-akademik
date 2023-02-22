<?php

class Krs_model extends CI_model{

    public $table = 'krs';
    public $id = 'id_krs';

    public function insert($data){

        $this->db->insert($this->table, $data); 

    }
    Public function update($id,$data){

        $this->db->where($this->id,$id);
        $this->db->update($this->table,$data);
    }
    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_by_id($id){

        $this->db->where($this->id,$id);
        return $this->db->get($this->table)->row();
    }
}