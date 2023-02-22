<?php

 class Tahun_akademik extends CI_Controller{

    public function index(){

        $data['tahun_akademik'] = $this->tahunakademik_model->tampil_data('tahun_akademik')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_akademik', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_tahun_akademik(){
        $data['tahun_akademik'] = $this->tahunakademik_model->tampil_data('tahun_akademik')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_akademik_form', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_tahun_akademik_aksi(){

        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_tahun_akademik();
        }else{
            
                $tahun_akademik   = $this->input->post('tahun_akademik');
                $semester         = $this->input->post('semester');
                $status           = $this->input->post('status');

                #menampung data
                $data = array(
                    'tahun_akademik' => $tahun_akademik,
                    'semester'       => $semester,
                    'status'         => $status
                );
            

            #insert data
            $this->tahunakademik_model->insert_data($data,'tahun_akademik');
           #SWEET ALERT
           $this->session->set_flashdata('pesan','<div class="swal-ta-input" data-swal-ta-input="<?= session()->get("pesan");?></div>');
            redirect('administrator/tahun_akademik');

        }
    }
    public function _rules(){

        $this->form_validation->set_rules('tahun_akademik','tahun_akademik','required',['required' => 'Tahun Akademik  Wajib Diisi!']);
        $this->form_validation->set_rules('semester','semester','required',['required'             => 'Semester Wajib Diisi!']);
        $this->form_validation->set_rules('status','status','required',['required'                 => 'Status Wajib Diisi!']);

    }

    public function update($id){
        $where = array('id_thn_akad' => $id);
        $data['tahun_akademik'] = $this->tahunakademik_model->edit_data($where,'tahun_akademik')->result();

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/tahun_akademik_update', $data);
        $this->load->view('templates_administrator/footer');
    }
    public function update_aksi(){

        $id           = $this->input->post('id_thn_akad');
        $tahun_akademik = $this->input->post('tahun_akademik');
        $semester = $this->input->post('semester');
        $status = $this->input->post('status');

        $data = array(
            'tahun_akademik' => $tahun_akademik,
            'semester'       => $semester,
            'status'         => $status
        );

        $where = array(
            'id_thn_akad' => $id
        );

        $this->tahunakademik_model->update_data($where,$data,'tahun_akademik');
         //SWEET ALERT
         $this->session->set_flashdata('pesan','<div class="swal-update-ta" data-swal-update-ta="<?= session()->get("pesan");?></div>');
        redirect('administrator/tahun_akademik');
    }

    public function delete($id){

        $where = array('id_thn_akad' => $id);
        $this->prodi_model->hapus_data($where,'tahun_akademik');
        
            //Sweet Alert
        $this->session->set_flashdata('pesan','<div class="swal-delete-ta" data-swal-delete-ta="<?= session()->get("pesan"); onclick="delete(<?php echo $id?>); "?></div>');
        redirect('administrator/tahun_akademik');
    }

 }