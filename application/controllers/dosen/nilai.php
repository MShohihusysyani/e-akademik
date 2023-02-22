<?php

class Nilai extends CI_Controller{

    public function index(){

        $data = array(
            'nim' => set_value('nim'),
            'id_thn_akad' => set_value('id_thn_akadd'),
        );

        $this->load->view('templates_dosen/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('dosen/masuk_khs', $data);
        $this->load->view('templates_dosen/footer');
    }

    public function nilai_aksi(){

        $this->_rulesKhs();

        if($this->form_validation->run() == FALSE){
            $this->index();

        }else{
            $nim = $this->input->post('nim', TRUE);
            $thn_akad = $this->input->post('id_thn_akad', TRUE);

            #query menampilkan nim dan ta
            $query = "SELECT krs.id_thn_akad
                            ,krs.kode_matakuliah
                            ,matakuliah.nama_matakuliah
                            ,matakuliah.sks
                            ,krs.nilai
                      FROM 
                      krs
                      INNER JOIN matakuliah
                      ON(krs.kode_matakuliah = matakuliah.kode_matakuliah)
                      WHERE krs.nim = '$nim' AND krs.id_thn_akad = '$thn_akad'";
            
            $sql = $this->db->query($query)->result();

            $smt = $this->db->select('tahun_akademik , semester')
                            ->from('tahun_akademik')
                            ->where(array('id_thn_akad' => $thn_akad))->get()->row();


            #menampilkan mahasiswa dan prodi berdasarkan id prodi
            $query_str = "SELECT mahasiswa.nim
                                ,mahasiswa.nama_lengkap
                                ,prodi.nama_prodi
                         FROM
                         mahasiswa
                         INNER JOIN prodi
                         ON(mahasiswa.nama_prodi = prodi.nama_prodi)";
            
            $mhs = $this->db->query($query_str)->row();

            #konversi semester dr int ke string
            if($smt->semester == 1){

                $tampilSemester ="Ganjil";

            }else{

                $tampilSemester = "Genap";
            }

            #array menampung  data mahasiswa dan prodi
            $data = array(
                'mhs_data'  => $sql,
                'mhs_nim'   => $nim,
                'mhs_nama'  => $this->mahasiswa_model->get_by_id($nim)->nama_lengkap,
                'mhs_prodi' => $this->mahasiswa_model->get_by_id($nim)->nama_prodi, //$mhs->nama_prodi,
                'thn_akad'  => $smt->tahun_akademik."(".$tampilSemester.")"
            );

            $this->load->view('templates_dosen/header');
            $this->load->view('templates_dosen/sidebar');
            $this->load->view('dosen/khs', $data);
            $this->load->view('templates_dosen/footer');

        }
        
    }

    public function _rulesKhs(){

        $this->form_validation->set_rules('nim','nim','required');
        $this->form_validation->set_rules('id_thn_akad','id_thn_akad','required');
        
    }

    public function input_nilai(){

        $data = array(

            'kode_matakuliah' => set_value('kode_matakuliah'),
            'id_thn_akad' => set_value('id_thn_akad'),
        );

        $this->load->view('templates_dosen/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('dosen/input_nilai_form', $data);
        $this->load->view('templates_dosen/footer');
    }

    public function input_nilai_aksi(){

        $this->_rulesInputNilai();

        if($this->form_validation->run() == FALSE){

            $this->input_nilai();
        }else{
            
            $kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);
            $id_thn_akad = $this->input->post('id_thn_akad', TRUE);

            #join table matkul dan mhs

            $this->db->select('k.id_krs,k.nim,m.nama_lengkap,k.nilai,d.nama_matakuliah');
            $this->db->from('krs as k');
            $this->db->join('mahasiswa as m','m.nim = k.nim');
            $this->db->join('matakuliah as d','k.kode_matakuliah = d.kode_matakuliah');
            $this->db->where('k.id_thn_akad', $id_thn_akad);
            $this->db->where('k.kode_matakuliah', $kode_matakuliah);
            $query = $this->db->get()->result();

            #tampung data ke array
            $data = array(
                'list_nilai'      => $query,
                'kode_matakuliah' => $kode_matakuliah,
                'id_thn_akad'     => $id_thn_akad
            );

            $this->load->view('templates_dosen/header');
            $this->load->view('templates_dosen/sidebar');
            $this->load->view('dosen/form_nilai', $data);
            $this->load->view('templates_dosen/footer');
        }
    }

    public function _rulesInputNilai(){
        $this->form_validation->set_rules('kode_matakuliah','kode_matakuliah','required');
        $this->form_validation->set_rules('id_thn_akad','id_thn_aka','required');
    }

    public function simpan_nilai(){

        $query  = array();
        $id_krs = $_POST['id_krs'];
        $nilai  = $_POST['nilai'];

        for($i=0; $i<sizeof($id_krs); $i++)
        {

            #set nilai
            $this->db->set('nilai', $nilai[$i])->where('id_krs', $id_krs[$i])->update('krs');
        }

        $data = array(
            'id_krs' => $id_krs
        );
            $this->load->view('templates_dosen/header');
            $this->load->view('templates_dosen/sidebar');
            $this->load->view('dosen/daftar_nilai', $data);
            $this->load->view('templates_dosen/footer');
    }
}