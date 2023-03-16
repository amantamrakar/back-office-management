<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">
<title><?php echo $page_title ?></title>
<?php
$nav_arr = array('LUMPSUM', 'SIP', 'REDEMPTION', 'SWITCH', 'STP',  'SWP', 'SIP-STOP', 'STP-STOP', 'SWP-STOP', 'COB');
// echo $_GET['form'];
?>
<div class="container-fluid mt-3">
    <div class="row text-center">
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
        <?php
        for ($i = 0; $i < count($nav_arr); $i++) { ?>
            <div class="col-lg-1 col-md-2 col-sm-12">
                <input type="radio" id="<?php echo $nav_arr[$i] ?>" data-form_value="<?php echo $nav_arr[$i] ?>" class="form_type " name="select_1" value="" <?php
                                                                                                                                                                if ($nav_arr[$i] == 'LUMPSUM') {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }
                                                                                                                                                                ?>>
                <label class="labling" for="<?php echo $nav_arr[$i] ?>">
                    <img class="mt-3" src="<?php echo base_url('asset/image/LOGO ICON.png') ?>" alt="" srcset="" style="width: 30px;height:30px">
                    <p class="mt-3" id=""><?php echo $nav_arr[$i] ?></p>
                </label>
            </div>
        <?php
        }
        ?>
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
    </div>
</div>

<div class="container-fluid mt-3" id="show_all_data">

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script>
    function get_data_by_reload(value) {
        $.ajax({
            type: "post",
            url: "<?php echo  base_url() . 'show_data/show_all_client_data' ?>",
            data: {
                form_value: value
            },
            success: function(response) {
                $("#show_all_data").html(response)
            }
        });
    }
    $(document).ready(function() {
        var form = $('.form_type').data('form_value');
        get_data_by_reload(form);
    });

    $(".form_type").click(function(e) {
        var form = $(this).data('form_value');
        $.ajax({
            type: "post",
            url: "<?php echo  base_url() . 'show_data/show_all_client_data' ?>",
            data: {
                form_value: form
            },
            success: function(response) {
                $("#show_all_data").html(response)
            }
        });
    })
