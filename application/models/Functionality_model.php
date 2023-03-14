<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Functionality_model extends CI_Model
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

    public function get_client_data($table, $id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function update_my_forms($table_name, $id,$data)
    {
        $this->db->where('id', $id);
        $query =  $this->db->update($table_name, $data);
        return $query;
    }
}
