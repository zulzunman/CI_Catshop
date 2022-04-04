<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats038 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth038/login');
		$this->load->model('Cats038_model');
		$this->load->model('categories038_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('cats038/index');
		$config['total_rows'] = $this->db->count_all('cats038');
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$limit=$config['per_page'];
		$start=$this->uri->segment(3)?$this->uri->segment(3):0;

		$data['i']=$start+1;
		$data['cats']=$this->Cats038_model->read($limit,$start);
		$this->load->view('cats038/cat_list038',$data);
	}

	public function add()
	{
		if($this->input->post('submit')) {
			$this->Cats038_model->create();
			if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('msg','<p style="color:green;">Cat successfully added </p><br>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red;">Cat failed add </p><br>');
			}
			redirect('cats038');
		}
		$data['category']=$this->categories038_model->read();
		$this->load->view('cats038/cat_form038', $data);
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Cats038_model->update($id);
			if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('msg','<p style="color:green;">Cat successfully updated </p><br>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red;">Cat failed update </p><br>');
			}
			redirect('cats038');
		}
		$data['category']=$this->categories038_model->read();
		$data['cat']=$this->Cats038_model->read_by($id);
		$this->load->view('cats038/cat_form038',$data);
	}

	public function delete($id)
	{
		$this->Cats038_model->delete($id);
		if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('msg','<p style="color:green;">Cat successfully deleted </p><br>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:green;">Cat failed delete </p><br>');
			}
		redirect('cats038');
	}
	public function sale ($id)  {
		if($this->input->post('submit')) {
			$this->Cats038_model->sale($id);
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> sold! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> failed! </p>');
			}
			redirect('cats038');
		}
		$data['cat']=$this->Cats038_model->read_by($id);
		$this->load->view('cats038/cat_sale038', $data);
	}

	public function sales() {
		if($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$data['sales']=$this->Cats038_model->sales();
		$this->load->view('cats038/sale_list038',$data);
	}
}
