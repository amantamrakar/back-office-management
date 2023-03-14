<?php

// echo $data;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">


</head>

<body>
    <style>
        #Show_data_table_filter {
            margin-bottom: 10px;
        }

        #Show_data_table_filter,
        #Show_data_table_length,
        #Show_data_table_info,
        #Show_data_table_paginate {
            font-size: 13.5px;
        }
    </style>
    </head>

    <body>
        <?php
        $tag = '';
        if ($title == 'LUMPSUM') {
            $tag = 'lum';
        } elseif ($title == 'SIP') {
            $tag = 'sip';
        } elseif ($title == 'REDEMPTION') {
            $tag = 'redem';
        } elseif ($title == 'SWITCH') {
            $tag = 'switch';
        } elseif ($title == 'STP') {
            $tag = 'stp';
        } elseif ($title == 'SWP') {
            $tag = 'swp';
        } elseif ($title == 'COB') {
            $tag = 'cob';
        } elseif ($title == 'SIP-STOP') {
            $tag = 'sip_stop';
        } elseif ($title == 'STP-STOP') {
            $tag = 'stp_stop';
        } elseif ($title == 'SWP-STOP') {
            $tag = 'swp_stop';
        }
        ?>

        <?php
        // echo '<pre>';
        // print_r($get);
        // die();
        ?>

        <div class="container-fluid">
            <div class="card">

                <div class="card-body table-responsive">
                    <table class="table cell-border row-border display " id="Show_data_table" style="font-size: 13px;">
                        <?php
                        if ($title == 'LUMPSUM') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th width="1%" class="text-center">id</th>
                                    <th width="2%" class="text-center">lum_date</th>
                                    <th width="2%" class="text-center">lum_month</th>
                                    <th width="1%" class="text-center">lum_s_no</th>
                                    <th width="1%" class="text-center">lum_of_on</th>
                                    <th width="13%" class="text-center">lum_client_name</th>
                                    <th width="10%" class="text-center">lum_fund</th>
                                    <th width="10%" class="text-center">lum_scheme</th>
                                    <th width="5%" class="text-center">lum_submit</th>
                                    <th width="5%" class="text-center">lum_pan_no</th>
                                    <th width="5%" class="text-center">lum_folio_no</th>
                                    <th width="5%" class="text-center">lum_amount</th>
                                    <th width="5%" class="text-center">lum_remark</th>
                                    <th width="5%" class="text-center">lum_done_ok</th>
                                    <th width="5%" class="text-center">lum_rm_name</th>
                                    <th width="5%" class="text-center">lum_client_type</th>
                                    <th width="5%" class="text-center">lum_category</th>
                                    <th width="10%" class="text-center">lum_rejection</th>
                                    <th width="5%" class="text-center">lum_after_liquid_fund</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['lum_date'] ?> </td>
                                        <td><?php echo $get[$i]['lum_month'] ?> </td>
                                        <td><?php echo $get[$i]['lum_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['lum_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['lum_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['lum_fund'] ?> </td>
                                        <td><?php echo $get[$i]['lum_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['lum_submit'] ?> </td>
                                        <td><?php echo $get[$i]['lum_pan_no'] ?> </td>
                                        <td><?php echo $get[$i]['lum_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['lum_amount'] ?> </td>
                                        <td><?php echo $get[$i]['lum_remark'] ?> </td>
                                        <td><?php echo $get[$i]['lum_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['lum_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['lum_client_type'] ?> </td>
                                        <td><?php echo $get[$i]['lum_category'] ?> </td>
                                        <td><?php echo $get[$i]['lum_rejection'] ?> </td>
                                        <td><?php echo $get[$i]['lum_after_liquid_fund'] ?> </td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SIP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>sip_date</th>
                                    <th>sip_s_no</th>
                                    <th>sip_month</th>
                                    <th>sip_of_on</th>
                                    <th>sip_client_name</th>
                                    <th>sip_fund</th>
                                    <th>sip_scheme</th>
                                    <th>sip_submit</th>
                                    <th>sip_pan_no</th>
                                    <th>sip_folio_no</th>
                                    <th>sip_amount</th>
                                    <th>sip_ecs_date</th>
                                    <th>sip_remark</th>
                                    <th>sip_done_ok</th>
                                    <th>sip_freedom_mitra</th>
                                    <th>sip_remark_content</th>
                                    <th>sip_continue_stop</th>
                                    <th>sip_rm_name</th>
                                    <th>sip_category</th>
                                    <th>sip_client_type</th>
                                    <th>sip_target_boster_sip</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['sip_date'] ?> </td>
                                        <td><?php echo $get[$i]['sip_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['sip_month'] ?> </td>
                                        <td><?php echo $get[$i]['sip_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['sip_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['sip_fund'] ?> </td>
                                        <td><?php echo $get[$i]['sip_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['sip_submit'] ?> </td>
                                        <td><?php echo $get[$i]['sip_pan_no'] ?> </td>
                                        <td><?php echo $get[$i]['sip_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['sip_amount'] ?> </td>
                                        <td><?php echo $get[$i]['sip_ecs_date'] ?> </td>
                                        <td><?php echo $get[$i]['sip_remark'] ?> </td>
                                        <td><?php echo $get[$i]['sip_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['sip_freedom_mitra'] ?> </td>
                                        <td><?php echo $get[$i]['sip_remark_content'] ?> </td>
                                        <td><?php echo $get[$i]['sip_continue_stop'] ?> </td>
                                        <td><?php echo $get[$i]['sip_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['sip_category'] ?> </td>
                                        <td><?php echo $get[$i]['sip_client_type'] ?> </td>
                                        <td><?php echo $get[$i]['sip_target_boster_sip'] ?> </td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'REDEMPTION') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>redem_date</th>
                                    <th>redem_s_no</th>
                                    <th>redem_month</th>
                                    <th>redem_of_on</th>
                                    <th>redem_client_name</th>
                                    <th>redem_fund</th>
                                    <th>redem_scheme</th>
                                    <th>redem_submit</th>
                                    <th>redem_mode_of_pay</th>
                                    <th>redem_bank_name</th>
                                    <th>redem_account_no</th>
                                    <th>redem_folio_no</th>
                                    <th>redem_amount</th>
                                    <th>redem_done_ok</th>
                                    <th>redem_remark</th>
                                    <th>redem_rm_name</th>
                                    <th>redem_reason_rejection</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['redem_date'] ?> </td>
                                        <td><?php echo $get[$i]['redem_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['redem_month'] ?> </td>
                                        <td><?php echo $get[$i]['redem_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['redem_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['redem_fund'] ?> </td>
                                        <td><?php echo $get[$i]['redem_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['redem_submit'] ?> </td>
                                        <td><?php echo $get[$i]['redem_mode_of_pay'] ?> </td>
                                        <td><?php echo $get[$i]['redem_bank_name'] ?> </td>
                                        <td><?php echo $get[$i]['redem_account_no'] ?> </td>
                                        <td><?php echo $get[$i]['redem_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['redem_amount'] ?> </td>
                                        <td><?php echo $get[$i]['redem_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['redem_remark'] ?> </td>
                                        <td><?php echo $get[$i]['redem_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['redem_reason_rejection'] ?> </td>

                                    </tr>
                                <?php

                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SWITCH') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>switch_date</th>
                                    <th>switch_s_no</th>
                                    <th>switch_month</th>
                                    <th>switch_of_on</th>
                                    <th>switch_client_name</th>
                                    <th>switch_stp_switch</th>
                                    <th>switch_amc_name</th>
                                    <th>switch_l_e</th>
                                    <th>switch_scheme</th>
                                    <th>switch_submit</th>
                                    <th>switch_to_scheme</th>
                                    <th>switch_folio_no</th>
                                    <th>switch_amount</th>
                                    <th>switch_remark</th>
                                    <th>switch_done_ok</th>
                                    <th>switch_rm_name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['switch_date'] ?> </td>
                                        <td><?php echo $get[$i]['switch_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['switch_month'] ?> </td>
                                        <td><?php echo $get[$i]['switch_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['switch_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['switch_stp_switch'] ?> </td>
                                        <td><?php echo $get[$i]['switch_amc_name'] ?> </td>
                                        <td><?php echo $get[$i]['switch_l_e'] ?> </td>
                                        <td><?php echo $get[$i]['switch_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['switch_submit'] ?> </td>
                                        <td><?php echo $get[$i]['switch_to_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['switch_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['switch_amount'] ?> </td>
                                        <td><?php echo $get[$i]['switch_remark'] ?> </td>
                                        <td><?php echo $get[$i]['switch_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['switch_rm_name'] ?> </td>

                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'STP') {

                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>stp_date</th>
                                    <th>stp_s_no</th>
                                    <th>stp_month</th>
                                    <th>stp_of_on</th>
                                    <th>stp_client_name</th>
                                    <th>stp_amc_name</th>
                                    <th>stp_l_e</th>
                                    <th>stp_scheme</th>
                                    <th>stp_submit</th>
                                    <th>stp_to_scheme</th>
                                    <th>stp_folio_no</th>
                                    <th>stp_amount</th>
                                    <th>stp_date_1</th>
                                    <th>stp_date_2</th>
                                    <th>stp_done_ok</th>
                                    <th>stp_remark</th>
                                    <th>stp_rm_name</th>
                                    <th>stp_comp_continue</th>
                                    <th>stp_stp_type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['stp_date'] ?> </td>
                                        <td><?php echo $get[$i]['stp_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['stp_month'] ?> </td>
                                        <td><?php echo $get[$i]['stp_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['stp_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_amc_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_l_e'] ?> </td>
                                        <td><?php echo $get[$i]['stp_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['stp_submit'] ?> </td>
                                        <td><?php echo $get[$i]['stp_to_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['stp_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['stp_amount'] ?> </td>
                                        <td><?php echo $get[$i]['stp_date_1'] ?> </td>
                                        <td><?php echo $get[$i]['stp_date_2'] ?> </td>
                                        <td><?php echo $get[$i]['stp_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['stp_remark'] ?> </td>
                                        <td><?php echo $get[$i]['stp_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_comp_continue'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stp_type'] ?> </td>

                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SWP') {

                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>swp_date</th>
                                    <th>swp_s_no</th>
                                    <th>swp_month</th>
                                    <th>swp_of_on</th>
                                    <th>swp_client_name</th>
                                    <th>swp_submit</th>
                                    <th>swp_scheme</th>
                                    <th>swp_amount</th>
                                    <th>swp_folio_no</th>
                                    <th>swp_done_ok</th>
                                    <th>swp_date_start</th>
                                    <th>swp_date_end</th>
                                    <th>swp_duration</th>
                                    <th>swp_no_head</th>
                                    <th>swp_other_info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['swp_date'] ?> </td>
                                        <td><?php echo $get[$i]['swp_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['swp_month'] ?> </td>
                                        <td><?php echo $get[$i]['swp_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['swp_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['swp_submit'] ?> </td>
                                        <td><?php echo $get[$i]['swp_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['swp_amount'] ?> </td>
                                        <td><?php echo $get[$i]['swp_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['swp_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['swp_date_start'] ?> </td>
                                        <td><?php echo $get[$i]['swp_date_end'] ?> </td>
                                        <td><?php echo $get[$i]['swp_duration'] ?> </td>
                                        <td><?php echo $get[$i]['swp_no_head'] ?> </td>
                                        <td><?php echo $get[$i]['swp_other_info'] ?> </td>

                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'COB') {


                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>cob_date</th>
                                    <th>cob_s_no</th>
                                    <th>cob_mode</th>
                                    <th>cob_month</th>
                                    <th>cob_client_name</th>
                                    <th>cob_activity</th>
                                    <th>cob_submit_place</th>
                                    <th>cob_related_use</th>
                                    <th>cob_folio_no</th>
                                    <th>cob_done_ok</th>
                                    <th>cob_remark</th>
                                    <th>cob_rm_name</th>
                                    <th>cob_other_info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['cob_date'] ?> </td>
                                        <td><?php echo $get[$i]['cob_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['cob_mode'] ?> </td>
                                        <td><?php echo $get[$i]['cob_month'] ?> </td>
                                        <td><?php echo $get[$i]['cob_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['cob_activity'] ?> </td>
                                        <td><?php echo $get[$i]['cob_submit_place'] ?> </td>
                                        <td><?php echo $get[$i]['cob_related_use'] ?> </td>
                                        <td><?php echo $get[$i]['cob_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['cob_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['cob_remark'] ?> </td>
                                        <td><?php echo $get[$i]['cob_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['cob_other_info'] ?> </td>

                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SIP-STOP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>sip_stop_date</th>
                                    <th>sip_stop_s_no</th>
                                    <th>sip_stop_month</th>
                                    <th>sip_stop_of_on</th>
                                    <th>sip_stop_client_name</th>
                                    <th>sip_stop_fund</th>
                                    <th>sip_stop_scheme</th>
                                    <th>sip_stop_submit</th>
                                    <th>sip_stop_folio_no</th>
                                    <th>sip_stop_amount</th>
                                    <th>sip_stop_remark_date</th>
                                    <th>sip_stop_done_ok</th>
                                    <th>sip_stop_rm_name</th>
                                    <th>sip_stop_pause</th>
                                    <th>sip_stop_pause_date_from</th>
                                    <th>sip_stop_pause_date_to</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_date'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_month'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_fund'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_submit'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_amount'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_remark_date'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_pause'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_pause_date_from'] ?> </td>
                                        <td><?php echo $get[$i]['sip_stop_pause_date_to'] ?> </td>

                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'STP-STOP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>stp_stop_date</th>
                                    <th>stp_stop_s_no</th>
                                    <th>stp_stop_month</th>
                                    <th>stp_stop_of_on</th>
                                    <th>stp_stop_client_name</th>
                                    <th>stp_stop_amc_name</th>
                                    <th>stp_stop_l_e</th>
                                    <th>stp_stop_from_scheme_name</th>
                                    <th>stp_stop_submit</th>
                                    <th>stp_stop_to_scheme_name</th>
                                    <th>stp_stop_folio_no</th>
                                    <th>stp_stop_amount</th>
                                    <th>stp_stop_remark</th>
                                    <th>stp_stop_done_ok</th>
                                    <th>stp_stop_rm_name</th>
                                    <th>stp_stop_other_info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_date'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_month'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_amc_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_l_e'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_from_scheme_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_submit'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_to_scheme_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_amount'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_remark'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_rm_name'] ?> </td>
                                        <td><?php echo $get[$i]['stp_stop_other_info'] ?> </td>

                                    </tr>
                                <?php

                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SWP-STOP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>id</th>
                                    <th>swp_stop_date</th>
                                    <th>swp_stop_s_no</th>
                                    <th>swp_stop_month</th>
                                    <th>swp_stop_of_on</th>
                                    <th>swp_stop_client_name</th>
                                    <th>swp_stop_submit</th>
                                    <th>swp_stop_scheme</th>
                                    <th>swp_stop_amount</th>
                                    <th>swp_stop_folio_no</th>
                                    <th>swp_stop_done_ok</th>
                                    <th>swp_stop_stop_date</th>
                                    <th>swp_stop_rm_name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $get[$i]['id'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_date'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_month'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_of_on'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_client_name'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_submit'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_scheme'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_amount'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_folio_no'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_stop_date'] ?> </td>
                                        <td><?php echo $get[$i]['swp_stop_rm_name'] ?> </td>

                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>

                <div class="card">
                    <?php
                    if ($title == 'LUMPSUM') {
                        $tag = 'lum';
                    } elseif ($title == 'SIP') {
                        $tag = 'sip';
                    } elseif ($title == 'REDEMPTION') {
                        $tag = 'redem';
                    } elseif ($title == 'SWITCH') {
                        $tag = 'switch';
                    } elseif ($title == 'STP') {
                        $tag = 'stp';
                    } elseif ($title == 'SWP') {
                        $tag = 'swp';
                    } elseif ($title == 'COB') {
                        $tag = 'cob';
                    } elseif ($title == 'SIP-STOP') {
                        $tag = 'sip_stop';
                    } elseif ($title == 'STP-STOP') {
                        $tag = 'stp_stop';
                    } elseif ($title == 'SWP-STOP') {
                        $tag = 'swp_stop';
                    }
                    ?>
>>>>>>> 0c43dc387383af7be4ef465c88b998606cf0cc7b
                </div>
            </div>
        </div>


    </body>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#Show_data_table');
        });
    </script>


</html>