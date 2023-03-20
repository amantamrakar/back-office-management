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
                        <th width="%1" class="text-center" style="font-weight: 300;">Count</th>
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
                        if ($title != 'COB') { ?>
                            <th width="%5" class="text-center" style="font-weight: 300;">Amount</th>
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
                            <th width="5%" class="text-center" style="font-weight: 300;">Other Info</th>
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
                            <th width="10%" class="text-center" style="font-weight: 300;">Remark<br>Date</th>
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
                            <th width="15%" class="text-center" style="font-weight: 300;">Remark</th>
                        <?php }
                        ?>
                        <?php
                        if ($title == 'COB') { ?>
                            <th width="5%" class="text-center" style="font-weight: 300;">Activity</th>
                            <th width="10%" class="text-center" style="font-weight: 300;" style="">Related <br> Use</th>
                            <th width="5%" class="text-center" style="font-weight: 300;">Other <br> Info</th>
                            <th width="5%" class="text-center" style="font-weight: 300;">Remark</th>
                        <?php }
                        ?>
                        <?php
                        if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION') { ?>
                            <th width="5%" class="text-center" style="font-weight: 300;">Information</th>
                        <?php }
                        ?>
                    </thead>

                    <tbody>
                        <?php
                        $j = 1;
                        $total_amount = 0;
                        for ($i = 0; $i < count($data); $i++) { ?>
                            <!-- -----------------solve rejection name head problem---------------------- -->
                            <?php
                            $reject = '';
                            $style = '';
                            if ($title == 'LUMPSUM') {
                                $reject =  $data[$i]['lum_remark'];
                                $reject_name =  $data[$i]['lum_rejection'];
                            } elseif ($title == 'SIP') {
                                $reject =  $data[$i]['sip_remark'];
                                $reject_name = $data[$i]['sip_remark_content'];
                            } elseif ($title == 'REDEMPTION') {
                                $reject =  $data[$i]['redem_remark'];
                                $reject_name =  $data[$i]['redem_reason_rejection'];
                            } elseif ($title == 'SWITCH') {
                                $reject = $data[$i]['switch_remark'];
                            } elseif ($title == 'STP') {
                                $reject =  $data[$i]['stp_remark'];
                            } elseif ($title == 'SWP') {
                                $reject = $data[$i]['swp_duration'];
                            } elseif ($title == 'COB') {
                                $reject = $data[$i]['cob_remark'];
                                $reject_name = $data[$i]['cob_remark'];
                            } elseif ($title == 'SIP-STOP') {
                                $reject =  $data[$i]['sip_stop_remark'];
                                $reject_name =  $data[$i]['sip_stop_remark'];
                            } elseif ($title == 'STP-STOP') {
                                $reject = $data[$i]['stp_stop_remark'];
                                $reject_name = $data[$i]['stp_stop_remark'];
                            } elseif ($title == 'SWP-STOP') {
                                $reject = $data[$i]['swp_stop_remark'];
                                $reject_name = $data[$i]['swp_stop_remark'];
                            }

                            if ($reject == 'Reject') {
                                $style = "background:rgba(255, 136, 136, 0.59)";
                            } elseif ($reject == 'Choose' || empty($reject)) {
                                $style = "background:rgb(224 235 63 / 59%)";
                            }
                            ?>
                            <!-- -----------------solve rejection name head problem---------------------- -->
                            <?php
                            if ($title != 'COB') { ?>
                                <?php $total_amount += intval($data[$i]['' . $tag . '_amount']);  ?>

                            <?php
                            }
                            ?>
                            <tr class="" style="<?php echo $style ?>">
                                <td class="text-center"><?php echo $j ?> </td>
                                <td class="">
                                    <span><span class="fw-bold">Client Name:
                                        </span><?php echo $data[$i]['' . $tag . '_client_name'] ?></span><br>
                                    <?php
                                    if ($title == 'LUMPSUM' || $title == 'SIP') { ?>
                                        <!-- <span><span class="fw-bold">Fund : </span><?php echo $data[$i]['' . $tag . '_fund'] ?></span><br> -->
                                        <span><span class="fw-bold">Pan No.:
                                            </span><?php echo $data[$i]['' . $tag . '_pan_no'] ?></span><br>
                                        <span><span class="fw-bold">Client Type:
                                            </span><?php echo $data[$i]['' . $tag . '_client_type'] ?></span><br>

                                    <?php
                                    }
                                    ?>
                                    <span><span class="fw-bold">Date: </span><?php echo $data[$i]['' . $tag . '_date'] ?>
                                    </span>

                                </td>
                                <td class="">
                                    <?php

                                    if ($title != 'COB') {
                                        if ($title != 'STP-STOP') { ?>
                                            <span><span class="fw-bold">Scheme Name:
                                                </span><?php echo $data[$i]['' . $tag . '_scheme'] ?></span><br>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION' || $title == 'SIP-STOP') { ?>
                                            <span><span class="fw-bold">Fund Name:
                                                </span><?php echo $data[$i]['' . $tag . '_fund'] ?></span><br>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($title == 'SWITCH' || $title == 'STP') { ?>
                                            <span><span class="fw-bold">Scheme Switch To:
                                                </span><?php echo $data[$i]['' . $tag . '_to_scheme'] ?></span><br>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($title == 'STP-STOP') { ?>
                                            <span><span class="fw-bold">Scheme Name:
                                                </span><?php echo $data[$i]['' . $tag . '_from_scheme_name'] ?></span><br>
                                            <span><span class="fw-bold">STP to Scheme:
                                                </span><?php echo $data[$i]['stp_stop_to_scheme_name'] ?></span><br>
                                        <?php
                                        }
                                        ?>
                                        <span><span class="fw-bold">Folio No.:
                                            </span><?php echo $data[$i]['' . $tag . '_folio_no'] ?> </span><br>
                                        <span><span class="fw-bold">Submit Place:
                                            </span><?php echo $data[$i]['' . $tag . '_submit'] ?></span><br>
                                        <span><span class="fw-bold">Amount:
                                            </span><?php echo $data[$i]['' . $tag . '_amount'] ?> </span><br>
                                    <?php
                                    } else { ?>
                                        <span><span class="fw-bold">Submit:
                                            </span><?php echo $data[$i]['' . $tag . '_submit_place'] ?></span><br>
                                        <span><span class="fw-bold">Folio No. :
                                            </span><?php echo $data[$i]['' . $tag . '_folio_no'] ?></span><br>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <?php
                                if ($title != 'COB') { ?>
                                    <td><?php echo $data[$i]['' . $tag . '_amount'] ?> </td>
                                <?php
                                }
                                ?>
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
                                    <td class="text-center"><?php echo $data[$i]['' . $tag . '_remark'] ?></td>
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
                                        <span><span class="fw-bold">Freedom Mitra:
                                            </span><?php echo $data[$i]['sip_freedom_mitra'] ?></span><br>
                                        <span><span class="fw-bold">Category:
                                            </span><?php echo $data[$i]['sip_category'] ?></span><br>
                                        <span><span class="fw-bold">Continue/Stop:
                                            </span><?php echo $data[$i]['sip_continue_stop'] ?> </span><br>
                                        <span><span class="fw-bold">Target-Boost-SIP:
                                            </span><?php echo $data[$i]['sip_target_boster_sip'] ?> </span><br>
                                    </td>

                                <?php }
                                ?>
                                <?php
                                if ($title == 'REDEMPTION') { ?>
                                    <td>
                                        <span><span class="fw-bold">Mode of Payment:
                                            </span><?php echo $data[$i]['' . $tag . '_mode_of_pay'] ?></span><br>
                                        <span><span class="fw-bold">Bank Name:
                                            </span><?php echo $data[$i]['' . $tag . '_bank_name'] ?> </span><br>
                                        <span><span class="fw-bold">Account No.:
                                            </span><?php echo $data[$i]['' . $tag . '_account_no'] ?></span><br>
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
                                    <td class="text-center">
                                        <?php echo '[' . $data[$i]['stp_date_1'] . ']<br>to<br>[' . $data[$i]['stp_date_2'] . ']' ?>
                                    </td>
                                    <td class="text-center"><?php echo $data[$i]['stp_comp_continue'] ?></td>
                                    <td class="text-center"><?php echo $data[$i]['stp_other_info'] ?></td>
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
                                    <td class="text-center">
                                        <?php echo $data[$i]['sip_stop_pause_date_from'] . '<br>TO<br>' . $data[$i]['sip_stop_pause_date_to'] ?>
                                    </td>
                                    <td class="text-center"><?php echo $data[$i]['sip_stop_remark_date']  ?></td>
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
                                    <td class="text-center"><?php echo $data[$i]['swp_stop_remark'] ?></td>
                                <?php }
                                ?>
                                <?php
                                if ($title == 'COB') { ?>
                                    <td class="text-center"><?php echo $data[$i]['cob_activity'] ?></td>
                                    <td class="text-center"><?php echo $data[$i]['cob_related_use'] ?> </td>
                                    <td class="text-center"><?php echo $data[$i]['cob_other_info'] ?></td>
                                    <td class="text-center"><?php echo $data[$i]['cob_remark'] ?></td>
                                <?php }
                                ?>
                                <?php
                                if ($title == 'LUMPSUM' || $title == 'SIP' || $title == 'REDEMPTION') { ?>
                                    <td class="text-center"><?php echo $reject_name ?></td>
                                <?php }
                                ?>

                            </tr>
                        <?php
                            $j++;
                        }
                        ?>
                    </tbody>
                    <tfoot class="text-center text-white bg-dark">
                        <tr>
                            <?php
                            if ($title != 'COB') { ?>
                                <?php
                                // if ($title == 'LUMPSUM') { 
                                ?>
                                <td>Total : </td>
                                <td></td>
                                <td></td>
                                <td><?php echo number_format($total_amount)  ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <?php
                                if ($title != 'SWP-STOP') {
                                ?>
                                    <td></td>
                                <?php
                                }
                                ?>
                                <?php
                                if ($title == 'LUMPSUM' || $title == 'SWITCH' || $title == 'SWP'  || $title == 'STP-STOP') {
                                ?>
                                    <td></td>
                                <?php
                                }
                                if ($title == 'STP') { ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>






</body>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        let table = new DataTable('#Show_data_table');
        let tabe = new DataTable('#table');
    });
</script>


</html>