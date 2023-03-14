<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin_model extends CI_Model {
    
    public function Login_data_check($data_array){
        $db1 = $this->load->database('admin',true);
        $response = array();
        $db1->select(array('username','id'));
        $q = $db1->get_where('admin',$data_array);
        if($q -> num_rows()>0){
            $response = $q->row_array();
            return $response;
        }else{
            return false;
        }
    }
    
    }
    
