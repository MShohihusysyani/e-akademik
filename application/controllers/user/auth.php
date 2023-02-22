<?php 
class Auth extends CI_Controller{
    public function index(){
        $this->load->view('templates_user/header');
        $this->load->view('user/login');
        $this->load->view('templates_user/footer');
    }
    public function proses_login(){

        $this->form_validation->set_rules('username','username','required',['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password Wajib Diisi!']);
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_user/header');
            $this->load->view('user/login');
            $this->load->view('templates_user/footer');
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
                if($sess_data['level'] == 'users'){
                   
                    redirect('user/dashboard');
               
                }else{
                    $this->session->set_flashdata('pesan','<div class="swal-log" data-swal-log="<?= session()->get("pesan");?></div>');
                
                    
                    redirect('user/auth');
                }
               

            }else{
                $this->session->set_flashdata('pesan','<div class="swal-log" data-swal-log="<?= session()->get("pesan");?></div>');
                    redirect('user/auth');

            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('user/auth');
    }
}