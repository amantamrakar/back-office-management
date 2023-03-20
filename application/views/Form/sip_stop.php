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
                                <label for="sip_stop_date">Date</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="sip_stop_date" id="sip_stop_date">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="sip_stop_s_no">S.No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_s_no" id="sip_stop_s_no">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="sip_stop_month">Month</label>
                                <select class="form-select form-select-sm mt-1" name="sip_stop_month" id="sip_stop_month" aria-label=".form-select-sm example">
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
                                <label for="sip_stop_of_on">On/Off</label>
                                <select class="form-select form-select-sm mt-1" name="sip_stop_of_on" id="sip_stop_of_on" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="ON">On</option>
                                    <option value="OFF">Off</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_client_name">Client Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_client_name" id="sip_stop_client_name">
                            </div>


                            <!-- Change "for" and "id" from "sip_stop_fund_name" to "sip_stop_fund" -->
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_fund">Fund Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_fund" id="sip_stop_fund">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_scheme">Scheme Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_scheme" id="sip_stop_scheme">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_submit">Submit Place</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_submit" id="sip_stop_submit">
                            </div>

                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_folio_no">Folio No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_folio_no" id="sip_stop_folio_no">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_amount">Amount</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_amount" id="sip_stop_amount">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_remark_date">Remark Stop Date</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="sip_stop_remark_date" id="sip_stop_remark_date">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_done_ok">Ok</label>
                                <select class="form-select form-select-sm mt-1" name="sip_stop_done_ok" id="sip_stop_done_ok" aria-label=".form-select-sm example">
                                    <option value="">Choose</option>
                                    <option value="Ok">Ok</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_remark">Remark</label>
                                <select class="form-select form-select-sm mt-1" name="sip_stop_remark" id="sip_stop_remark" aria-label=".form-select-sm example">
                                    <option value="">Choose</option>
                                    <option value="Clear">Clear</option>
                                    <option value="Reject">Reject</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_rm_name">RM Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_rm_name" id="sip_stop_rm_name">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_pouse_date_from">SIP Pause </label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_stop_pause" id="sip_stop_pause">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_pouse_date_from">SIP Pause Date From </label>
                                <input class="form-control form-control-sm mt-1" type="date" name="sip_stop_pause_date_from" id="sip_stop_pause_date_from">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_stop_pouse_date_to">SIP Pause Date To</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="sip_stop_pause_date_to" id="sip_stop_pause_date_to">
                            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $("#<?php echo $data . 'Form' ?>").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "<?php echo site_url() . 'Forms/Form_Submition' ?>",
            data: $("#<?php echo $data . 'Form' ?>").serialize(),
            dataType: "json",
            success: function(data) {
                if (data.status) {
                    Call_alert('form_submition_alert', data.message, data.class);
                    $("#<?php echo $data . 'Form' ?>")[0].reset()
                    setInterval(function() {
                        window.location.reload()
                    }, 1500)
                } else {
                    Call_alert('form_submition_alert', data.message, data.class);
                }
            }
        });
    })
</script>

</html>