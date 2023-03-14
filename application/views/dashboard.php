<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-Office|Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/bootstrap_min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">

</head>

<body>
    <?php

    // print_r($session_data);
    // echo $session_name;
    // echo $session_id;

    $box_array = array('Form', 'View Data', 'update/delete','Bluk Upload');
    $image_box = array('LOGO ICON.png', 'LOGO ICON.png', 'LOGO ICON.png', 'LOGO ICON.png');
    $Link = array('all_form_structure','show_all_data','Update_delete_data','bluk_upload');
    ?>
    <div class="container mt-5">
        <div class="row mt-5">
            <!-- <div class="col-md-1"></div> -->
            <?php for ($i = 0; $i < count($box_array); $i++) { ?>
                <div class="col-md-3 col-sm-12 ">
                    <a href="<?php echo site_url('Forms/'.$Link[$i]) ?>" class="" style="text-decoration: none;">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="" src="<?php echo base_url('asset/image/' . $image_box[$i] . '') ?>" alt="" srcset="" style="height:45px; width: 47px;">
                                <h6 class="mt-3 text-dark"><?php echo $box_array[$i]  ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- <div class="col-md-1"></div> -->

    </div>
</body>
<script src="<?php echo base_url('asset/bootstrap/bootstrap_min.js') ?>"></script>

</html>