<?php

class Transkrip_nilai extends CI_Controller{

    public function index(){

        $data = array(
            'nim' => set_value('nim')
        );
        
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/masuk_transkrip', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function buat_transkrip_aksi(){

        $this->_rulesTranskrip();

        if($this->form_validation->run() == FALSE){
            $this->index();

        }else{

            $nim = $this->input->post('nim', TRUE);

            #UNTK MENGAMBIL DATA KRS
            $this->db->select('*');
            $this->db->from('krs');
            $this->db->where('nim',$nim);
            $query = $this->db->get();

            foreach($query->result() as $value){

                #pengecakan nilai di data krs
                cekNilai($value->nim,$value->kode_matakuliah,$value->nilai);
            }

            #menampilkan data mata kuliah
            $this->db->select('t.kode_matakuliah,m.nama_matakuliah,m.sks,t.nilai');
            $this->db->from('transkrip_nilai as t');
            $this->db->where('nim', $nim);
            #join dengan matkul
            $this->db->join('matakuliah as m','m.kode_matakuliah = t.kode_matakuliah');

            $transkrip = $this->db->get()->result();

            #query untuk menampilkan data mahasiswa
            $mhs = $this->db->select('nama_lengkap, nama_prodi')
                            ->from('mahasiswa')
                            ->where(array('nim' => $nim))
                            ->get()->row();

           
            #query untuk menampilkan data prodi
            $prodi = $this->db->select('nama_prodi')
                          ->from('prodi')
                          ->where(array('nama_prodi' => $mhs->nama_prodi))
                          ->get()->row()->nama_prodi;

            #menampung semua data
            $data = array(
                'transkrip' => $transkrip,
                'nim'       => $nim,
                'nama'      => $mhs->nama_lengkap,
                'prodi'     => $prodi
            );

            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/data_transkrip', $data);
            $this->load->view('templates_administrator/footer');
        }
    }

    public function _rulesTranskrip(){
        
        $this->form_validation->set_rules('nim','NIM','required',['required' => 'NIM Wajib Diisi!']);
    }
}