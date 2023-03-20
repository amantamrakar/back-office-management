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
    public  function get_client_list($table, $tag)
    {
        $query = $this->db->select('id,' . $tag . '_client_name');
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
    public function update_my_forms($table_name, $id, $data)
    {
        $this->db->where('id', $id);
        $query =  $this->db->update($table_name, $data);
        return $query;
    }

    public function get_filtered_data($table_name, $data)
    {
        // echo my_arr($data);
        // die();
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
        $first_date = $data['first_date'];
        $second_date = $data['second_date'];
        $client_id = $data['client_name'];
        $rm_name = $data['rm_name'];
        $reject = $data['reject_status'];
        $scheme = $data['scheme_name'];
        // $years = $data['filter_by_years'];
        // echo $years;
        $this->db->select('*');
        $this->db->from($table_name);
        if (empty($first_date) && empty($second_date) && $client_id == 0) {
        } else if ($client_id == 0) {
            $this->db->where('' . $tag . '_date BETWEEN "' . $first_date . '" AND "' . $second_date . '"');
        } elseif ($client_id != 0) {
            $this->db->where('id', $client_id);
        } elseif ($client_id != 0 && !empty($first_date) && !empty($second_date)) {
            $this->db->where('' . $tag . '_date BETWEEN "' . $first_date . '" AND "' . $second_date . '"');
        }

        if (!empty($rm_name)) {
            $this->db->where('' . $tag . '_rm_name', $rm_name);
        }
        if (!empty($scheme)) {
            $this->db->like('' . $tag . '_scheme', $scheme);
        }
        if ($table_name == 'LUMPSUM') {
            $reject_feild =  'lum_remark';
        } elseif ($table_name == 'SIP') {
            $reject_feild = 'sip_remark';
        } elseif ($table_name == 'REDEMPTION') {
            $reject_feild =  'redem_remark';
        } elseif ($table_name == 'SWITCH') {
            $reject_feild =  'switch_remark';
        } elseif ($table_name == 'STP') {
            $reject_feild = 'stp_remark';
        } elseif ($table_name == 'SWP') {
            $reject_feild = 'swp_duration';
        } elseif ($table_name == 'COB') {
            $reject_feild = 'cob_remark';
        } elseif ($table_name == 'SIP-STOP') {
            $reject_feild =  'sip_stop_remark';
        } elseif ($table_name == 'STP-STOP') {
            $reject_feild = 'stp_stop_remark';
        } elseif ($table_name == 'SWP-STOP') {
            $reject_feild = 'swp_stop_remark';
        }
        if ($reject != 'All') {
            if ($reject != 'Yes') {
                if ($table_name == 'LUMPSUM' || $table_name == 'SIP' || $table_name == 'REDEMPTION' || $table_name == 'REDEMPTION' || $table_name == 'SWITCH' || $table_name == 'SIP-STOP' || $table_name == 'STP-STOP' || $table_name == 'SWP-STOP' || $table_name == 'COB') {
                    $this->db->where($reject_feild, 'Clear');
                    $this->db->or_where($reject_feild, 'Choose');
                    $this->db->or_where($reject_feild, '');
                }
                if($table_name == 'STP' || $table_name == 'SWP'){
                    $this->db->or_where($reject_feild, '');
                    $this->db->or_where($reject_feild, 'Monthly');
                    $this->db->or_where($reject_feild, 'Quaterly');
                    $this->db->or_where($reject_feild, 'Weekly');
                }
            } else {
                if ($table_name == 'LUMPSUM' || $table_name == 'SIP' || $table_name == 'REDEMPTION' || $table_name == 'REDEMPTION' || $table_name == 'SWITCH' || $table_name == 'SIP-STOP' || $table_name == 'STP-STOP'  || $table_name == 'SWP-STOP' || $table_name == 'COB') {
                    $this->db->where($reject_feild, 'Reject');
                }
                if ($table_name == 'STP' || $table_name == 'SWP' ) {
                    $this->db->where($reject_feild, 'Reject');
                }
            }
        }

        $query = $this->db->get()->result_array();
        return $query;
    }
}
