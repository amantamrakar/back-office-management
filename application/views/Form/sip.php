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
    <title>FORM</title>
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
                                <label for="sip_date">Date</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="sip_date" id="sip_date">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="sip_s_no">S.No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_s_no" id="sip_s_no">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="sip_month">Month</label>
                                <select class="form-select form-select-sm mt-1" name="sip_month" id="sip_month" aria-label=".form-select-sm example">
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
                                <label for="sip_of_on">On/Off</label>
                                <select class="form-select form-select-sm mt-1" name="sip_of_on" id="sip_of_on" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="ON">On</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_client_name">Client Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_client_name" id="sip_client_name">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_fund">Fund Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_fund" id="sip_fund">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_scheme">Scheme Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_scheme" id="sip_scheme">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_submit">Submit Place</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_submit" id="sip_submit">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_pan_no">Pan No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_pan_no" id="sip_pan_no">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_folio_no">Folio No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_folio_no" id="sip_folio_no">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_amount">Amount</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_amount" id="sip_amount">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_ecs_date">ECS Date</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="sip_ecs_date" id="sip_ecs_date">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_remark">Remark</label>
                                <select class="form-select form-select-sm mt-1" name="sip_remark" id="sip_remark" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="Clear">Clear</option>
                                    <option value="Blank">Blank</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_done_ok">Ok</label>
                                <select class="form-select form-select-sm mt-1" name="sip_done_ok" id="sip_done_ok" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="OK">Ok</option>
                                    <option value="Blank">Blank</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_freedom_mitra">Freedom Mitra</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_freedom_mitra" id="sip_freedom_mitra">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_remark_content">Remark Content</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_remark_content" id="sip_remark_content">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_continue_stop">Continue/Stop</label>
                                <select class="form-select form-select-sm mt-1" name="sip_continue_stop" id="sip_continue_stop" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="CONTINUE">CONTINUE</option>
                                    <option value="STOP">STOP</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_telly_name">RM Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="sip_rm_name" id="sip_rm_name">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_category">Category</label>
                                <select class="form-select form-select-sm mt-1" name="sip_category" id="sip_category" aria-label=".form-select-sm example">
                                    <option selected>Choose</option>
                                    <option value="LIQUID">LIQUID</option>
                                    <option value="EQUITY">EQUITY</option>
                                    <option value="Debt">Debt</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="sip_client_type">Client Type</label>
                                <select class="form-select form-select-sm mt-1" name="sip_client_type" id="sip_client_type" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="EXISTING">Existng</option>
                                    <option value="NEW">New-Client</option>
                                </select>
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
                console.log(data);
            }
        });
    })
</script>

</html>