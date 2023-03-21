<?php
// if(!$this->session->unset_userdata('id')){
//     redirect(base_url().'admin/index');
// }
// $title = $_GET['form'];
$title = '';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM | <?php echo $data ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">
    <style>
        .box_style {
            width: 125px;
            height: 80px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div id="content">
        <div class="container mt-3">
            <div class="alert text-center text-white" id="form_submition_alert" style="display:none;width:100%;font-size:14px; height:20px'" role="alert">sdd
            </div>
            <div class="card">
                <h6 class="text-center rounded card_heading" id="card_heading" style="font-size: 15px;"><?php echo $data ?></h6>
                <div class="card-body">
                    <?php
                    $month = array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Decemeber');
                    ?>
                    <form action="" id="<?php echo $data . 'Form' ?>">

                        <div class="row">
                            <input class="form-control form-control-sm mt-1" type="text" name="YmFzZTY0IGRlY29kZXI=" value="<?php echo base64_encode($data) ?>" id="" hidden>
                            <div class="col-md-3 col-sm-12">
                                <label for="redem_date">Date</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="redem_date" id="redem_date" required>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="redem_s_no">S.No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_s_no" id="redem_s_no">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="redem_month">Month</label>
                                <select class="form-select form-select-sm mt-1" name="redem_month" id="redem_month" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <?php
                                    for ($i = 0; $i < count($month); $i++) { ?>
                                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>

                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="redem_of_on">On/Off</label>
                                <select class="form-select form-select-sm mt-1" name="redem_of_on" id="redem_of_on" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_client_name">Client Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_client_name" id="redem_client_name" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_fund">Fund Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_fund" id="redem_fund">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_scheme">Scheme Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_scheme" id="redem_scheme">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_submit">Submit Place</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_submit" id="redem_submit">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_mode_of_pay">Mode Of Payment</label>
                                <?php
                                $mop_arr = array('CHEQUE', 'NEFT', 'RTGS', 'DC');
                                ?>
                                <select class="form-select form-select-sm mt-1" name="redem_mode_of_pay" id="redem_mode_of_pay" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <?php
                                    for ($i = 0; $i < count($mop_arr); $i++) { ?>
                                        <option value="<?php echo $mop_arr[$i] ?>"><?php echo $mop_arr[$i] ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_bank_name">Bank Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_bank_name" id="redem_bank_name" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_account_no">Account No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_account_no" id="redem_account_no" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_folio_no">Folio No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_folio_no" id="redem_folio_no" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_amount">Amount</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_amount" id="redem_amount" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_done_ok">Ok</label>
                                <select class="form-select form-select-sm mt-1" name="redem_done_ok" id="redem_done_ok" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="Ok">Ok</option>
                                </select>
                            </div>

                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_remark">Remark</label>
                                <select class="form-select form-select-sm mt-1" name="redem_remark" id="redem_remark" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="Clear">Clear</option>
                                    <option value="Reject">Reject</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_rm_name">RM Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_rm_name" id="redem_rm_name">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_reason_rejection">Reason For Rejection</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_reason_rejection" id="redem_reason_rejection">
                            </div>
                            <!-- <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_continue_stop">Continue/Stop</label>
                                <select class="form-select form-select-sm mt-1" name="redem_continue_stop" id="redem_continue_stop" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="Continue">Continue</option>
                                    <option value="Stop">Stop</option>
                                </select>
                            </div> -->
                            <!-- <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_telly_name">Telly User Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="redem_telly_name" id="redem_telly_name">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_category">Category</label>
                                <select class="form-select form-select-sm mt-1" name="redem_category" id="redem_category" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="Liquid">Liquid</option>
                                    <option value="Equity">Equity</option>
                                    <option value="Debt">Debt</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="redem_client_type">Client Type</label>
                                <select class="form-select form-select-sm mt-1" name="redem_client_type" id="redem_client_type" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="Existng">Existng</option>
                                    <option value="New-Client">New-Client</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mt-4">
                                <button class="btn btn-success btn-sm">Submit</button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</body>

 <!-- ---------alert--- -->
 <?php include_once('./asset/modal_alert.php'); ?>
 <?php modal_alert('alert_modal') ?>
    <!-- ---------alert--- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url('asset/modal_alert.js') ?>"></script>
<script>
      $("#modal_hide").click(function() {
            $('#alert_modal').fadeOut("modal");
        })
    $("#<?php echo $data . 'Form' ?>").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "<?php echo site_url() . 'Forms/Form_Submition' ?>",
            data: $("#<?php echo $data . 'Form' ?>").serialize(),
            dataType: "json",
            success: function(data) {
                if (data.status) {
                        Call_modal_alert('alert_modal', data.message, data.class);
                        $("#<?php echo $data . 'Form' ?>")[0].reset()
                        setInterval(function() {
                            window.location.reload()
                        }, 1500)
                    } else {
                        Call_modal_alert('alert_modal', data.message, data.class);
                    }
            }
        });
    })
</script>

</html>