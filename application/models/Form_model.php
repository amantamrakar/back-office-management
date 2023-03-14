<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('My');
       
    }

    public function form_submit($data_array, $table)
    {
        $insert = $this->db->insert($table, $data_array);
        if($insert){
            echo json_encode(array('status' => 'true'));
        }
    }
}