</script>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['lum_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Pan No.: </span><?php echo $get[$i]['lum_pan_no'] ?></span><br>
                                            <span><span class="fw-bold">Client Type: </span><?php echo $get[$i]['lum_client_type'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['lum_date'] ?> </span>

                                        </td>
                                        <td class="">
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['lum_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $get[$i]['lum_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Fund Name: </span><?php echo $get[$i]['lum_fund'] ?></span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $get[$i]['lum_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $get[$i]['lum_amount'] ?> </span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_category'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_rejection'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['lum_after_liquid_fund'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['sip_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Pan No.: </span><?php echo $get[$i]['sip_pan_no'] ?></span><br>
                                            <span><span class="fw-bold">Client Type: </span><?php echo $get[$i]['sip_client_type'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['sip_date'] ?> </span>
                                        </td>
                                        <td class="">
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['sip_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $get[$i]['sip_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Fund Name: </span><?php echo $get[$i]['sip_fund'] ?></span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $get[$i]['sip_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $get[$i]['sip_amount'] ?> </span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_ecs_date'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_freedom_mitra'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_remark_content'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_rm_name'] ?> </td> 
                                        <td class="text-center">
                                            <span><span class="fw-bold">Category: </span><?php echo $get[$i]['sip_category'] ?></span><br>
                                            <span><span class="fw-bold">Continue/Stop: </span><?php echo $get[$i]['sip_continue_stop'] ?> </span><br>
                                            <span><span class="fw-bold">RM Name: </span><?php echo $get[$i]['sip_rm_name'] ?> </span><br>
                                            <span><span class="fw-bold">Target-Boost-SIP: </span><?php echo $get[$i]['sip_target_boster_sip'] ?> </span><br>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['redem_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['redem_date'] ?> </span>
                                        </td>
                                        <td class="">
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['redem_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $get[$i]['redem_folio_no'] ?> </span><br>
                                            <span><span class="fw-bold">Fund Name: </span><?php echo $get[$i]['redem_fund'] ?></span><br>
                                            <span><span class="fw-bold">Submit Place: </span><?php echo $get[$i]['redem_submit'] ?></span><br>
                                            <span><span class="fw-bold">Amount: </span><?php echo $get[$i]['redem_amount'] ?> </span><br>
                                        </td>
                                        <td><?php echo $get[$i]['redem_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['redem_month'] ?> </td>
                                        <td><?php echo $get[$i]['redem_of_on'] ?> </td>
                                        <td class="">
                                            <span><span class="fw-bold">Mode of Payment: </span><?php echo $get[$i]['redem_mode_of_pay'] ?></span><br>
                                            <span><span class="fw-bold">Bank Name: </span><?php echo $get[$i]['redem_bank_name'] ?> </span><br>
                                            <span><span class="fw-bold">Account No.: </span><?php echo $get[$i]['redem_account_no'] ?></span><br>

                                        </td>


                                        <td class="text-center"><?php echo $get[$i]['redem_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['redem_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['redem_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['redem_reason_rejection'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['switch_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['switch_date'] ?> </span>
                                        </td>
                                        <td class="text-center">
                                            <span><span class="fw-bold">Amc Name: </span><?php echo $get[$i]['switch_amc_name'] ?></span><br>
                                        </td>
                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['switch_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit : </span><?php echo $get[$i]['switch_submit'] ?></span><br>
                                            <span><span class="fw-bold">Scheme Switch To: </span><?php echo $get[$i]['switch_to_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No.: </span><?php echo $get[$i]['switch_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $get[$i]['switch_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_stp_switch'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_l_e'] ?> </td>

                                        <td class="text-center"><?php echo $get[$i]['switch_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['switch_rm_name'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['stp_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['stp_date'] ?> </span>
                                        </td>
                                        <td class="text-center">
                                            <span><?php echo $get[$i]['stp_amc_name'] ?></span><br>
                                        </td>
                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['stp_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $get[$i]['stp_submit'] ?></span><br>
                                            <span><span class="fw-bold">STP to Scheme: </span><?php echo $get[$i]['stp_to_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $get[$i]['stp_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $get[$i]['stp_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_l_e'] ?> </td>
                                        <td class="text-center"><?php echo '[' . $get[$i]['stp_date_1'] . ']<br>to<br>[' . $get[$i]['stp_date_2'] . ']' ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_comp_continue'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stp_type'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['swp_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['swp_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['swp_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $get[$i]['swp_submit'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $get[$i]['swp_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $get[$i]['swp_amount'] ?></span><br>
                                        </td>

                                        <td><?php echo $get[$i]['swp_s_no'] ?> </td>
                                        <td><?php echo $get[$i]['swp_month'] ?> </td>
                                        <td><?php echo $get[$i]['swp_of_on'] ?> </td>

                                        <td><?php echo $get[$i]['swp_done_ok'] ?> </td>
                                        <td><?php echo $get[$i]['swp_date_start'] ?> </td>
                                        <td><?php echo $get[$i]['swp_date_end'] ?> </td>
                                        <td><?php echo $get[$i]['swp_duration'] ?> </td>
                                        <td><?php echo $get[$i]['swp_no_head'] ?> </td>
                                        <td><?php echo $get[$i]['swp_other_info'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['cob_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['cob_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Submit: </span><?php echo $get[$i]['cob_submit_place'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $get[$i]['cob_folio_no'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_mode'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_activity'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_related_use'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['cob_other_info'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['sip_stop_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['sip_stop_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['sip_stop_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $get[$i]['sip_stop_submit'] ?></span><br>
                                            <span><span class="fw-bold">Fund: </span><?php echo $get[$i]['sip_stop_fund'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $get[$i]['sip_stop_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $get[$i]['sip_stop_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_remark_date'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_pause'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['sip_stop_pause_date_from'] . '<br>TO<br>' . $get[$i]['sip_stop_pause_date_to'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['stp_stop_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['stp_stop_date'] ?> </span>
                                        </td>
                                        <td class="text-center">
                                            <span><?php echo $get[$i]['stp_stop_amc_name'] ?></span><br>
                                        </td>
                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['stp_stop_from_scheme_name'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $get[$i]['stp_stop_submit'] ?></span><br>
                                            <span><span class="fw-bold">STP to Scheme: </span><?php echo $get[$i]['stp_stop_to_scheme_name'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $get[$i]['stp_stop_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $get[$i]['stp_stop_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_l_e'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_remark'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_rm_name'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['stp_stop_other_info'] ?> </td>

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
                                            <span><span class="fw-bold">Client Name: </span><?php echo $get[$i]['swp_stop_client_name'] ?></span><br>
                                            <span><span class="fw-bold">Date: </span><?php echo $get[$i]['swp_stop_date'] ?> </span>
                                        </td>

                                        <td>
                                            <span><span class="fw-bold">Scheme Name: </span><?php echo $get[$i]['swp_stop_scheme'] ?></span><br>
                                            <span><span class="fw-bold">Submit: </span><?php echo $get[$i]['swp_stop_submit'] ?></span><br>
                                            <span><span class="fw-bold">Folio No. : </span><?php echo $get[$i]['swp_stop_folio_no'] ?></span><br>
                                            <span><span class="fw-bold">Amount : </span><?php echo $get[$i]['swp_stop_amount'] ?></span><br>
                                        </td>
                                        <td class="text-center"><?php echo $get[$i]['swp_stop_s_no'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['swp_stop_month'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['swp_stop_of_on'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['swp_stop_done_ok'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['swp_stop_stop_date'] ?> </td>
                                        <td class="text-center"><?php echo $get[$i]['swp_stop_rm_name'] ?> </td>

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