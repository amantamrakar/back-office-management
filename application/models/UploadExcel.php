<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UploadExcel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function UploadExcelFile($data, $table_name)
    {
        if ($table_name == 'LUMPSUM') {
            $lum_arr = array('lum_date', 'lum_s_no', 'lum_month', 'lum_of_on', 'lum_client_name', 'lum_fund', 'lum_scheme', 'lum_submit', 'lum_pan_no', 'lum_folio_no', 'lum_amount', 'lum_remark', 'lum_done_ok', 'lum_rm_name', 'lum_client_type', 'lum_category', 'lum_rejection', 'lum_after_liquid_fund');
            $arr  = replace_key($data, $lum_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'SIP'){
            $sip_arr = array('sip_date', 'sip_s_no', 'sip_month', 'sip_of_on', 'sip_client_name', 'sip_fund', 'sip_scheme', 'sip_submit', 'sip_pan_no', 'sip_folio_no', 'sip_amount', 'sip_ecs_date', 'sip_remark', 'sip_done_ok', 'sip_freedom_mitra', 'sip_remark_content', 'sip_continue_stop', 'sip_rm_name', 'sip_category', 'sip_client_type','sip_target_boster_sip');
            $arr  = replace_key($data, $sip_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'REDEMPTION'){
            $redem_arr = array('redem_date', 'redem_s_no', 'redem_month', 'redem_of_on', 'redem_client_name', 'redem_fund', 'redem_scheme', 'redem_submit', 'redem_mode_of_pay', 'redem_bank_name', 'redem_account_no', 'redem_folio_no', 'redem_amount', 'redem_done_ok', 'redem_remark', 'redem_rm_name', 'redem_reason_rejection');
            $arr  = replace_key($data, $redem_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'COB'){
            $cob_arr = array('cob_date', 'cob_s_no', 'cob_mode', 'cob_month', 'cob_client_name', 'cob_activity', 'cob_submit_place', 'cob_related_use', 'cob_folio_no', 'cob_done_ok', 'cob_remark', 'cob_rm_name', 'cob_other_info');
            $arr  = replace_key($data, $cob_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'SWITCH'){
            $switch_arr = array('switch_date', 'switch_s_no', 'switch_month', 'switch_of_on', 'switch_client_name', 'switch_stp_switch', 'switch_amc_name', 'switch_l_e', 'switch_scheme', 'switch_submit', 'switch_to_scheme', 'switch_folio_no', 'switch_amount', 'switch_done_ok', 'switch_remark', 'switch_rm_name');
            $arr  = replace_key($data, $switch_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'SWP'){
            $swp_arr = array( 'swp_date', 'swp_s_no', 'swp_month', 'swp_of_on', 'swp_client_name', 'swp_submit', 'swp_scheme_name', 'swp_amount', 'swp_folio_no', 'swp_done_ok', 'swp_date_start', 'swp_date_end', 'swp_duration', 'swp_no_head','swp_other_info');
            $arr  = replace_key($data, $swp_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'STP'){
            $stp_arr = array('stp_date', 'stp_s_no', 'stp_month', 'stp_of_on', 'stp_client_name', 'stp_amc_name', 'stp_l_e', 'stp_scheme', 'stp_submit', 'stp_to_scheme', 'stp_folio_no', 'stp_amount', 'stp_date_1', 'stp_date_2','stp_remark','stp_done_ok', 'stp_rm_name', 'stp_comp_continue', 'stp_stp_type');
            $arr  = replace_key($data, $stp_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'SIP'){
            $sip_arr = array('sip_date', 'sip_s_no', 'sip_month', 'sip_of_on', 'sip_client_name', 'sip_fund', 'sip_scheme', 'sip_submit', 'sip_pan_no', 'sip_folio_no', 'sip_amount', 'sip_ecs_date', 'sip_remark', 'sip_done_ok', 'sip_freedom_mitra', 'sip_remark_content', 'sip_continue_stop', 'sip_rm_name', 'sip_category', 'sip_client_type');
            $arr  = replace_key($data, $sip_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'SIP-STOP'){
            $sip_top_arr = array('sip_stop_date', 'sip_stop_s_no', 'sip_stop_month', 'sip_stop_of_on', 'sip_stop_client_name', 'sip_stop_fund_name', 'sip_stop_scheme_name', 'sip_stop_submit', 'sip_stop_folio_no', 'sip_stop_amount', 'sip_stop_remark_date', 'sip_stop_done_ok', 'sip_stop_rm_name', 'sip_stop_pause', 'sip_stop_pause_date_from', 'sip_stop_pause_date_to');

            $arr  = replace_key($data, $sip_top_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'STP-STOP'){
            $stp_stop_arr = array('stp_stop_date', 'stp_stop_s_no', 'stp_stop_month', 'stp_stop_of_on', 'stp_stop_client_name', 'stp_stop_amc_name', 'stp_stop_l_e', 'stp_stop_from_scheme_name', 'stp_stop_submit', 'stp_stop_to_scheme_name', 'stp_stop_folio_no', 'stp_stop_amount', 'stp_stop_remark', 'stp_stop_done_ok', 'stp_stop_rm_name', 'stp_stop_other_info');
            $arr  = replace_key($data, $stp_stop_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }elseif($table_name == 'SWP-STOP'){
            $swp__stop_arr = array('stp_stop_date', 'stp_stop_s_no', 'stp_stop_month', 'stp_stop_of_on', 'stp_stop_client_name', 'stp_stop_amc_name', 'stp_stop_l_e', 'stp_stop_from_scheme_name', 'stp_stop_submit', 'stp_stop_to_scheme_name', 'stp_stop_folio_no', 'stp_stop_amount', 'stp_stop_remark', 'stp_stop_done_ok', 'stp_stop_rm_name', 'stp_stop_other_info');
            $arr  = replace_key($data, $swp__stop_arr);
            $q =  $this->db->insert_batch($table_name, $arr);
        }

        if($q){
            echo json_encode(array('status' => true,'message'=>'Uplaod Successfully','class'=>'bg-success'));
        }else{
            echo json_encode(array('status' => true,'message'=>'File Not Uploaded','class'=>'bg-danger'));
        }
    }
}
