<?php

use PharIo\Manifest\Application;

$title = '';
// echo $data;



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM | Bluk Uplaod</title>
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
        <?php include_once('./asset/modal_alert.php'); ?>
        <?php
        $nav_arr = array('LUMPSUM', 'SIP', 'REDEMPTION', 'SWITCH', 'STP',  'SWP', 'SIP-STOP', 'STP-STOP', 'SWP-STOP', 'COB');
        ?>
        <div class="loader" id="loader_ajao">
        </div>
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="" id="upload_excel" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <label for="excel_type">Excel Type</label>
                                <select class="form-select form-select-sm mt-1" name="excel_type" id="excel_type" aria-label=".form-select-sm example">
                                    <option value="0">Choose</option>
                                    <?php
                                    for ($i = 0; $i < count($nav_arr); $i++) { ?>
                                        <option value="<?php echo $nav_arr[$i] ?>"><?php echo $nav_arr[$i] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="excel_file">File Upload</label>
                                <input type="file" class="form-control form-control-sm mt-1" name="excel_file">
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <button class="btn btn-success btn-sm" type="submit" style="margin-top: 28px;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <h3 class="text-center">Download Excel Formate</h3>
                    <div class="container text-center">
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="COB">COB</button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="Lumpsum">Lumpsum </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="Redemption"> Redemption </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="SIP"> SIP </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="SIP-Stop "> SIP-Stop </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="STP"> STP </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="STP-Stop"> STP-Stop </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="Switch"> Switch </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="SWP"> SWP </button>
                        <button class="btn btn-success btn-sm mx-1 my-1 download_excel" data-filename="SWP-Stop"> SWP-Stop </button>
                    </div>

                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url('asset/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('asset/modal_alert.js') ?>"></script>
    <script>
        $("#modal_hide").click(function() {
            $('#alert_modal').fadeOut("modal");
        })

        $("#upload_excel").submit(function(e) {
            e.preventDefault();
            $("#loader_ajao").show();
            var form_data = new FormData(this);
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'Forms/Excel_import' ?>",
                data: form_data,
                processData: false,
                contentType: false,
                cache: false,
                enctype: 'multipart/form-data',
                dataType: "json",
                success: function(data) {
                    if (data.status) {
                        Call_modal_alert('alert_modal', data.message, data.class);
                        $("#loader_ajao").hide();
                    } else {
                        Call_modal_alert('alert_modal', data.message, data.class);
                    }
                }
            });
        })

        $(".download_excel").on("click", function() {
            var name = $(this).data("filename");
            $.ajax({
                url: "<?php echo base_url() . 'Forms/export_xlsx' ?>",
                type: "POST",
                data: {
                    key_name: name,
                },
                success: function(data) {

                }
            })

        })
    </script>


</html>