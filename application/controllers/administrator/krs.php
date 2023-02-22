<?php

class Krs extends CI_Controller{

    public function index(){

        $data = array(
            'nim' => set_value('nim'),
            'id_thn_akad' => set_value('id_thn_akd')
        );

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/masuk_krs', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function krs_aksi(){

        $this->_rulesKrs();

        if ($this->form_validation->run() == FALSE ){
            $this->index();
        }else{

            $nim      = $this->input->post('nim', TRUE);
            $thn_akad = $this->input->post('id_thn_akad', TRUE);
        }
        
        if($this->mahasiswa_model->get_by_id($nim)==null){

            $this->session->set_flashdata('pesan','<div class="swal-log-krs" data-swal-log-krs="<?= session()->get("pesan");?></div>');
        redirect('administrator/krs');
        }

        $data = array(

            'nim' => $nim,
            'id_thn_akad' => $thn_akad,
            'nama_lengkap' => $this->mahasiswa_model->get_by_id($nim)->nama_lengkap
        );
        $dataKrs = array(
             //untuk menampilkan data krs yang akan muncul
            'krs_data' => $this->baca_krs($nim,$thn_akad),
            'nim' => $nim,
            'id_thn_akad' => $thn_akad,
            'tahun_akademik' => $this->tahunakademik_model->get_by_id($thn_akad)->tahun_akademik,
            'semester' => $this->tahunakademik_model->get_by_id($thn_akad)->semester==1?'Ganjil':'Genap',
            'nama_lengkap' => $this->mahasiswa_model->get_by_id($nim)->nama_lengkap,
            'prodi' => $this->mahasiswa_model->get_by_id($nim)->nama_prodi
            
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/krs_list', $dataKrs);
        $this->load->view('templates_administrator/footer');
    }

    public function baca_krs($nim,$thn_akad){

        $this->db->select('k.id_krs,k.kode_matakuliah,m.nama_matakuliah,m.sks');
        $this->db->from('krs as k');
        $this->db->where('k.nim',$nim);
        $this->db->where('k.id_thn_akad',$thn_akad);
        $this->db->join('matakuliah as m','m.kode_matakuliah = k.kode_matakuliah');

        $krs = $this->db->get()->result();
        return $krs;



    }
    public function _rulesKrs(){

        $this->form_validation->set_rules('nim','nim','required');
        $this->form_validation->set_rules('id_thn_akad','id_thn_akad','required');
    }

    public function tambah_krs($nim, $thn_akad){

        //menampung data yang akan diinputkan ke dalam sebuah array
        $data = array(
            'id_krs' => set_value('id_krs'),
            'id_thn_akad' => $thn_akad,
            'thn_akad_smt' => $this->tahunakademik_model->get_by_id($thn_akad)->tahun_akademik,
            'semester' => $this->tahunakademik_model->get_by_id($thn_akad)->semester==1?'Ganjil':'Genap',
            'nim' => $nim,
            'kode_matakuliah' => set_value('kode_matakuliah')

       );
        //load view
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/krs_form', $data);
            $this->load->view('templates_administrator/footer');

    }

    public function tambah_krs_aksi(){

          
        $this->_rules();

        if($this->form_validation->run() == FALSE){
             $this->tambah_krs($this->input->post('nim', TRUE),
            $this->input->post('id_thn_akad', TRUE) );

        }else{
             //input data jika betul

             $nim = $this->input->post('nim', TRUE);
             $id_thn_akad = $this->input->post('id_thn_akad', TRUE);
             $kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);

             //akan tampung data ke dalam array
             $data = array(

                 'id_thn_akad' => $id_thn_akad,
                 'nim' => $nim,
                'kode_matakuliah' => $kode_matakuliah
 
            );

             $this->krs_model->insert($data);
             //SWEET ALERT
             $this->session->set_flashdata('pesan','<div class="swal-krs-input" data-swal-krs-input="<?= session()->get("pesan");?></div>');
           redirect('administrator/krs/index');
        }
        
    }
     
    public function _rules(){

        $this->form_validation->set_rules('id_thn_akad','id_thn_akad','required');
        $this->form_validation->set_rules('nim','nim','required');
        $this->form_validation->set_rules('kode_matakuliah','kode_matakuliah','required');
       
   }
   public function update($id){
        //menampilkan data berdasarkan id
     
        $row = $this->krs_model->get_by_id($id);
        $th  = $row->id_thn_akad;

        if($row){
            $data = array(
                'id_krs' => set_value('id_krs',$row->id_krs),
                'id_thn_akad' => set_value('id_thn_akad',$row->id_thn_akad),
                'nim' => set_value('nim',$row->nim),
                'kode_matakuliah' => set_value('kode_matakuliah',$row->kode_matakuliah),
                'thn_akad_smt' => $this->tahunakademik_model->get_by_id($th)->tahun_akademik,
                'semester' => $this->tahunakademik_model->get_by_id($th)->semester==1?' Ganjil' :'Genap',

            );

            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/krs_update', $data);
            $this->load->view('templates_administrator/footer');
        }else{
            echo"Data Tidak Ada!";
        }

   }

   public function update_aksi(){
    $id_krs          = $this->input->post('id_krs', TRUE);
    $nim             = $this->input->post('nim', TRUE);
    $id_thn_akad     = $this->input->post('id_thn_akad', TRUE);
    $kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);

    $data = array(
        'id_krs'          => $id_krs,
        'id_thn_akad'     => $id_thn_akad,
        'nim'             => $nim,
        'kode_matakuliah' => $this->input->post('kode_matakuliah',TRUE)
        
    );

    $this->krs_model->update($id_krs,$data);
    //SWEET ALERT
    $this->session->set_flashdata('pesan','<div class="swal-update-krs" data-swal-update-krs="<?= session()->get("pesan");?></div>');
    redirect('administrator/krs/index');
   }
   public function delete($id){

    $where = array('id_krs' => $id);
    $this->krs_model->hapus_data($where,'krs');
    //SWEET ALERT
    $this->session->set_flashdata('pesan','<div class="swal-delete-krs" data-swal-delete-krs="<?= session()->get("pesan"); onclick="delete(<?php echo $id?>); "?></div>');
    redirect('administrator/krs/index');
}

}

       
       

        

        

       

        

   
       
