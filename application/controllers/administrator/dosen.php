<?php

class Dosen extends CI_Controller{

    public function index(){

        $data['dosen'] = $this->dosen_model->tampil_data('dosen')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id){

        $data['detail'] = $this->dosen_model->ambil_id_dosen($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_detail', $data);
        $this->load->view('templates_administrator/footer');
    
        }

        public function tambah_dosen(){
            
           
        
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/dosen_form');
            $this->load->view('templates_administrator/footer');
        }

        public function tambah_dosen_aksi(){

            $this->_rules();
        
            if($this->form_validation->run() == FALSE){
                $this->tambah_dosen();
            }else{
                
                    //$id = $this->input->post('id');
                    $nidn             = $this->input->post('nidn');
                    $nama_dosen    = $this->input->post('nama_dosen');
                    $jenis_kelamin   = $this->input->post('jenis_kelamin');
                    $alamat          = $this->input->post('alamat');
                    $telp        = $this->input->post('telp');
                    $email           = $this->input->post('email');
                    $photo             = $_FILES['photo'];

                    if($photo=''){}else{
                        $config['upload_path'] = './assets/uploads';
                        $config['allowed_types'] = 'jpg|png|gif';

                        $this->load->library('upload',$config);
                        if(!$this->upload->do_upload('photo')){
                            echo"upload gagal"; die();

                        }else{
                           $photo=$this->upload->data('file_name'); 
                        }

                    }

                        
        
                    #menampung data
                    $data = array(
                        'nidn'           => $nidn,
                        'nama_dosen'  => $nama_dosen,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat'        => $alamat,
                        'telp'       => $telp,
                        'email'         => $email,
                        'photo'         => $photo
        
                    );
                
        
                #insert data
                $this->dosen_model->insert_data($data,'dosen');
                #SWEET ALERT
                $this->session->set_flashdata('pesan','<div class="swal" data-swal="<?= session()->get("pesan");?></div>');
                redirect('administrator/dosen');
        
            }
        }

            public function _rules(){

                $this->form_validation->set_rules('nidn','nidn','required',['required'                       => 'NIDN Wajib Diisi!']);
                $this->form_validation->set_rules('nama_dosen','nama_dosen','required',['required'     => 'Nama Dosen Wajib Diisi!']);
                $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required'   => 'Jenis Kelamin Wajib Diisi!']);
                $this->form_validation->set_rules('alamat','alamat','required',['required'                 => 'Alamat Wajib Diisi!']);
                $this->form_validation->set_rules('telp','telp','required',['required'               => 'Telepon Wajib Diisi!']);
                $this->form_validation->set_rules('email','email','required',['required'                   => 'Email Wajib Diisi!']);
                //$this->form_validation->set_rules('photo','photo','required',['required'                   => 'Photo Wajib Diisi!']);
            
        
        }

        public function update($id){
            $where = array('nidn' => $id);
    
           
            $data['dosen'] = $this->dosen_model->edit_data($where,'dosen')->result();
            $data['detail'] = $this->dosen_model->ambil_id_dosen($id);

    
    
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/dosen_update', $data);
            $this->load->view('templates_administrator/footer');
        }

        public function update_dosen_aksi(){

            $this->_rules();
        
            if($this->form_validation->run() == FALSE){
                $this->update();
            }else{
                
                    $id              = $this->input->post('id_dosen');
                    $nidn             = $this->input->post('nidn');
                    $nama_dosen    = $this->input->post('nama_dosen');
                    $jenis_kelamin   = $this->input->post('jenis_kelamin');
                    $alamat          = $this->input->post('alamat');
                    $telp         = $this->input->post('telp');
                    $email           = $this->input->post('email');
                    $photo             = $_FILES['userfile']['name'];

                    if($photo){
                        $config['upload_path'] = './assets/uploads';
                        $config['allowed_types'] = 'jpg|png|gif';

                        $this->load->library('upload',$config);
                        if($this->upload->do_upload('userfile')){
                            //echo"upload gagal"; die();
                            $userfile = $this->upload->data('file_name');
                            $this->db->set('photo',$userfile);

                        }else{
                           //$photo=$this->upload->data('file_name'); 
                            echo'Gagal Upload';
                        }
                    }

                    #menampung data
                    $data = array(
                        'nidn'           => $nidn,
                        'nama_dosen'  => $nama_dosen,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat'        => $alamat,
                        'telp'       => $telp,
                        'email'         => $email,
                        'photo'         => $photo
        
                    );

                    $where = array(
                        'id_dosen' => $id
                    );
                
        
                #insert data
                $this->dosen_model->update_data($where,$data,'dosen');
                     //SWEET ALERT
                     $this->session->set_flashdata('pesan','<div class="swal-update" data-swal-update="<?= session()->get("pesan");?></div>');
                redirect('administrator/dosen');
            }   
        }

        public function delete($id){

            $where = array('nidn' => $id);
            $this->dosen_model->hapus_data($where,'dosen');
          
        //Sweet Alert
          $this->session->set_flashdata('pesan','<div class="swal-delete" data-swal-delete="<?= session()->get("pesan"); onclick="delete(<?php echo $id?>); "?></div>');
            redirect('administrator/dosen');
        }
}
