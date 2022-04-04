<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories038 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth038/login');
		$this->load->model('categories038_model');
	}

	public function index()
	{
		$data['categ']=$this->categories038_model->read();
		$this->load->view('categories/categories_list',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->categories038_model->create();
			if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('msg','<p style="color:green;">successfully added </p><br>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red;">failed add </p><br>');
			}
			redirect('categories038');
		}

		$this->load->view('categories/categories_form');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->categories038_model->update($id);
			if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('msg','<p style="color:green;">successfully updated </p><br>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red;">failed update </p><br>');
			}
			redirect('categories038');
		}
		$data['cat']=$this->categories038_model->read_by($id);
		$this->load->view('categories/categories_form',$data);
	}

	public function delete($id)
	{
		$this->categories038_model->delete($id);
		if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('msg','<p style="color:green;">successfully deleted </p><br>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:green;">failed delete </p><br>');
			}
		redirect('categories038');
	}
}
