<?php

$title = '';
// echo $data;
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

    <body>
        <div id="content">
            <div class="container mt-3">
                <div class="card">
                    <h6 class="text-center rounded card_heading" id="card_heading" style="font-size: 15px;"><?php echo $data ?></h6>
                    <div class="card-body">
                        <?php
                        $month = array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Decemeber');
                        ?>
                        <form action="" id="<?php echo $data.'Form' ?>">

                            <div class="row">
                                <input class="form-control form-control-sm mt-1" type="text" name="YmFzZTY0IGRlY29kZXI=" value="<?php echo base64_encode($data) ?>" id="" hidden>
                                <div class="col-md-3 col-sm-12">
                                    <label for="lum_date">Date</label>
                                    <input class="form-control form-control-sm mt-1" type="date" name="lum_date" id="lum_date">
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label for="lum_s_no">S.No.</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_s_no" id="lum_s_no" value="1">
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label for="lum_month">Month</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_month" id="lum_month" aria-label=".form-select-sm example">
                                        <option  >Choose</option>
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
                                        <option  >Choose</option>
                                        <option value="On">On</option>
                                        <option value="Off">Off</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_client_name">Client Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_client_name" id="lum_client_name" value="Aman">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_fund">Fund Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_fund" id="lum_fund" value="HDFC">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_scheme">Scheme Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_scheme" id="lum_scheme" value="HDFC Flexicap">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_scheme">Submit Place</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_submit" id="lum_submit" value="NSE">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_pan_no">Pan No.</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_pan_no" id="lum_pan_no" value="CPCT8181J">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_folio_no">Folio No.</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_folio_no" id="lum_folio_no" value="236541256">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_amount">Amount</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_amount" id="lum_amount" value="50000">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_remark">Remark</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_remark" id="lum_remark" aria-label=".form-select-sm example">
                                        <option  >Choose</option>
                                        <option value="Clear">Clear</option>
                                        <option value="Blank">Blank</option>
                                    </select>

                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_done_ok">Ok</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_done_ok" id="lum_done_ok" aria-label=".form-select-sm example">
                                        <option  >Choose</option>
                                        <option value="Ok">Ok</option>
                                        <option value="Blank">Blank</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_rm_name">RM Name</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_rm_name" id="lum_rm_name" value="Alka">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_client_type">Client Type</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_client_type" id="lum_client_type" aria-label=".form-select-sm example">
                                        <option  >Choose</option>
                                        <option value="Existng">Existng</option>
                                        <option value="New-Client">New-Client</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_category">Category</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_category" id="lum_category" aria-label=".form-select-sm example">
                                        <option  >Choose</option>
                                        <option value="Liquid">Liquid</option>
                                        <option value="Equity">Equity</option>
                                        <option value="Debt">Debt</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_rejection">Rejection</label>
                                    <input class="form-control form-control-sm mt-1" type="text" name="lum_rejection" id="lum_rejection" value="">
                                </div>
                                <div class="col-md-3 col-sm-12 mt-3">
                                    <label for="lum_after_liquid_fund">After Liquid Fund</label>
                                    <select class="form-select form-select-sm mt-1" name="lum_after_liquid_fund" id="lum_after_liquid_fund" aria-label=".form-select-sm example">
                                        <option  >Choose</option>
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
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("#<?php echo $data.'Form' ?>").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo site_url() . 'Forms/Form_Submition' ?>",
                data: $("#<?php echo $data.'Form' ?>").serialize(),
                dataType: "json",
                success: function(data) {
                    console.log(data);
                }
            });
        })
    </script>

</html>