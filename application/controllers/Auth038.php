<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth038 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth038_model');
    }

    public function login()
    {
        if($this->input->post('login') && $this->validation('login')) {
            $login=$this->auth038_model->getuser($this->input->post('username'));
            if($login != NULL) {
                if(password_verify($this->input->post('password'), $login->password_038)) {
                    $data = array (
                        'username' => $login->username_038,
                        'usertype' => $login->usertype_038,
                        'fullname' => $login->fullname_038,
                        'photo' => $login->photo_038
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');  
                }
            }
            $this->session->set_flashdata('msg','<p style="color:red">Invalid username or password !</p>');
        }
        $this->load->view('auth038/form_login_038');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth038/login');
    }

    public function changepass()
    {
        if(! $this->session->userdata('username')) redirect('auth038/login'); //Filter Login
        if($this->input->post('change') && $this->validation('change')) {
            $change=$this->auth038_model->getuser($this->session->userdata('username'));
            if(password_verify($this->input->post('oldpassword'), $change->password_038)) {
                if($this->auth038_model->changepass())
                    $this->session->set_flashdata('msg','<p style="color:green">Password succesfuly changed !</p>');
                else
                    $this->session->set_flashdata('msg','<p style="color:green">Change Password Failed !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:green">Wrong old password !</p>');
            }
        }
        $this->load->view('auth038/form_password_038');
    }

    public function changephoto()
    {
        if(! $this->session->userdata('username')) redirect('auth038/login');
        $data['error']='';
        if($this->input->post('upload')){
            if($this->upload()){
                $this->auth038_model->changephoto($this->upload->data('file_name'));
                $this->session->set_userdata('photo', $this->upload->data('file_name'));
                $this->session->set_flashdata('msg','<p style="color:green">Photo succesfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();
        }
        $this->load->view('auth038/form_photo_038',$data);
    }

    private function upload(){
        $config['upload_path']      = './uploads/users/';
        $config['allowed_types']      = 'gif|jpg|png';
        $config['max_size']      = 'max';
        $config['max_width']      = 'max';
        $config['max_height']      = 'max';

        $this->load->library('upload',$config);
        return $this->upload->do_upload('photo');
    }

    private function validation($type)
    {
        $this->load->library('form_validation');

        if($type=='login') {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        }else {
        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        }

        return $this->form_validation->run()?TRUE:FALSE;
    }
}