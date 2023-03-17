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

    <style>
        #table_filter {
            margin-bottom: 10px;
        }

        #table_filter,
        #table_length,
        #table_info,
        #table_paginate {
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
        <div class="container-fluid mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table cell-border row-border display " id="table" style="font-size: 12px;">
                        <thead class="bg-dark text-white">
                            <th width="%1"  class="text-center" style="font-weight: 300;">Count</th>
                            <th width="%25" class="text-center" style="font-weight: 300;">Client Info</th>
                            <?php
                            if ($title != 'COB') { ?>
                                <th width="%25" class="text-center" style="font-weight: 300;">Scheme Info</th>
                            <?php } else { ?>
                                <th width="%25" class="text-center" style="font-weight: 300;">Submit Info</th>
                            <?php
                            }
                            ?>
                            <?php
                            if ($title == 'SWITCH' || $title == 'STP' || $title == 'STP-STOP') { ?>
                                <th width="%5" class="text-center" style="font-weight: 300;">AMC Name </th>
                            <?php }
                            ?>
                            <th width="2%" class="text-center" style="font-weight: 300;">Series</th>
                            <th width="2%" class="text-center" style="font-weight: 300;">Month</th>


                            <th width="2%" class="text-center" style="font-weight: 300;">On/Off</th>

                            <th width="2%" class="text-center" style="font-weight: 300;">Status</th>
                            <th width="2%" class="text-center" style="font-weight: 300;">RM Name</th>
                            <?php
                            if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION' || $title == 'SWITCH' || $title == 'STP' || $title == 'SIP-STOP' || $title == 'STP-STOP') { ?>
                                <th width="10%" class="text-center" style="font-weight: 300;">Remark</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'LUMPSUM') { ?>
                                <th width="5%" class="text-center" style="font-weight: 300;">Category</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">Liquid Fund</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'SIP') { ?>
                                <th width="20%" class="text-center" style="font-weight: 300;">Other Info </th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'REDEMPTION') { ?>
                                <th width="20%" class="text-center" style="font-weight: 300;">Bank Info</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'SWITCH') { ?>
                                <th width="15%" class="text-center" style="font-weight: 300;">Switch Status</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">L/E</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'STP') { ?>
                                <th width="5%" class="text-center" style="font-weight: 300;">L/E</th>
                                <th width="10%" class="text-center" style="font-weight: 300;">Date</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">Continue<br>Complete</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">Type</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'SWP') { ?>
                                <th width="10%" class="text-center" style="font-weight: 300;">Start Date</th>
                                <th width="10%" class="text-center" style="font-weight: 300;">End Date</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">Duartion</th>
                                <th width="15%" class="text-center" style="font-weight: 300;">Other<br>Info</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'SIP-STOP') { ?>
                                <th width="5%" class="text-center" style="font-weight: 300;">Pouse</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">Pouse<br>Date</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'STP-STOP') { ?>
                                <th width="5%" class="text-center" style="font-weight: 300;">L/E</th>
                                <th width="10%" class="text-center" style="font-weight: 300;">Other Info</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'SWP-STOP') { ?>
                                <th width="15%" class="text-center" style="font-weight: 300;">Stop Date</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'COB') { ?>
                                <th width="5%" class="text-center" style="font-weight: 300;">Activity</th>
                                <th width="10%" class="text-center" style="font-weight: 300;" style="">Related <br> Use</th>
                                <th width="5%" class="text-center" style="font-weight: 300;">Other <br> Info</th>
                            <?php }
                            ?>
                            <?php
                            if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION' || $title == 'COB') { ?>
                                <th width="5%" class="text-center" style="font-weight: 300;">Reject</th>
                            <?php }
                            ?>
                        </thead>

                        <tbody>
                            <?php
                            $j = 1;
                            for ($i = 0; $i < count($data); $i++) { ?>
                                <!-- -----------------solve rejection name head problem---------------------- -->
                                <?php
                                $reject = '';
                                $style = '';
                                if ($title == 'LUMPSUM') {
                                    $reject =  $data[$i]['lum_rejection'];
                                } elseif ($title == 'SIP') {
                                    $reject = $data[$i]['sip_remark_content'];
                                } elseif ($title == 'REDEMPTION') {
                                    $reject =  $data[$i]['redem_reason_rejection'];
                                } elseif ($title == 'SWITCH') {
                                    $reject = '';
                                } elseif ($title == 'STP') {
                                    $reject = '';
                                } elseif ($title == 'SWP') {
                                    $reject = '';
                                } elseif ($title == 'COB') {
                                    $reject = $data[$i]['cob_remark'];
                                } elseif ($title == 'SIP-STOP') {
                                    $reject =  '';
                                } elseif ($title == 'STP-STOP') {
                                    $reject = '';
                                } elseif ($title == 'SWP-STOP') {
                                    $reject = '';
                                }

                                if(!empty($reject)){
                                    $style = "background:rgba(255, 136, 136, 0.59)";
                                }
                                ?>
                                <!-- -----------------solve rejection name head problem---------------------- -->
                                <tr class="" style="<?php echo $style ?>">
                                    <td class="text-center"><?php echo $j ?> </td>
                                    <td class="">
                                        <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['' . $tag . '_client_name'] ?></span><br>
                                        <?php
                                        if ($title == 'LUMPSUM' || $title == ' SIP') { ?>
                                            <span><span class="fw-bold">Pan No.: </span><?php echo $data[$i]['' . $tag . '_pan_no'] ?></span><br>
                                            <span><span class="fw-bold">Client Type: </span><?php echo $data[$i]['' . $tag . '_client_type'] ?></span><br>

                                        <?php
                                        }
                                        ?>
                                        <span><span class="fw-bold">Date: </span><?php echo $data[$i]['' . $tag . '_date'] ?> </span>

                                    </td>
                                    <td class="">
                                        <?php

                                        if ($title != 'COB') {
                                            if ($title != 'STP-STOP') { ?>
                                                <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['' . $tag . '_scheme'] ?></span><br>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($title == 'LUMPSUM' || $title == ' SIP' || $title == 'REDEMPTION' || $title == 'SIP-STOP') { ?>
                                                <span><span class="fw-bold">Fund Name: </span><?php echo $data[$i]['' . $tag . '_fund'] ?></span><br>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($title == 'SWITCH' || $title == 'STP') { ?>
                                                <span><span class="fw-bold">Scheme Switch To: </span><?php echo $data[$i]['' . $tag . '_to_scheme'] ?></span><br>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($title == 'STP-STOP') { ?>
                                                <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['' . $tag . '_from_scheme_name'] ?></span><br>
                                                <span><span class="fw-bold">STP to Scheme: </span><?php echo $data[$i]['stp_stop_to_scheme_name'] ?></span><br>
                                            <?php
                                            }
                                            ?>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $data[$i]['' . $tag . '_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $data[$i]['' . $tag . '_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $data[$i]['' . $tag . '_amount'] ?> </span><br>
                                        <?php
                                        } else { ?>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['' . $tag . '_submit_place'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['' . $tag . '_folio_no'] ?></span><br>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <?php
                                    if ($title == 'SWITCH' || $title == 'STP' || $title == 'STP-STOP') { ?>
                                        <td><?php echo $data[$i]['' . $tag . '_amc_name'] ?></td>
                                    <?php }
                                    ?>
                                    <td class="text-center"><?php echo $data[$i]['' . $tag . '_s_no'] ?></td>
                                    <td class="text-center"><?php echo $data[$i]['' . $tag . '_month'] ?></td>
                                    <?php
                                    if ($title != 'COB') { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_of_on'] ?></td>
                                    <?php
                                    } else { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_mode'] ?></td>
                                    <?php
                                    }
                                    ?>
                                    <td class="text-center"><?php echo $data[$i]['' . $tag . '_done_ok'] ?></td>
                                    <td class="text-center"><?php echo $data[$i]['' . $tag . '_rm_name'] ?></td>
                                    <?php
                                    if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION' || $title == 'SWITCH' || $title == 'STP'  || $title == 'STP-STOP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_remark'] ?></td>
                                    <?php } elseif ($title == 'SIP-STOP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_remark_date'] ?></td>
                                    <?php       }
                                    ?>
                                    <?php
                                    if ($title == 'LUMPSUM') { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_category'] ?></td>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_after_liquid_fund'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'SIP') { ?>
                                        <td>
                                            <span><span class="fw-bold">Freedom Mitra: </span><?php echo $data[$i]['sip_freedom_mitra'] ?></span><br>
                                            <span><span class="fw-bold">Category: </span><?php echo $data[$i]['sip_category'] ?></span><br>
                                            <span><span class="fw-bold">Continue/Stop: </span><?php echo $data[$i]['sip_continue_stop'] ?> </span><br>
                                            <span><span class="fw-bold">Target-Boost-SIP: </span><?php echo $data[$i]['sip_target_boster_sip'] ?> </span><br>
                                        </td>

                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'REDEMPTION') { ?>
                                        <td>
                                            <span><span class="fw-bold">Mode of Payment: </span><?php echo $data[$i]['' . $tag . '_mode_of_pay'] ?></span><br>
                                            <span><span class="fw-bold">Bank Name: </span><?php echo $data[$i]['' . $tag . '_bank_name'] ?> </span><br>
                                            <span><span class="fw-bold">Account No.: </span><?php echo $data[$i]['' . $tag . '_account_no'] ?></span><br>
                                        </td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'SWITCH') { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_stp_switch'] ?></td>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_l_e'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'STP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['stp_l_e'] ?></td>
                                        <td class="text-center"><?php echo '[' . $data[$i]['stp_date_1'] . ']<br>to<br>[' . $data[$i]['stp_date_2'] . ']' ?></td>
                                        <td class="text-center"><?php echo $data[$i]['stp_comp_continue'] ?></td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stp_type'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'SWP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['swp_date_start'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_date_end'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_duration'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_other_info'] ?> </td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'SIP-STOP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_pause'] ?></td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_pause_date_from'] . '<br>TO<br>' . $data[$i]['sip_stop_pause_date_to'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'STP-STOP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_l_e'] ?></td>
                                        <td class="text-center"><?php echo $data[$i]['' . $tag . '_other_info'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'SWP-STOP') { ?>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_stop_date'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'COB') { ?>
                                        <td class="text-center"><?php echo $data[$i]['cob_activity'] ?></td>
                                        <td class="text-center"><?php echo $data[$i]['cob_related_use'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_other_info'] ?></td>
                                    <?php }
                                    ?>
                                    <?php
                                    if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION' || $title == 'COB') { ?>
                                        <td class="text-center"><?php echo $reject ?></td>
                                    <?php }
                                    ?>

                                    </tr>
                            <?php
                                $j++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="container-fluid">
            <div class="card">

                <div class="card-body table-responsive">
                    <table class="table cell-border row-border display " id="Show_data_table" style="font-size: 12px;">
                        <?php
                        if ($title == 'LUMPSUM') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th width="2%" class="text-center">Count</th>
                                    <th width="30%" class="text-center">Client Info</th>
                                    <th width="30%" class="text-center">Scheme Info</th>
                                    <th width="2%" class="text-center">Month</th>
                                    <th width="2%" class="text-center">Series</th>
                                    <th width="2%" class="text-center">On/Off</th>
                                    <th width="2%" class="text-center">Remark</th>
                                    <th width="2%" class="text-center">Status</th>
                                    <th width="2%" class="text-center">RM Name</th>
                                    <th width="2%" class="text-center">Category</th>
                                    <th width="24%" class="text-center">Reject</th>
                                    <th width="2%" class="text-center">Liquid Fund</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td class="">
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['lum_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Pan No.: </span><?php echo $data[$i]['lum_pan_no'] ?></span><br>
                                            <span><span class="fw-bold">Client Type: </span><?php echo $data[$i]['lum_client_type'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['lum_date'] ?> </span>

                                        </td>
                                        <td class="">
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['lum_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $data[$i]['lum_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Fund Name: </span><?php echo $data[$i]['lum_fund'] ?></span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $data[$i]['lum_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $data[$i]['lum_amount'] ?> </span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_category'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_rejection'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['lum_after_liquid_fund'] ?> </td>

                                    </tr>
                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SIP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th width="1%" class="text-center">Count</th>
                                    <th width="30%" class="text-center">Client Info</th>
                                    <th width="30%" class="text-center">Scheme Info</th>
                                    <th width="1%" class="text-center">Series</th>
                                    <th width="1%" class="text-center">Month</th>
                                    <th width="1%" class="text-center">Off/On</th>
                                    <th width="5%" class="text-center">ECS Date</th>
                                    <th width="2%" class="text-center">Remark</th>
                                    <th width="2%" class="text-center">Status</th>
                                    <th width="2%" class="text-center">Freedom<br> Mitra</th>
                                    <th width="2%" class="text-center">Reject</th>
                                    <th width="23%" class="text-center">Other Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['sip_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Pan No.: </span><?php echo $data[$i]['sip_pan_no'] ?></span><br>
                                            <span><span class="fw-bold">Client Type: </span><?php echo $data[$i]['sip_client_type'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['sip_date'] ?> </span>
                                        </td>
                                        <td class="">
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['sip_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $data[$i]['sip_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Fund Name: </span><?php echo $data[$i]['sip_fund'] ?></span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $data[$i]['sip_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $data[$i]['sip_amount'] ?> </span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_ecs_date'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_freedom_mitra'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_remark_content'] ?> </td>
                                        <td class="text-center">
                                            <span><span class="fw-bold">Category: </span><?php echo $data[$i]['sip_category'] ?></span><br>
                                            <span><span class="fw-bold">Continue/Stop: </span><?php echo $data[$i]['sip_continue_stop'] ?> </span><br>
                                            <span><span class="fw-bold">RM Name: </span><?php echo $data[$i]['sip_rm_name'] ?> </span><br>
                                            <span><span class="fw-bold">Target-Boost-SIP: </span><?php echo $data[$i]['sip_target_boster_sip'] ?> </span><br>

                                        </td>

                                    </tr>
                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'REDEMPTION') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center" width="1%">Count</th>
                                    <th class="text-center" width="30%">Client Info</th>
                                    <th class="text-center" width="30%">Scheme Info</th>
                                    <th class="text-center" width="1%">Series</th>
                                    <th class="text-center" width="5%">Month</th>
                                    <th class="text-center" width="5%">Off/On</th>
                                    <th class="text-center" width="20%">Bank Info</th>
                                    <th class="text-center" width="5%">Status</th>
                                    <th class="text-center" width="5%">Remark</th>
                                    <th class="text-center" width="5%">RM Name</th>
                                    <th class="text-center" width="9%">Reject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['redem_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['redem_date'] ?> </span>
                                        </td>
                                        <td class="">
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['redem_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $data[$i]['redem_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Fund Name: </span><?php echo $data[$i]['redem_fund'] ?></span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $data[$i]['redem_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $data[$i]['redem_amount'] ?> </span><br>
                                        </td>
                                        <td><?php echo $data[$i]['redem_s_no'] ?> </td>
                                        <td><?php echo $data[$i]['redem_month'] ?> </td>
                                        <td><?php echo $data[$i]['redem_of_on'] ?> </td>
                                        <td class="">
                                            <span><span class="fw-bold">Mode of Payment: </span><?php echo $data[$i]['redem_mode_of_pay'] ?></span><br>
                                            <span><span class="fw-bold">Bank Name: </span><?php echo $data[$i]['redem_bank_name'] ?> </span><br>
                                            <span><span class="fw-bold">Account No.: </span><?php echo $data[$i]['redem_account_no'] ?></span><br>

                                        </td>


                                        <td class="text-center"><?php echo $data[$i]['redem_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['redem_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['redem_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['redem_reason_rejection'] ?> </td>

                                    </tr>
                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SWITCH') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th width="1%" class="text-center">Count</th>
                                    <th width="20%" class="text-center">Client Info</th>
                                    <th width="15%" class="text-center">AMC Info</th>
                                    <th width="40%" class="text-center">Scheme Info</th>
                                    <th width="2%" class="text-center">Series</th>
                                    <th width="2%" class="text-center">Month</th>
                                    <th width="2%" class="text-center">Off/On</th>
                                    <th width="2%" class="text-center">Switch<br>Status</th>
                                    <th width="2%" class="text-center">L/E</th>
                                    <th width="2%" class="text-center">Remark</th>
                                    <th width="2%" class="text-center">Status</th>
                                    <th width="2%" class="text-center">RM Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['switch_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['switch_date'] ?> </span>
                                        </td>
                                        <td class="text-center">
                                            <span><span class="fw-bold">Amc Name: </span><?php echo $data[$i]['switch_amc_name'] ?></span><br>
                                        </td>
                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['switch_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit : </span><?php echo $data[$i]['switch_submit'] ?></span><br>
                                            <span><span class="fw-bold">Scheme Switch To: </span><?php echo $data[$i]['switch_to_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $data[$i]['switch_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $data[$i]['switch_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_stp_switch'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_l_e'] ?> </td>

                                        <td class="text-center"><?php echo $data[$i]['switch_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['switch_rm_name'] ?> </td>

                                    </tr>

                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'STP') {

                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center" width="1%">Count</th>
                                    <th class="text-center" width="15%">Client Info</th>
                                    <th class="text-center" width="5%">AMC Name</th>
                                    <th class="text-center" width="30%">Scheme Info</th>
                                    <th class="text-center" width="2%">Series</th>
                                    <th class="text-center" width="5%">Month</th>
                                    <th class="text-center" width="2%">Off/On</th>
                                    <th class="text-center" width="2%">L/E</th>
                                    <th class="text-center" width="15%">Date</th>
                                    <th class="text-center" width="5%">Status</th>
                                    <th class="text-center" width="10%">Remark</th>
                                    <th class="text-center" width="5%">RM Name</th>
                                    <th class="text-center" width="5%">Continue/<br>Complete</th>
                                    <th class="text-center" width="5%">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['stp_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['stp_date'] ?> </span>
                                        </td>
                                        <td class="text-center">
                                            <span><?php echo $data[$i]['stp_amc_name'] ?></span><br>
                                        </td>
                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['stp_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['stp_submit'] ?></span><br>
                                            <span><span class="fw-bold">STP to Scheme: </span><?php echo $data[$i]['stp_to_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['stp_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $data[$i]['stp_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_l_e'] ?> </td>
                                        <td class="text-center"><?php echo '[' . $data[$i]['stp_date_1'] . ']<br>to<br>[' . $data[$i]['stp_date_2'] . ']' ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_comp_continue'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stp_type'] ?> </td>

                                    </tr>

                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SWP') {

                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center" Width="1%">Count</th>
                                    <th class="text-center" Width="20%">Client Info</th>
                                    <th class="text-center" Width="30%">Scheme Info</th>
                                    <th class="text-center" Width="5%">Series</th>
                                    <th class="text-center" Width="5%">Month</th>
                                    <th class="text-center" Width="5%">Off/On</th>
                                    <th class="text-center" Width="5%">Status</th>
                                    <th class="text-center" Width="8%">Start Date</th>
                                    <th class="text-center" Width="8%">End Date</th>
                                    <th class="text-center" Width="5%">Duration</th>
                                    <th class="text-center" Width="5%">RM Name</th>
                                    <th class="text-center" Width="10%">Other Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['swp_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['swp_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['swp_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['swp_submit'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['swp_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $data[$i]['swp_amount'] ?></span><br>
                                        </td>

                                        <td><?php echo $data[$i]['swp_s_no'] ?> </td>
                                        <td><?php echo $data[$i]['swp_month'] ?> </td>
                                        <td><?php echo $data[$i]['swp_of_on'] ?> </td>

                                        <td><?php echo $data[$i]['swp_done_ok'] ?> </td>
                                        <td><?php echo $data[$i]['swp_date_start'] ?> </td>
                                        <td><?php echo $data[$i]['swp_date_end'] ?> </td>
                                        <td><?php echo $data[$i]['swp_duration'] ?> </td>
                                        <td><?php echo $data[$i]['swp_rm_name'] ?> </td>
                                        <td><?php echo $data[$i]['swp_other_info'] ?> </td>

                                    </tr>

                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'COB') {


                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center" width="1%">Count</th>
                                    <th class="text-center" width="30%">Client Info</th>
                                    <th class="text-center" width="%">Submit Info</th>
                                    <th class="text-center" width="%">Series</th>
                                    <th class="text-center" width="%">Mode</th>
                                    <th class="text-center" width="%">Month</th>
                                    <th class="text-center" width="%">Actvity</th>
                                    <th class="text-center" width="%">Related<br>Use</th>
                                    <th class="text-center" width="%">Status</th>
                                    <th class="text-center" width="%">Reject</th>
                                    <th class="text-center" width="%">RM Name</th>
                                    <th class="text-center" width="%">Other Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['cob_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['cob_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['cob_submit_place'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['cob_folio_no'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_mode'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_activity'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_related_use'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['cob_other_info'] ?> </td>

                                    </tr>

                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SIP-STOP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">Client Info</th>
                                    <th class="text-center">Scheme Info</th>
                                    <th class="text-center">Series</th>
                                    <th class="text-center">Month</th>
                                    <th class="text-center">Off/On</th>
                                    <th class="text-center">Remark Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">RM Name</th>
                                    <th class="text-center">Pouse</th>
                                    <th class="text-center">Pouse Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['sip_stop_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['sip_stop_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['sip_stop_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['sip_stop_submit'] ?></span><br>
                                            <span><span class="fw-bold">Fund: </span><?php echo $data[$i]['sip_stop_fund'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['sip_stop_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $data[$i]['sip_stop_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_remark_date'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_pause'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['sip_stop_pause_date_from'] . '<br>TO<br>' . $data[$i]['sip_stop_pause_date_to'] ?> </td>

                                    </tr>

                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'STP-STOP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">Client Info</th>
                                    <th class="text-center">AMC Name</th>
                                    <th class="text-center">Scheme Info</th>
                                    <th class="text-center">Series</th>
                                    <th class="text-center">Month</th>
                                    <th class="text-center">Off/On</th>
                                    <th class="text-center">L/E</th>
                                    <th class="text-center">Remark</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">RM Name</th>
                                    <th class="text-center">Other Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 0;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td><?php echo $j ?> </td>
                                        <td class="text-center">
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['stp_stop_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['stp_stop_date'] ?> </span>
                                        </td>
                                        <td class="text-center">
                                            <span><?php echo $data[$i]['stp_stop_amc_name'] ?></span><br>
                                        </td>
                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['stp_stop_from_scheme_name'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['stp_stop_submit'] ?></span><br>
                                            <span><span class="fw-bold">STP to Scheme: </span><?php echo $data[$i]['stp_stop_to_scheme_name'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['stp_stop_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $data[$i]['stp_stop_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_l_e'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_remark'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['stp_stop_other_info'] ?> </td>

                                    </tr>
                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        } elseif ($title == 'SWP-STOP') {
                        ?>
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-center">Count</th>
                                    <th class="text-center">Client Info</th>
                                    <th class="text-center">Scheme Info</th>
                                    <th class="text-center">Series</th>
                                    <th class="text-center">Month</th>
                                    <th class="text-center">Off/On</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Stop Date</th>
                                    <th class="text-center">RM Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $j = 1;
                                for ($i = 0; $i < count($get); $i++) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $j ?> </td>
                                        <td>
                                            <span><span class="fw-bold">Client Name: </span><?php echo $data[$i]['swp_stop_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $data[$i]['swp_stop_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $data[$i]['swp_stop_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $data[$i]['swp_stop_submit'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $data[$i]['swp_stop_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $data[$i]['swp_stop_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_month'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_stop_date'] ?> </td>
                                        <td class="text-center"><?php echo $data[$i]['swp_stop_rm_name'] ?> </td>

                                    </tr>

                                <?php
                                    $j++;
                                }
                                ?>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div> -->




    </body>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            let table = new DataTable('#Show_data_table');
            let tabe = new DataTable('#table');
        });
    </script>


</html>