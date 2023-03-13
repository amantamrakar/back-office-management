<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Show_data_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public  function get_data($table)
    {
        $query = $this->db->get($table);
        $ret = $query->result_array();
        return $ret;
    }

}
