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

    public  function get_today_data($table_name)
    {
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

        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('' . $tag . '_date', date('Y-m-d'));
        $query = $this->db->get()->result_array();
        return $query;
    }
}
