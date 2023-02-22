<?php

class Mahasiswa extends CI_Controller{

    public function index(){

        $data['mahasiswa'] = $this->mahasiswa_model->tampil_data('mahasiswa')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mahasiswa', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function detail($id){

        $data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/mahasiswa_detail', $data);
        $this->load->view('templates_administrator/footer');
    
        }

        public function tambah_mahasiswa(){
            $data['prodi'] = $this->mahasiswa_model->tampil_data('prodi')->result();
           
        
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa_form', $data);
            $this->load->view('templates_administrator/footer');
        }

        public function tambah_mahasiswa_aksi(){

            $this->_rules();
        
            if($this->form_validation->run() == FALSE){
                $this->tambah_mahasiswa();
            }else{
                
                    //$id = $this->input->post('id');
                    $nim             = $this->input->post('nim');
                    $nama_lengkap    = $this->input->post('nama_lengkap');
                    $jenis_kelamin   = $this->input->post('jenis_kelamin');
                    $tempat_lahir    = $this->input->post('tempat_lahir');
                    $tanggal_lahir   = $this->input->post('tanggal_lahir');
                    $alamat          = $this->input->post('alamat');
                    $telepon         = $this->input->post('telepon');
                    $email           = $this->input->post('email');
                    $nama_prodi      = $this->input->post('nama_prodi');
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
                        'nim'           => $nim,
                        'nama_lengkap'  => $nama_lengkap,
                        'jenis_kelamin' => $jenis_kelamin,
                        'tempat_lahir'  => $tempat_lahir,
                        'tanggal_lahir' => $tanggal_lahir,
                        'alamat'        => $alamat,
                        'telepon'       => $telepon,
                        'email'         => $email,
                        'nama_prodi'    => $nama_prodi,
                        'photo'         => $photo
        
                    );
                
        
                #insert data
                $this->mahasiswa_model->insert_data($data,'mahasiswa');
                #SWEET ALERT
                $this->session->set_flashdata('pesan','<div class="swal-mhs-input" data-swal-mhs-input="<?= session()->get("pesan");?></div>');
                redirect('administrator/mahasiswa');
        
            }
        }

            public function _rules(){

                $this->form_validation->set_rules('nim','nim','required',['required'                       => 'NIM Wajib Diisi!']);
                $this->form_validation->set_rules('nama_lengkap','nama_lengkap','required',['required'     => 'Nama Lengkap Wajib Diisi!']);
                $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required'   => 'Jenis Kelamin Wajib Diisi!']);
                $this->form_validation->set_rules('tempat_lahir','tempat_lahir','required',['required'     => 'Tempat Lahir Wajib Diisi!']);
                $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required',['required'   => 'Tanggal Lahir Wajib Diisi!']);
                $this->form_validation->set_rules('alamat','alamat','required',['required'                 => 'Alamat Wajib Diisi!']);
                $this->form_validation->set_rules('telepon','telepon','required',['required'               => 'Telepon Wajib Diisi!']);
                $this->form_validation->set_rules('email','email','required',['required'                   => 'Email Wajib Diisi!']);
                $this->form_validation->set_rules('nama_prodi','nama_prodi','required',['required'         => 'Nama Prodi Wajib Diisi!']);
                //$this->form_validation->set_rules('photo','photo','required',['required'                   => 'Photo Wajib Diisi!']);
            
        
        }

        public function update($id){
            $where = array('id' => $id);
    
            $data['mahasiswa'] = $this->db->query("select * from mahasiswa mhs, prodi prd where mhs.nama_prodi=prd.nama_prodi and mhs.id='$id'")->result();
            $data['prodi'] = $this->mahasiswa_model->tampil_data('prodi')->result();
            $data['detail'] = $this->mahasiswa_model->ambil_id_mahasiswa($id);

    
    
            $this->load->view('templates_administrator/header');
            $this->load->view('templates_administrator/sidebar');
            $this->load->view('administrator/mahasiswa_update', $data);
            $this->load->view('templates_administrator/footer');
        }

        public function update_mahasiswa_aksi(){

            $this->_rules();
        
            if($this->form_validation->run() == FALSE){
                $this->update();
            }else{
                
                    $id              = $this->input->post('id');
                    $nim             = $this->input->post('nim');
                    $nama_lengkap    = $this->input->post('nama_lengkap');
                    $jenis_kelamin   = $this->input->post('jenis_kelamin');
                    $tempat_lahir    = $this->input->post('tempat_lahir');
                    $tanggal_lahir   = $this->input->post('tanggal_lahir');
                    $alamat          = $this->input->post('alamat');
                    $telepon         = $this->input->post('telepon');
                    $email           = $this->input->post('email');
                    $nama_prodi      = $this->input->post('nama_prodi');
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
                        'nim'           => $nim,
                        'nama_lengkap'  => $nama_lengkap,
                        'jenis_kelamin' => $jenis_kelamin,
                        'tempat_lahir'  => $tempat_lahir,
                        'tanggal_lahir' => $tanggal_lahir,
                        'alamat'        => $alamat,
                        'telepon'       => $telepon,
                        'email'         => $email,
                        'nama_prodi'    => $nama_prodi,
                     
        
                    );

                    $where = array(
                        'id' => $id
                    );
                
        
                #insert data
                $this->mahasiswa_model->update_data($where,$data,'mahasiswa');
                     //SWEET ALERT
                $this->session->set_flashdata('pesan','<div class="swal-update-mhs" data-swal-update-mhs="<?= session()->get("pesan");?></div>');
                redirect('administrator/mahasiswa');
            }   
        }

        public function delete($id){

            $where = array('id' => $id);
            $this->mahasiswa_model->hapus_data($where,'mahasiswa');
          
        //Sweet Alert
            $this->session->set_flashdata('pesan','<div class="swal-delete-mhs" data-swal-delete-mhs="<?= session()->get("pesan"); onclick="delete(<?php echo $id?>); "?></div>');
            redirect('administrator/mahasiswa');
        }
}
