<?php
$month = array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Decemeber');
?>
<!-- UPDATE `lumpsum` SET `lum_month` = 'June' WHERE `lum_month` = 'JUNE' -->
<div class="row">
    <input type="text" name="update_id" id="" value="<?php echo $client_id ?>" hidden>
    <input type="text" name="table_type" id="" value="<?php echo $title ?>" hidden>

    <?php


    if ($title == 'LUMPSUM') {
        // echo my_arr($get_data);
    ?>

        <div class="col-md-3 col-sm-12">
            <label for="lum_date">Date</label>
            <input class="form-control form-control-sm mt-1" type="date" name="lum_date" id="lum_date" value="<?php echo $get_data[0]['lum_date'] ?>">
        </div>

        <div class="col-md-3 col-sm-12">
            <label for="lum_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_s_no" id="lum_s_no" value="<?php echo $get_data[0]['lum_s_no'] ?>">
        </div>

        <div class="col-md-3 col-sm-12">
            <label for="lum_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="lum_month" id="lum_month" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['lum_month']) { ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    } else { ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php  }
                    ?>
                <?php
                }
                ?>

            </select>
        </div>

        <div class="col-md-3 col-sm-12">
            <label for="lum_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="lum_of_on" id="lum_of_on" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['lum_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_of_on'] ?>"><?php echo $get_data[0]['lum_of_on'] ?></option>
                    <option value="OFF">Off</option>
                <?php
                } elseif ($get_data[0]['lum_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_of_on'] ?>"><?php echo $get_data[0]['lum_of_on'] ?></option>
                    <option value="ON">ON</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="OFF">OFF</option>
                    <option value="ON">ON</option>
                <?php
                }

                ?>
            </select>
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_client_name" id="lum_client_name" value="<?php echo $get_data[0]['lum_client_name'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_fund">Fund Name</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_fund" id="lum_fund" value="<?php echo $get_data[0]['lum_fund'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_scheme" id="lum_scheme" value="<?php echo $get_data[0]['lum_scheme'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_scheme">Submit Place</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_submit" id="lum_submit" value="<?php echo $get_data[0]['lum_submit'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_pan_no">Pan No.</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_pan_no" id="lum_pan_no" value="<?php echo $get_data[0]['lum_pan_no'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_folio_no" id="lum_folio_no" value="<?php echo $get_data[0]['lum_folio_no'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_amount" id="lum_amount" value="<?php echo $get_data[0]['lum_amount'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="lum_remark" id="lum_remark" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['lum_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_remark'] ?>"><?php echo $get_data[0]['lum_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['lum_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_remark'] ?>"><?php echo $get_data[0]['lum_remark'] ?></option>
                    <option value="Clear">Clear</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="lum_done_ok" id="lum_done_ok" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['lum_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_done_ok'] ?>"><?php echo $get_data[0]['lum_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <!-- <option value="Blank">Blank</option> -->
                    <option value="OK">OK</option>
                <?php
                }

                ?>
            </select>
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_rm_name" id="lum_rm_name" value="<?php echo $get_data[0]['lum_rm_name'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_client_type">Client Type</label>
            <select class="form-select form-select-sm mt-1" name="lum_client_type" id="lum_client_type" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['lum_client_type'] == "EXISTING") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_client_type'] ?>"><?php echo $get_data[0]['lum_client_type'] ?></option>
                    <option value="NEW">NEW</option>
                <?php
                } elseif ($get_data[0]['lum_client_type'] == "NEW") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_client_type'] ?>"><?php echo $get_data[0]['lum_client_type'] ?></option>
                    <option value="EXISTING">EXISTING</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="NEW">NEW</option>
                    <option value="EXISTING">EXISTING</option>
                <?php
                }

                ?>
            </select>
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_category">Category</label>
            <select class="form-select form-select-sm mt-1" name="lum_category" id="lum_category" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Liquid">Liquid</option>
                <option value="Equity">Equity</option>
                <option value="Debt">Debt</option> -->
                <?php
                if ($get_data[0]['lum_category'] == "LIQUID") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_category'] ?>"><?php echo $get_data[0]['lum_category'] ?></option>
                    <option value="EQUITY">EQUITY</option>
                    <option value="Debt">Debt</option>
                <?php
                } elseif ($get_data[0]['lum_category'] == "EQUITY") {
                ?>
                    <option>Choose</option>
                    <option value="LIQUID">LIQUID</option>
                    <option selected value="<?php echo $get_data[0]['lum_category'] ?>"><?php echo $get_data[0]['lum_category'] ?></option>
                    <option value="Debt">Debt</option>
                <?php

                } elseif ($get_data[0]['lum_category'] == "Debt") {
                ?>
                    <option>Choose</option>
                    <option value="LIQUID">LIQUID</option>
                    <option value="EQUITY">EQUITY</option>
                    <option selected value="<?php echo $get_data[0]['lum_category'] ?>"><?php echo $get_data[0]['lum_category'] ?></option>
                <?php

                } else {
                ?>
                    <option>Choose</option>
                    <option value="LIQUID">LIQUID</option>
                    <option value="EQUITY">EQUITY</option>
                    <option value="Debt">Debt</option>
                <?php
                }

                ?>


            </select>
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_rejection">Rejection</label>
            <input class="form-control form-control-sm mt-1" type="text" name="lum_rejection" id="lum_rejection" value="<?php echo $get_data[0]['lum_rejection'] ?>">
        </div>

        <div class="col-md-3 col-sm-12 mt-3">
            <label for="lum_after_liquid_fund">After Liquid Fund</label>
            <select class="form-select form-select-sm mt-1" name="lum_after_liquid_fund" id="lum_after_liquid_fund" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="STP">STP</option>
                <option value="SWP">SWP</option>
                <option value="NON">NON</option> -->
                <?php
                if ($get_data[0]['lum_after_liquid_fund'] == "STP") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['lum_after_liquid_fund'] ?>"><?php echo $get_data[0]['lum_after_liquid_fund'] ?></option>
                    <option value="SWP">SWP</option>
                    <option value="NON">NON</option>
                <?php
                } elseif ($get_data[0]['lum_after_liquid_fund'] == "SWP") {
                ?>
                    <option>Choose</option>
                    <option value="STP">STP</option>
                    <option selected value="<?php echo $get_data[0]['lum_after_liquid_fund'] ?>"><?php echo $get_data[0]['lum_after_liquid_fund'] ?></option>
                    <option value="NON">NON</option>
                <?php

                } elseif ($get_data[0]['lum_after_liquid_fund'] == "NON") {
                ?>
                    <option>Choose</option>
                    <option value="STP">STP</option>
                    <option value="SWP">SWP</option>
                    <option selected value="<?php echo $get_data[0]['lum_after_liquid_fund'] ?>"><?php echo $get_data[0]['lum_after_liquid_fund'] ?></option>
                <?php

                } else {
                ?>
                    <option>Choose</option>
                    <option value="STP">STP</option>
                    <option value="SWP">SWP</option>
                    <option value="NON">NON</option>
                <?php
                }

                ?>

            </select>
        </div>

    <?php
    } elseif ($title == 'SIP') {
        // echo my_arr($get_data);

    ?>
        <!-- Date  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_date">Date</label>
            <input class="form-control form-control-sm mt-1" type="date" value="<?php echo $get_data[0]['sip_date'] ?>" name="sip_date" id="sip_date">
        </div>
        <!-- Sno -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" type="text" name="sip_s_no" id="sip_s_no" value="<?php echo $get_data[0]['sip_s_no'] ?>">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="sip_month" id="sip_month" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['sip_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>

            </select>
        </div>
        <!-- On/Off  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="sip_of_on" id="sip_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['sip_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_of_on'] ?>"><?php echo $get_data[0]['sip_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['sip_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['sip_of_on'] ?>"><?php echo $get_data[0]['sip_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Client Name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_client_name'] ?>" name="sip_client_name" id="sip_client_name">
        </div>
        <!-- Fund Name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_fund">Fund Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_fund'] ?>" name="sip_fund" id="sip_fund">
        </div>
        <!-- Scheme Name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_scheme'] ?>" name="sip_scheme" id="sip_scheme">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_submit'] ?>" name="sip_submit" id="sip_submit">
        </div>
        <!-- PAN num.  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_pan_no">Pan No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_pan_no'] ?>" type="text" name="sip_pan_no" id="sip_pan_no">
        </div>
        <!-- Folio Num.  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_folio_no'] ?>" name="sip_folio_no" id="sip_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_amount'] ?>" name="sip_amount" id="sip_amount">
        </div>
        <!-- ECS date  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_ecs_date">ECS Date</label>
            <input class="form-control form-control-sm mt-1" type="date" value="<?php echo $get_data[0]['sip_ecs_date'] ?>" name="sip_ecs_date" id="sip_ecs_date">
        </div>
        <!-- Rmark  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="sip_remark" id="sip_remark" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Clear">Clear</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['sip_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_remark'] ?>"><?php echo $get_data[0]['sip_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['sip_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option value="Clear">Clear</option>
                    <option selected value="<?php echo $get_data[0]['sip_remark'] ?>"><?php echo $get_data[0]['sip_remark'] ?></option>
                <?php
                } else {
                ?>
                    <option>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="sip_done_ok" id="sip_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['sip_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_done_ok'] ?>"><?php echo $get_data[0]['sip_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Freedom Mitra  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_freedom_mitra">Freedom Mitra</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_freedom_mitra'] ?>" name="sip_freedom_mitra" id="sip_freedom_mitra">
        </div>
        <!-- Remark Content -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_remark_content">Remark Content</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_remark_content'] ?>" name="sip_remark_content" id="sip_remark_content">
        </div>
        <!-- Continue Stop  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_continue_stop">Continue/Stop</label>
            <select class="form-select form-select-sm mt-1" name="sip_continue_stop" id="sip_continue_stop" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Continue">Continue</option>
                <option value="Stop">Stop</option> -->
                <?php
                if ($get_data[0]['sip_continue_stop'] == "CONTINUE ") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_continue_stop'] ?>"><?php echo $get_data[0]['sip_continue_stop'] ?></option>
                    <option value="STOP">STOP</option>
                <?php
                } elseif ($get_data[0]['sip_continue_stop'] == "STOP") {
                ?>
                    <option>Choose</option>
                    <option value="CONTINUE">CONTINUE</option>
                    <option selected value="<?php echo $get_data[0]['sip_continue_stop'] ?>"><?php echo $get_data[0]['sip_continue_stop'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="CONTINUE">CONTINUE</option>
                    <option value="STOP">STOP</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_telly_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_rm_name'] ?>" type="text" name="sip_rm_name" id="sip_rm_name">
        </div>
        <!-- Category  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_category">Category</label>
            <select class="form-select form-select-sm mt-1" name="sip_category" id="sip_category" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Liquid">Liquid</option>
                <option value="Equity">Equity</option>
                <option value="Debt">Debt</option> -->
                <?php
                if ($get_data[0]['sip_category'] == "LIQUID") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_category'] ?>"><?php echo $get_data[0]['sip_category'] ?></option>
                    <option value="EQUITY">EQUITY</option>
                    <option value="Debt">Debt</option>
                <?php
                } elseif ($get_data[0]['sip_category'] == "EQUITY") {
                ?>
                    <option>Choose</option>
                    <option value="LIQUID">LIQUID</option>
                    <option selected value="<?php echo $get_data[0]['sip_category'] ?>"><?php echo $get_data[0]['sip_category'] ?></option>
                    <option value="Debt">Debt</option>
                <?php

                } elseif ($get_data[0]['sip_category'] == "Debt") {
                ?>
                    <option>Choose</option>
                    <option value="LIQUID">LIQUID</option>
                    <option value="EQUITY">EQUITY</option>
                    <option selected value="<?php echo $get_data[0]['sip_category'] ?>"><?php echo $get_data[0]['sip_category'] ?></option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="LIQUID">LIQUID</option>
                    <option value="EQUITY">EQUITY</option>
                    <option value="Debt">Debt</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Clint Type  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_client_type">Client Type</label>
            <select class="form-select form-select-sm mt-1" name="sip_client_type" id="sip_client_type" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Existng">Existng</option>
                <option value="New-Client">New-Client</option> -->
                <?php
                if ($get_data[0]['sip_client_type'] == "EXISTING") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_client_type'] ?>"><?php echo $get_data[0]['sip_client_type'] ?></option>
                    <option value="NEW">New-Client</option>
                <?php
                } elseif ($get_data[0]['sip_client_type'] == "NEW") {
                ?>
                    <option>Choose</option>
                    <option value="EXISTING">EXISTING</option>
                    <option selected value="<?php echo $get_data[0]['sip_client_type'] ?>"><?php echo $get_data[0]['sip_client_type'] ?></option>
                <?php
                } else {
                ?>
                    <option>Choose</option>
                    <option value="EXISTING">EXISTING</option>
                    <option value="NEW">New-Client</option>
                <?php
                }

                ?>
            </select>
        </div>
    <?php
    } elseif ($title == 'REDEMPTION') {

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="redem_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_date'] ?>" type="date" name="redem_date" id="redem_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="redem_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_s_no'] ?>" type="text" name="redem_s_no" id="redem_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="redem_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="redem_month" id="redem_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['redem_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="redem_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="redem_of_on" id="redem_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['redem_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['redem_of_on'] ?>"><?php echo $get_data[0]['redem_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['redem_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['redem_of_on'] ?>"><?php echo $get_data[0]['redem_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['redem_client_name'] ?>" name="redem_client_name" id="redem_client_name">
        </div>
        <!-- fund Name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_fund">Fund Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_fund'] ?>" type="text" name="redem_fund" id="redem_fund">
        </div>
        <!-- Scheme Name -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_scheme'] ?>" type="text" name="redem_scheme" id="redem_scheme">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_submit'] ?>" type="text" name="redem_submit" id="redem_submit">
        </div>
        <!-- Mode of Payment  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_mode_of_pay">Mode Of Payment</label>
            <?php
            $mop_arr = array('CHEQUE', 'NEFT', 'RTGS', 'DC');
            ?>
            <select class="form-select form-select-sm mt-1" name="redem_mode_of_pay" id="redem_mode_of_pay" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($mop_arr); $i++) {
                    if ($mop_arr[$i] == $get_data[0]['redem_mode_of_pay']) {
                ?>
                        <option selected value="<?php echo $get_data[0]['redem_mode_of_pay'] ?>"><?php echo $get_data[0]['redem_mode_of_pay'] ?></option>
                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $mop_arr[$i] ?>"><?php echo $mop_arr[$i] ?></option>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>

            </select>
        </div>
        <!-- bank name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_bank_name">Bank Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['redem_bank_name'] ?>" name="redem_bank_name" id="redem_bank_name">
        </div>
        <!-- account Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_account_no">Account No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_account_no'] ?>" type="text" name="redem_account_no" id="redem_account_no">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_folio_no'] ?>" type="text" name="redem_folio_no" id="redem_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_amount'] ?>" type="text" name="redem_amount" id="redem_amount">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="redem_done_ok" id="redem_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['redem_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['redem_done_ok'] ?>"><?php echo $get_data[0]['redem_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Remark -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="redem_remark" id="redem_remark" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Clear">Clear</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['redem_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['redem_remark'] ?>"><?php echo $get_data[0]['redem_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['redem_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option value="Clear">Clear</option>
                    <option selected value="<?php echo $get_data[0]['redem_remark'] ?>"><?php echo $get_data[0]['redem_remark'] ?></option>
                <?php
                } else {
                ?>
                    <option>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_rm_name'] ?>" type="text" name="redem_rm_name" id="redem_rm_name">
        </div>
        <!-- reason for rejection  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="redem_reason_rejection">Reason For Rejection</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['redem_reason_rejection'] ?>" type="text" name="redem_reason_rejection" id="redem_reason_rejection">
        </div>
    <?php
    } elseif ($title == 'SWITCH') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="switch_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_date'] ?>" type="date" name="switch_date" id="switch_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="switch_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_s_no'] ?>" type="text" name="switch_s_no" id="switch_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="switch_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="switch_month" id="switch_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['switch_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="switch_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="switch_of_on" id="switch_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['switch_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['switch_of_on'] ?>"><?php echo $get_data[0]['switch_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['switch_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['switch_of_on'] ?>"><?php echo $get_data[0]['switch_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['switch_client_name'] ?>" name="switch_client_name" id="switch_client_name">
        </div>
        <!-- STP or switch  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_stp_switch">STP or Switch</label>
            <?php $stp_switch_arr = array('FOR NFO', 'ONLY SWITCH', 'STP DONE', 'SWITCH DONE', 'SWP DONE') ?>
            <select class="form-select form-select-sm mt-1" name="switch_stp_switch" id="switch_stp_switch" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($stp_switch_arr); $i++) {
                    if ($stp_switch_arr[$i] == $get_data[0]['switch_stp_switch']) {
                ?>
                        <option selected value="<?php echo $get_data[0]['switch_stp_switch'] ?>"><?php echo $get_data[0]['switch_stp_switch'] ?></option>
                    <?php
                    } else {

                    ?>
                        <option value="<?php echo $stp_switch_arr[$i] ?>"><?php echo $stp_switch_arr[$i] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <!-- AMC name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_amc_name">AMC Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_amc_name'] ?>" type="text" name="switch_amc_name" id="switch_amc_name">
        </div>
        <!-- L/E  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_l_e">L/E</label>
            <?php $l_e_arr = array('L2E', 'E2E', 'E2L', 'IDCW TO REG') ?>
            <select class="form-select form-select-sm mt-1" name="switch_l_e" id="switch_l_e" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($l_e_arr); $i++) {
                    if ($l_e_arr[$i] == $get_data[0]['switch_l_e']) {
                ?>
                        <option selected value="<?php echo $get_data[0]['switch_l_e'] ?>"><?php echo $get_data[0]['switch_l_e'] ?></option>
                    <?php
                    } else {

                    ?>
                        <option value="<?php echo $l_e_arr[$i] ?>"><?php echo $l_e_arr[$i] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <!-- Scheme Name -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_scheme'] ?>" type="text" name="switch_scheme" id="switch_scheme">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_submit'] ?>" type="text" name="switch_submit" id="switch_submit">
        </div>
        <!-- to shem name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_to_scheme">To Scheme Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['switch_to_scheme'] ?>" name="switch_to_scheme" id="switch_to_scheme">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_folio_no'] ?>" type="text" name="switch_folio_no" id="switch_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_amount'] ?>" type="text" name="switch_amount" id="switch_amount">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="switch_done_ok" id="switch_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['switch_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['switch_done_ok'] ?>"><?php echo $get_data[0]['switch_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Remark -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="switch_remark" id="switch_remark" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Clear">Clear</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['switch_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['switch_remark'] ?>"><?php echo $get_data[0]['switch_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['switch_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option value="Clear">Clear</option>
                    <option selected value="<?php echo $get_data[0]['switch_remark'] ?>"><?php echo $get_data[0]['switch_remark'] ?></option>
                <?php
                } else {
                ?>
                    <option>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="switch_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['switch_rm_name'] ?>" type="text" name="switch_rm_name" id="switch_rm_name">
        </div>
    <?php
    } elseif ($title == 'STP') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_date'] ?>" type="date" name="stp_date" id="stp_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_s_no'] ?>" type="text" name="stp_s_no" id="stp_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="stp_month" id="stp_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['stp_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="stp_of_on" id="stp_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['stp_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_of_on'] ?>"><?php echo $get_data[0]['stp_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['stp_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['stp_of_on'] ?>"><?php echo $get_data[0]['stp_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['stp_client_name'] ?>" name="stp_client_name" id="stp_client_name">
        </div>
        <!-- AMC name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_amc_name">AMC Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_amc_name'] ?>" type="text" name="stp_amc_name" id="stp_amc_name">
        </div>
        <!-- L/E  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_l_e">L/E</label>
            <?php $l_e_arr = array('L2E', 'E2E', 'E2L', 'IDCW TO REG') ?>
            <select class="form-select form-select-sm mt-1" name="stp_l_e" id="stp_l_e" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($l_e_arr); $i++) {
                    if ($l_e_arr[$i] == $get_data[0]['stp_l_e']) {
                ?>
                        <option selected value="<?php echo $get_data[0]['stp_l_e'] ?>"><?php echo $get_data[0]['stp_l_e'] ?></option>
                    <?php
                    } else {

                    ?>
                        <option value="<?php echo $l_e_arr[$i] ?>"><?php echo $l_e_arr[$i] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <!-- Scheme Name -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_scheme'] ?>" type="text" name="stp_scheme" id="stp_scheme">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_submit'] ?>" type="text" name="stp_submit" id="stp_submit">
        </div>
        <!-- to schem name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_to_scheme">To Scheme Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['stp_to_scheme'] ?>" name="stp_to_scheme" id="stp_to_scheme">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_folio_no'] ?>" type="text" name="stp_folio_no" id="stp_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_amount'] ?>" type="text" name="stp_amount" id="stp_amount">
        </div>
        <!-- Date 1  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_date_1">Date 1</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_date_1'] ?>" type="date" name="stp_date_1" id="stp_date_1">
        </div>
        <!-- Date 2  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_date_2">Date To</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_date_2'] ?>" type="date" name="stp_date_2" id="stp_date_2">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="stp_done_ok" id="stp_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['stp_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_done_ok'] ?>"><?php echo $get_data[0]['stp_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Remark -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="stp_remark" id="stp_remark" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Clear">Clear</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['stp_remark'] == "Weekly") {
                ?>
                    <option value="">choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Monthly">Monthly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['stp_remark'] == "Monthly") {
                ?>
                    <option value="">choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['stp_remark'] == "Quaterly") {
                ?>
                    <option value="">choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['stp_remark'] == "Reject") {
                ?>
                    <option value="">choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Quaterly">Quaterly</option>
                <?php
                } else {
                ?>
                    <option value="">choose</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_rm_name'] ?>" type="text" name="stp_rm_name" id="stp_rm_name">
        </div>
        <!-- complete / continue  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_comp_continue">Complete / Continue</label>
            <select class="form-select form-select-sm mt-1" name="stp_comp_continue" id="stp_comp_continue" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="COMPLETE">Complete</option>
                <option value="CONTINUE">Continue</option> -->
                <?php
                if ($get_data[0]['stp_comp_continue'] == "COMPLETE") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_comp_continue'] ?>"><?php echo $get_data[0]['stp_comp_continue'] ?></option>
                    <option value="CONTINUE">Continue</option>
                <?php
                } elseif ($get_data[0]['stp_comp_continue'] == "CONTINUE") {
                ?>
                    <option>Choose</option>
                    <option value="COMPLETE">Complete</option>
                    <option selected value="<?php echo $get_data[0]['stp_comp_continue'] ?>"><?php echo $get_data[0]['stp_comp_continue'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="COMPLETE">Complete</option>
                    <option value="CONTINUE">Continue</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- STP other  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_other_info">STP Other Info</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_other_info'] ?>" type="text" name="stp_other_info" id="stp_other_info">
        </div>
        <!-- STP Type  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stp_type">STP Type</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stp_type'] ?>" type="text" name="stp_stp_type" id="stp_stp_type">
        </div>
    <?php
    } elseif ($title == 'SWP') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_date'] ?>" type="date" name="swp_date" id="swp_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_s_no'] ?>" type="text" name="swp_s_no" id="swp_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="swp_month" id="swp_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['swp_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="swp_of_on" id="swp_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['swp_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_of_on'] ?>"><?php echo $get_data[0]['swp_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['swp_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['swp_of_on'] ?>"><?php echo $get_data[0]['swp_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['swp_client_name'] ?>" name="swp_client_name" id="swp_client_name">
        </div>
        <!-- Scheme Name -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_scheme'] ?>" type="text" name="swp_scheme" id="swp_scheme">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_submit'] ?>" type="text" name="swp_submit" id="swp_submit">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_folio_no'] ?>" type="text" name="swp_folio_no" id="swp_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_amount'] ?>" type="text" name="swp_amount" id="swp_amount">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="swp_done_ok" id="swp_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['swp_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_done_ok'] ?>"><?php echo $get_data[0]['swp_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Start Date  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_date_start">Date 1</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_date_start'] ?>" type="date" name="swp_date_start" id="swp_date_start">
        </div>
        <!-- End Date  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_date_end">Date To</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_date_end'] ?>" type="date" name="swp_date_end" id="swp_date_end">
        </div>
        <!-- Duration  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_duration">Duration/Remark</label>
            <select class="form-select form-select-sm mt-1" name="swp_duration" id="swp_duration" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['stp_remark'] == "Weekly") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Monthly">Monthly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="">choose</option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['stp_remark'] == "Monthly") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="Reject">Reject</option>
                    <option value="">choose</option>
                <?php
                } elseif ($get_data[0]['stp_remark'] == "Quaterly") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Reject">Reject</option>
                    <option value="">choose</option>
                <?php
                } elseif ($get_data[0]['stp_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_remark'] ?>"><?php echo $get_data[0]['stp_remark'] ?></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="">choose</option>
                <?php
                } else {
                ?>
                    <option>Choose</option>
                    <option value="">choose</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Quaterly">Quaterly</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- No head  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_rm_name">No Head</label>
            <select class="form-select form-select-sm mt-1" name="swp_rm_name" id="swp_rm_name" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="NG">NG</option>
                <option value="AJ">AJ</option> -->
                <?php
                if ($get_data[0]['swp_no_head'] == "NG") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_no_head'] ?>"><?php echo $get_data[0]['swp_no_head'] ?></option>
                    <option value="AJ">AJ</option>
                <?php
                } elseif ($get_data[0]['swp_no_head'] == "AJ") {
                ?>
                    <option>Choose</option>
                    <option value="NG">NG</option>
                    <option selected value="<?php echo $get_data[0]['swp_no_head'] ?>"><?php echo $get_data[0]['swp_no_head'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="NG">NG</option>
                    <option value="AJ">AJ</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- swp other Info.  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_other_info">STP Other Info.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_other_info'] ?>" type="text" name="swp_other_info" id="swp_other_info">
        </div>

    <?php
    } elseif ($title == 'SIP-STOP') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_stop_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_date'] ?>" type="date" name="sip_stop_date" id="sip_stop_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_stop_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_s_no'] ?>" type="text" name="sip_stop_s_no" id="sip_stop_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_stop_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="sip_stop_month" id="sip_stop_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['sip_stop_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="sip_stop_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="sip_stop_of_on" id="sip_stop_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['sip_stop_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_stop_of_on'] ?>"><?php echo $get_data[0]['sip_stop_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['sip_stop_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['sip_stop_of_on'] ?>"><?php echo $get_data[0]['sip_stop_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['sip_stop_client_name'] ?>" name="sip_stop_client_name" id="sip_stop_client_name">
        </div>
        <!-- Fund name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_fund">Fund Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_fund'] ?>" type="text" name="sip_stop_fund" id="sip_stop_fund ">
        </div>
        <!-- Scheme Name -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_scheme'] ?>" type="text" name="sip_stop_scheme" id="sip_stop_scheme">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_submit'] ?>" type="text" name="sip_stop_submit" id="sip_stop_submit">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_folio_no'] ?>" type="text" name="sip_stop_folio_no" id="sip_stop_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_amount'] ?>" type="text" name="sip_stop_amount" id="sip_stop_amount">
        </div>
        <!-- Remark Stop Date  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_remark_date">Remark Stop Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_remark_date'] ?>" type="date" name="sip_stop_remark_date" id="sip_stop_remark_date">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="sip_stop_done_ok" id="sip_stop_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['sip_stop_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_stop_done_ok'] ?>"><?php echo $get_data[0]['sip_stop_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="sip_stop_remark" id="sip_stop_remark" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['sip_stop_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_stop_remark'] ?>"><?php echo $get_data[0]['sip_stop_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['sip_stop_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['sip_stop_remark'] ?>"><?php echo $get_data[0]['sip_stop_remark'] ?></option>
                    <option value="Clear">Clear</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_rm_name'] ?>" type="text" name="sip_stop_rm_name" id="sip_stop_rm_name">
        </div>
        <!-- SIP pause  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_pouse_date_from">SIP PAUSE </label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_pause'] ?>" type="text" name="sip_stop_pause" id="sip_stop_pause">
        </div>
        <!-- Data Pause from  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_pouse_date_from">SIP Pause Date From </label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_pause_date_from'] ?>" type="date" name="sip_stop_pause_date_from" id="sip_stop_pause_date_from">
        </div>
        <!-- Date Pause to   -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="sip_stop_pouse_date_to">SIP Pause Date To</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['sip_stop_pause_date_to'] ?>" type="date" name="sip_stop_pause_date_to" id="sip_stop_pause_date_to">
        </div>


    <?php
    } elseif ($title == 'STP-STOP') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_stop_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_date'] ?>" type="date" name="stp_stop_date" id="stp_stop_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_stop_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_s_no'] ?>" type="text" name="stp_stop_s_no" id="stp_stop_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_stop_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="stp_stop_month" id="stp_stop_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['stp_stop_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="stp_stop_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="stp_stop_of_on" id="stp_stop_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['stp_stop_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_stop_of_on'] ?>"><?php echo $get_data[0]['stp_stop_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['stp_stop_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['stp_stop_of_on'] ?>"><?php echo $get_data[0]['stp_stop_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['stp_stop_client_name'] ?>" name="stp_stop_client_name" id="stp_stop_client_name">
        </div>
        <!-- AMC name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_amc_name">AMC Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['stp_stop_amc_name'] ?>" name="stp_stop_amc_name" id="stp_stop_amc_name">
        </div>
        <!-- L/E  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_l_e">L/E</label>
            <?php $l_e_arr = array('L2E', 'E2E', 'E2L', 'IDCW TO REG') ?>
            <select class="form-select form-select-sm mt-1" name="stp_stop_l_e" id="stp_stop_l_e" aria-label=".form-select-sm example">
                <option>Choose</option>
                <?php
                for ($i = 0; $i < count($l_e_arr); $i++) {
                    if ($l_e_arr[$i] == $get_data[0]['stp_stop_l_e']) {
                ?>
                        <option selected value="<?php echo $get_data[0]['stp_stop_l_e'] ?>"><?php echo $get_data[0]['stp_stop_l_e'] ?></option>
                    <?php
                    } else {

                    ?>
                        <option value="<?php echo $l_e_arr[$i] ?>"><?php echo $l_e_arr[$i] ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>
        <!-- from schem name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_from_scheme_name">From Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_from_scheme_name'] ?>" type="text" name="stp_stop_from_scheme_name" id="stp_stop_from_scheme_name">
        </div>
        <!-- to Scheme Name -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_to_scheme_name">To Scheme Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['stp_stop_to_scheme_name'] ?>" name="stp_stop_to_scheme_name" id="stp_stop_to_scheme_name">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_submit'] ?>" type="text" name="stp_stop_submit" id="stp_stop_submit">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_folio_no'] ?>" type="text" name="stp_stop_folio_no" id="stp_stop_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_amount'] ?>" type="text" name="stp_stop_amount" id="stp_stop_amount">
        </div>
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="stp_stop_remark" id="stp_stop_remark" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['stp_stop_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_stop_remark'] ?>"><?php echo $get_data[0]['stp_stop_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['stp_stop_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_stop_remark'] ?>"><?php echo $get_data[0]['stp_stop_remark'] ?></option>
                    <option value="Clear">Clear</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Remark  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_remark_reason">Remark Reason </label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_remark_reason'] ?>" type="text" name="stp_stop_remark_reason" id="stp_stop_remark">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="stp_stop_done_ok" id="stp_stop_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['stp_stop_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['stp_stop_done_ok'] ?>"><?php echo $get_data[0]['stp_stop_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['stp_stop_rm_name'] ?>" type="text" name="stp_stop_rm_name" id="stp_stop_rm_name">
        </div>
        <!-- other Info  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="stp_stop_other_info">Other Info</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['stp_stop_other_info'] ?>" name="stp_stop_other_info" id="stp_stop_other_info">
        </div>


    <?php
    } elseif ($title == 'SWP-STOP') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_stop_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_date'] ?>" type="date" name="swp_stop_date" id="swp_stop_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_stop_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_s_no'] ?>" type="text" name="swp_stop_s_no" id="swp_stop_s_no">
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_stop_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="swp_stop_month" id="swp_stop_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['swp_stop_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- on/off  -->
        <div class="col-md-3 col-sm-12">
            <label for="swp_stop_of_on">On/Off</label>
            <select class="form-select form-select-sm mt-1" name="swp_stop_of_on" id="swp_stop_of_on" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="On">On</option>
                <option value="Off">Off</option> -->
                <?php
                if ($get_data[0]['swp_stop_of_on'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_stop_of_on'] ?>"><?php echo $get_data[0]['swp_stop_of_on'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['swp_stop_of_on'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['swp_stop_of_on'] ?>"><?php echo $get_data[0]['swp_stop_of_on'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="On">On</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['swp_stop_client_name'] ?>" name="swp_stop_client_name" id="swp_stop_client_name">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_submit">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_submit'] ?>" type="text" name="swp_stop_submit" id="swp_stop_submit">
        </div>
        <!-- schem name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_scheme">Scheme Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_scheme'] ?>" type="text" name="swp_stop_scheme" id="swp_stop_scheme">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_folio_no'] ?>" type="text" name="swp_stop_folio_no" id="swp_stop_folio_no">
        </div>
        <!-- Amount  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_amount">Amount</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_amount'] ?>" type="text" name="swp_stop_amount" id="swp_stop_amount">
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="swp_stop_done_ok" id="swp_stop_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['swp_stop_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_stop_done_ok'] ?>"><?php echo $get_data[0]['swp_stop_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="OK">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="swp_stop_remark" id="swp_stop_remark" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['swp_stop_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_stop_remark'] ?>"><?php echo $get_data[0]['swp_stop_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['swp_stop_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['swp_stop_remark'] ?>"><?php echo $get_data[0]['swp_stop_remark'] ?></option>
                    <option value="Clear">Clear</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Stop data  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_stop_date">Stop Date </label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_stop_date'] ?>" type="date" name="swp_stop_stop_date" id="swp_stop_stop_date">
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="swp_stop_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['swp_stop_rm_name'] ?>" type="text" name="swp_stop_rm_name" id="swp_stop_rm_name">
        </div>


    <?php
    } elseif ($title == 'COB') {
        // echo my_arr($get_data);

    ?>
        <!-- date  -->
        <div class="col-md-3 col-sm-12">
            <label for="cob_date">Date</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['cob_date'] ?>" type="date" name="cob_date" id="cob_date">
        </div>
        <!-- s No  -->
        <div class="col-md-3 col-sm-12">
            <label for="cob_s_no">S.No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['cob_s_no'] ?>" type="text" name="cob_s_no" id="cob_s_no">
        </div>
        <!-- COB Mode  -->
        <div class="col-md-3 col-sm-12">
            <label for="cob_mode">COB Mode</label>
            <select class="form-select form-select-sm mt-1" name="cob_mode" id="cob_mode" aria-label=".form-select-sm example" required>
                <!-- <option>Choose</option>
                <option value="ON">ON</option>
                <option value="OFF">OFF</option> -->
                <?php
                if ($get_data[0]['cob_mode'] == "ON") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['cob_mode'] ?>"><?php echo $get_data[0]['cob_mode'] ?></option>
                    <option value="OFF">OFF</option>
                <?php
                } elseif ($get_data[0]['cob_mode'] == "OFF") {
                ?>
                    <option>Choose</option>
                    <option value="ON">ON</option>
                    <option selected value="<?php echo $get_data[0]['cob_mode'] ?>"><?php echo $get_data[0]['cob_mode'] ?></option>
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="ON">ON</option>
                    <option value="OFF">OFF</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- Month  -->
        <div class="col-md-3 col-sm-12">
            <label for="cob_month">Month</label>
            <select class="form-select form-select-sm mt-1" name="cob_month" id="cob_month" aria-label=".form-select-sm example">
                <?php
                for ($i = 0; $i < count($month); $i++) {
                    if ($month[$i] == $get_data[0]['cob_month']) {
                ?>
                        <option selected value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>

                    <?php
                    } else {
                    ?>
                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                    <?php
                    }

                    ?>
                <?php
                }
                ?>
            </select>

        </div>
        <!-- client name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_client_name">Client Name</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['cob_client_name'] ?>" name="cob_client_name" id="cob_client_name">
        </div>
        <!-- Activity  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_activity">Activity</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['cob_activity'] ?>" type="text" name="cob_activity" id="cob_activity">
        </div>
        <!-- Submit Place  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_submit_place">Submit Place</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['cob_submit_place'] ?>" type="text" name="cob_submit_place" id="cob_submit_place">
        </div>
        <!-- Related user  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_related_use">Related Use</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['cob_related_use'] ?>" name="cob_related_use" id="cob_related_use">
        </div>
        <!-- folio Number  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_folio_no">Folio No.</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['cob_folio_no'] ?>" type="text" name="cob_folio_no" id="cob_folio_no">
        </div>
        <!-- Remark  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_remark">Remark</label>
            <select class="form-select form-select-sm mt-1" name="cob_remark" id="cob_remark" aria-label=".form-select-sm example">
                <?php
                if ($get_data[0]['cob_remark'] == "Clear") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['cob_remark'] ?>"><?php echo $get_data[0]['cob_remark'] ?></option>
                    <option value="Reject">Reject</option>
                <?php
                } elseif ($get_data[0]['cob_remark'] == "Reject") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['cob_remark'] ?>"><?php echo $get_data[0]['cob_remark'] ?></option>
                    <option value="Clear">Clear</option>
                <?php

                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Clear">Clear</option>
                    <option value="Reject">Reject</option>
                <?php
                }

                ?>
            </select>
        </div>
        <!-- ok  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_done_ok">Ok</label>
            <select class="form-select form-select-sm mt-1" name="cob_done_ok" id="cob_done_ok" aria-label=".form-select-sm example">
                <!-- <option>Choose</option>
                <option value="Ok">Ok</option>
                <option value="Blank">Blank</option> -->
                <?php
                if ($get_data[0]['cob_done_ok'] == "OK") {
                ?>
                    <option>Choose</option>
                    <option selected value="<?php echo $get_data[0]['cob_done_ok'] ?>"><?php echo $get_data[0]['cob_done_ok'] ?></option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                } else {
                ?>
                    <option selected>Choose</option>
                    <option value="Ok">Ok</option>
                    <!-- <option value="Blank">Blank</option> -->
                <?php
                }

                ?>
            </select>
        </div>
        <!-- RM name  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_rm_name">RM Name</label>
            <input class="form-control form-control-sm mt-1" value="<?php echo $get_data[0]['cob_rm_name'] ?>" type="text" name="cob_rm_name" id="cob_rm_name">
        </div>
        <!-- other Info  -->
        <div class="col-md-3 col-sm-12 mt-3">
            <label for="cob_other_info">Other Info</label>
            <input class="form-control form-control-sm mt-1" type="text" value="<?php echo $get_data[0]['cob_other_info'] ?>" name="cob_other_info" id="cob_other_info">
        </div>


    <?php
    }



    ?>
</div>