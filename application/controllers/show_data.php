<?php
defined('BASEPATH') or exit('No direct script access allowed');

class show_data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('show_data_model');
        $this->load->helper('My');
    }


    public function show_all_client_data()
    {
        $post = $this->input->post();
        $post =  $post['form_value'];
        if ($this->session->userdata('id')) {
            $this->data['title'] =  $post;
            $this->data['get'] = $this->show_data_model->get_data($post);
            echo json_encode(array($this->load->view('show_data/index', $this->data)));
        } else {
            redirect(base_url() . 'admin/index');
        }
    }

}
