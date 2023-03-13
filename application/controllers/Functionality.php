<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Functionality extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('functionality_model');
        $this->load->helper('My');
    }


    public function Table()
    {
        $post = $this->input->post();
        $post =  $post['form_value'];
        if ($this->session->userdata('id')) {
            $this->data['title'] =  $post;
            $this->data['get'] = $this->functionality_model->get_data($post);
            echo json_encode(array($this->load->view('functionality/index', $this->data)));
        } else {
            redirect(base_url() . 'admin/index');
        }
    }
    public function update_modal()
    {
        $post = $this->input->post();
        $update_id = $post['client_id'];
        $form = $post['form_type'];
        if ($this->session->userdata('id')) {
            $this->data['title'] = $form;
            $this->data['client_id'] = $update_id;
            $this->data['get_data'] = $this->functionality_model->get_client_data($form, $update_id);
            echo json_encode(array($this->load->view('functionality/update_page', $this->data)));
        } else {
            redirect(base_url() . 'admin/index');
        }
    }
    public function update_all_form()
    {
        $post = $this->input->post();
        if ($this->session->userdata('id')) {
            $id = $post['update_id'];
            $table_name = $post['table_type'];
            $data = array_splice($post,2);
            $update = $this->functionality_model->update_my_forms($table_name,$id,$data);
            if($update){
                echo json_encode(array('status'=> true,'message'=>'Successfully Update'));
            }else{
                echo json_encode(array('status'=> false,'message'=>'Data Not Update'));
            }
        } else {
            redirect(base_url() . 'admin/index');
        }
    }
}
