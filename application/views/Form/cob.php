<?php
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
    <?php include_once('./asset/modal_alert.php'); ?>
    <div class="loader" id="loader_ajao"></div>
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
                                <label for="cob_date">Date</label>
                                <input class="form-control form-control-sm mt-1" type="date" name="cob_date" id="cob_date" required>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="cob_s_no">S.No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_s_no" id="cob_s_no">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="cob_mode">COB Mode</label>
                                <select class="form-select form-select-sm mt-1" name="cob_mode" id="cob_mode" aria-label=".form-select-sm example" required>
                                    <option>Choose</option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>

                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="cob_month">Month</label>
                                <select class="form-select form-select-sm mt-1" name="cob_month" id="cob_month" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <?php
                                    for ($i = 0; $i < count($month); $i++) { ?>
                                        <option value="<?php echo $month[$i] ?>"><?php echo $month[$i] ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_client_name">Client Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_client_name" id="cob_client_name" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_activity">Activity</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_activity" id="cob_activity">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_submit_place">Submit Place</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_submit_place" id="cob_submit_place">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_related_use">Related Use</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_related_use" id="cob_related_use">
                            </div>

                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_folio_no">Folio No.</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_folio_no" id="cob_folio_no" required>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_done_ok">Status/OK</label>
                                <select class="form-select form-select-sm mt-1" name="cob_done_ok" id="cob_done_ok" aria-label=".form-select-sm example">
                                    <option>Choose</option>
                                    <option value="OK">Ok</option>
                                    <!-- <option value="Reject">Reject</option> -->
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_remark">Remark</label>
                                <select class="form-select form-select-sm mt-1" name="cob_remark" id="cob_remark" aria-label=".form-select-sm example">
                                    <option value="">Choose</option>
                                    <option value="Clear">Clear</option>
                                    <option value="Reject">Reject</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_rm_name">RM Name</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_rm_name" id="cob_rm_name">
                            </div>
                            <div class="col-md-3 col-sm-12 mt-3">
                                <label for="cob_other_info">Other Info</label>
                                <input class="form-control form-control-sm mt-1" type="text" name="cob_other_info" id="cob_other_info">
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
 <!-- ---------alert--- -->
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