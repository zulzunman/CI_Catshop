<?php
defined('BASEPATH') || exit('No direct script access allowed');
class Users038 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth038/login');
		if($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$this->load->model('users038_model');
	}

	public function index()
	{
		$data['users']=$this->users038_model->read();
		$this->load->view('users038/user_list038',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->users038_model->create();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">User succesfuly added !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">User add failed !</p>');
			}
			redirect('users038');
		}

		$this->load->view('users038/user_form038');
	}

	public function edit($userid)
	{
		if($this->input->post('submit')) {
			$this->users038_model->update($userid);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:blue">User succesfuly updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">User update failed !</p>');
			}
			redirect('users038');
		}

		$data['user']=$this->users038_model->read_by($userid);
		$this->load->view('users038/user_form038',$data);
	}

	public function delete($userid)
	{
		$this->users038_model->delete($userid);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:purple">User succesfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">User delete failed !</p>');
		}
		redirect('users038');
	}
	public function reset($type)
    {
        $this->users038_model->reset($type);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','<p  style="color:green">Password Succesfully Reseted</p>');
		}else{
			$this->session->set_flashdata('msg','<p  style="color:red">Password reset failed</p>');
		}
		redirect('Users038');
    }
}
