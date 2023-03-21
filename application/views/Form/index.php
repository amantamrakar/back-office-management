<?php

$title = '';
// echo $data;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data FORM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">

</head>

<body>
    <style>
        /* .box_style {
            width: 125px;
            height: 80px;
            border-radius: 5px;
        } */
    </style>
    </head>
    <?php include_once('./asset/modal_alert.php'); ?>
    <div class="loader" id="loader_ajao">
    </div>

    <body>
        <div id="content">
            <div class="container mt-3">
                <!-- <div class="alert text-center text-white" id="form_submition_alert" style="display:none;width:100%;font-size:14px; height:20px'" role="alert">sdd
                </div> -->
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
                                    <label for="lum_date">Date</label>
                                    <input class="form-control form-control-sm mt-1" type="date" name="lum_date" id="lum_date" required>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label for="lum_s_no">S.No.</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_s_no" id="lum_s_no">
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label for="lum_month">Month</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_month" id="lum_month" aria-label=".form-select-sm example">
                                        <option selected>Choose</option>
                                        <?php
                                        for ($i = 0; $i < count($month); $i++) { ?>
                                            <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label for="lum_of_on">On/Off</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_of_on" id="lum_of_on" aria-label=".form-select-sm example">
                                        <option>Choose</option>
                                        <option value="ON">On</option>
                                        <option value="OFF">Off</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_client_name">Client Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_client_name" id="lum_client_name" required>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_fund">Fund Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_fund" id="lum_fund">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_scheme">Scheme Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_scheme" id="lum_scheme">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_scheme">Submit Place</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_submit" id="lum_submit">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_pan_no">Pan No.</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_pan_no" id="lum_pan_no" required>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_folio_no">Folio No.</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_folio_no" id="lum_folio_no" required>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_amount">Amount</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_amount" id="lum_amount" required>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_remark">Remark</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_remark" id="lum_remark" aria-label=".form-select-sm example">
                                        <option>Choose</option>
                                        <option value="Clear">Clear</option>
                                        <option value="Reject">Reject</option>
                                    </select>

                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_done_ok">Ok</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_done_ok" id="lum_done_ok" aria-label=".form-select-sm example">
                                        <option>Choose</option>
                                        <option value="OK">Ok</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_rm_name">RM Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_rm_name" id="lum_rm_name">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_client_type">Client Type</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_client_type" id="lum_client_type" aria-label=".form-select-sm example" required>
                                        <option>Choose</option>
                                        <option value="EXISTING">Existng</option>
                                        <option value="NEW">New-Client</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_category">Category</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_category" id="lum_category" aria-label=".form-select-sm example">
                                        <option>Choose</option>
                                        <option value="LIQUID">Liquid</option>
                                        <option value="EQUITY">Equity</option>
                                        <option value="Debt">Debt</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_rejection">Rejection</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_rejection" id="lum_rejection">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_after_liquid_fund">After Liquid Fund</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_after_liquid_fund" id="lum_after_liquid_fund" aria-label=".form-select-sm example">
                                        <option>Choose</option>
                                        <option value="STP">STP</option>
                                        <option value="SWP">SWP</option>
                                        <option value="NON">NON</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mt-4">
                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                </div>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <div id="today_data">

        </div>
    </body>
    <!-- ---------alert--- -->
    <?php modal_alert('alert_modal') ?>
    <!-- ---------alert--- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
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
        
        // $(document).ready(function () {
        //     $.ajax({
        //         type: "post",
        //         url: "<?php echo site_url() . 'show_data/today_data_fetch' ?>",
        //         data: {
        //             data:'<?php echo $data ?>'
        //         },
        //         success: function (data) {
        //             $("#today_data").html(data);
        //         }
        //     });
        // });
    </script>

</html>