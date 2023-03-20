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
            $data = array_splice($post, 2);
            // echo my_arr($data);
            // die();
            $update = $this->functionality_model->update_my_forms($table_name, $id, $data);
            if ($update) {
                echo json_encode(array('status' => true, 'message' => '' . $table_name . ' Successfully Update' , 'class' => 'bg-success'));
            } else {
                echo json_encode(array('status' => false, 'message' => '' . $table_name . ' Not Update' , 'class' => 'bg-danger'));
            }
        } else {
            redirect(base_url() . 'admin/index');
        }
    }
    public function filteration()
    {
        if ($this->session->userdata('id')) {
            $post = $this->input->post();
            $table_name = $post['excel_name'];
            $id = $post['client_name'];
            $data = array(
                'first_date' => $post['first_date'],
                'second_date' => $post['second_date'],
                'client_name' => $post['client_name'],
                'reject_status' => $post['reject_status'],
                'rm_name' => $post['rm_name'],
                'scheme_name' => $post['scheme_name']
            );
            // $rejection = $this->functionality_model->check_reject($table_name,$id);
            // echo my_arr($rejection);
            // die();
            // $this->fetch = ;
            $this->fetch['title'] = $table_name;
            $this->fetch['data'] = $this->functionality_model->get_filtered_data($table_name, $data);
            echo json_encode(array($this->load->view('filter_data/filtered_view.php', $this->fetch)));
        } else {
            redirect(base_url() . 'admin/index');
        }
    }
    public function client_list()
    {
        if ($this->session->userdata('id')) {
            $table_name = $this->input->post('name');
            $tag = '';
            if ($table_name == 'LUMPSUM') {
                $tag = 'lum';
            } elseif ($table_name == 'SIP') {
                $tag = 'sip';
            } elseif ($table_name == 'REDEMPTION') {
                $tag = 'redem';
            } elseif ($table_name == 'SWITCH') {
                $tag = 'switch';
            } elseif ($table_name == 'STP') {
                $tag = 'stp';
            } elseif ($table_name == 'SWP') {
                $tag = 'swp';
            } elseif ($table_name == 'COB') {
                $tag = 'cob';
            } elseif ($table_name == 'SIP-STOP') {
                $tag = 'sip_stop';
            } elseif ($table_name == 'STP-STOP') {
                $tag = 'stp_stop';
            } elseif ($table_name == 'SWP-STOP') {
                $tag = 'swp_stop';
            }
            $data = $this->functionality_model->get_client_list($table_name, $tag);
            $list = array();
            for ($i = 0; $i < count($data); $i++) {
                array_push($list, array($data[$i]['id'] => $data[$i]['' . $tag . '_client_name']));
            }
            echo json_encode(array('status' => true, 'list' => $list));
        } else {
            redirect(base_url() . 'admin/index');
        }
    }
}
