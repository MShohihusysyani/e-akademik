<?php

class Transkrip_model extends CI_model{

    public $table = 'transkrip_nilai';
    public $id = 'id_transkrip';

    #function insert
    public function insert($data){
        
        $this->db->insert($this->table, $data);
    }

    public function update($id,$data){

        $this->db->where($this->id,$id);
        $this->db->update($this->table, $data);
    }
}