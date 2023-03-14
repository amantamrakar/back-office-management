<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Admin_model');
	}


	function index()
	{
		$this->load->view('Login_page');
	}

	function login_validation()
	{

		$validation  = array(
			array(
				'field' => 'txt_email',
				'label' => 'Email',
				'rules' => 'required|min_length[10]|trim'
			),
			array(
				'field' => 'txt_password',
				'label' => 'Password',
				'rules' => 'required|max_length[10]|trim'
			)
		);

		$this->form_validation->set_rules($validation);
		if ($this->form_validation->run($validation) ==  FALSE) {
			$this->index();
		} else {
			$this->load->model('Admin_model');
			$data = $this->input->post();
			$data_array = array(
				'email' => $data['txt_email'],
				'password' => $data['txt_password']
			);
			$check = $this->Admin_model->Login_data_check($data_array);
			if ($check) {
				$session_data = array(
					'name' => $check['username'],
					'id' => $check['id'],
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid Crdentials');
				redirect(base_url() . 'admin/index');
			}
		}
	}

	function dashboard()
	{
		if ($this->session->userdata('id') != '') {
			$session_name = $this->session->userdata('name');
			$session_id = $this->session->userdata('id');
			$session_data = array(
				'session_name' => $session_name,
				'session_id' => $session_id
			);
			$this->session->set_userdata($session_data);
			$this->load->view('modules/nav_bar', $session_data);
			$this->load->view('dashboard');
		} else {
			redirect(base_url() . 'admin/index');
		}
	}

	

	function logout()
	{
		$this->session->unset_userdata('id');
		redirect(site_url() . 'admin/index');
	}
}
