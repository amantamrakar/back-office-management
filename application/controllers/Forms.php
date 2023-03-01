<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forms extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id')) {
			if ($this->session->userdata('id') != '') {
				$session_name = $this->session->userdata('name');
				$session_id = $this->session->userdata('id');
				$session_data = array(
					'session_name' => $session_name,
					'session_id' => $session_id
				);
			} else {
				redirect(base_url() . 'admin/index');
			}
		}
	}

	public function all_form_structure()
	{

		if ($this->session->userdata('id')) {
			if ($this->session->userdata('id') != '') {
				$session_name = $this->session->userdata('name');
				$session_id = $this->session->userdata('id');
				$session_data = array(
					'session_name' => $session_name,
					'session_id' => $session_id
				);
				$this->session->set_userdata($session_data);
				$this->load->view('modules/nav_bar', $session_data);
				$this->load->view('modules/nav_menu');
				$this->data['data'] = 'LUMPSUM';
				$this->load->view('Form/index', $this->data);
			} else {
				redirect(base_url() . 'admin/index');
			}
		} else {
			redirect(base_url() . 'admin/index');
		}
	}

	public function LUMPSUM()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'LUMPSUM';
			echo json_encode(array($this->load->view('Form/index', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function SIP()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'SIP';
			echo json_encode(array($this->load->view('Form/sip', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function REDEMPTION()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'REDEMPTION';
			echo json_encode(array($this->load->view('Form/redemption', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function SWITCH()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'SWITCH';
			echo json_encode(array($this->load->view('Form/switch', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function STP()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'STP';
			echo json_encode(array($this->load->view('Form/stp', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function SWP()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'SWP';
			echo json_encode(array($this->load->view('Form/swp', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function SIP_STOP()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'SIP-STOP';
			echo json_encode(array($this->load->view('Form/sip_stop', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function STP_STOP()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'STP-STOP';
			echo json_encode(array($this->load->view('Form/stp_stop', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function SWP_STOP()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'SWP-STOP';
			echo json_encode(array($this->load->view('Form/swp_stop', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
	public function COB()
	{
		if ($this->session->userdata('id')) {
			$this->data['data'] = 'COB';
			echo json_encode(array($this->load->view('Form/cob', $this->data)));
		} else {
			redirect(base_url() . 'admin/index');
		}
	}

	public function Form_Submition()
	{
		$this->load->model('Form_model');
		$data = $this->input->post();
		$task  = $this->input->post('YmFzZTY0IGRlY29kZXI=');
		$task = base64_decode($task);
		$data_array = [];
		switch ($task) {
			case 'LUMPSUM':
				array_shift(($data));
				array_pop(($data));
				// echo my_arr($data);
				// die();
				$this->Form_model->form_submit($data, $task);
				break;
			case 'SIP':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'REDEMPTION':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'SWITCH':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'STP':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'SWP':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'SIP-STOP':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'STP-STOP':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'SWP-STOP':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
			case 'COB':
				array_shift(($data));
				array_pop(($data));
				$this->Form_model->form_submit($data, $task);
				break;
		}
	}
	public function bluk_upload()
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
			$this->load->view('bluck_upload/index');
		} else {
			redirect(base_url() . 'admin/index');
		}
	}

	public function Excel_import()
	{
		if ($this->session->userdata('id') != '') {
			$this->load->model('UploadExcel');
			$table = $this->input->post('excel_type');
			$file = $_FILES['excel_file']['name'];
			$extenstion = pathinfo($file,PATHINFO_EXTENSION);
			if($extenstion == 'xls'){
				$reader =  new\PhpOffice\PhpSpreadsheet\Reader\Xls();
			}elseif($extenstion == 'xlsx'){
				$reader =  new\PhpOffice\PhpSpreadsheet\Reader\xlsx();
			}

			$spreadsheet = $reader->load($_FILES['excel_file']['tmp_name']);
			$sheetdata = $spreadsheet->getActiveSheet()->toArray();
			$excel_data = array();
			for ($i=2; $i < count($sheetdata) ; $i++) { 
				array_push($excel_data,$sheetdata[$i]);
			}
			
			$this->UploadExcel->UploadExcelFile($excel_data,$table);

			 

			
		} else {
			redirect(base_url() . 'admin/index');
		}
	}
}
