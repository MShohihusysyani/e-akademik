<?php 
class Auth extends CI_Controller{
    public function index(){
        $this->load->view('templates_dosen/header');
        $this->load->view('dosen/login');
        $this->load->view('templates_dosen/footer');
    }
    public function proses_login(){

        $this->form_validation->set_rules('username','username','required',['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib Diisi!']);
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_dosen/header');
            $this->load->view('dosen/login');
            $this->load->view('templates_dosen/footer');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $username;
            $pass = MD5($password);

            $cek = $this->login_model->cek_login($user, $pass);

            if($cek->num_rows() > 0){

                foreach($cek->result() as $ck){
                    $sess_data['username'] = $ck->username;
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);

                    
                }
                if($sess_data['level'] == 'dosen'){
                   
                    redirect('dosen/dashboard');
               
                }else{
                    $this->session->set_flashdata('pesan','<div class="swal-log" data-swal-log="<?= session()->get("pesan");?></div>');
                
                    
                    redirect('dosen/auth');
                }
               

            }else{
                $this->session->set_flashdata('pesan','<div class="swal-log" data-swal-log="<?= session()->get("pesan");?></div>');
                    redirect('dosen/auth');

            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('dosen/auth');
    }
}