<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-Office|Login</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap/bootstrap_min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">

</head>

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-3 col-sm-12 mt-5"></div>
            <div class="text-center col-md-6 col-sm-12 mt-5">
                <!-- <div class="card">
                    
                    <div class="card-body"> -->
                <img class="LoginMainImg" src="<?php echo base_url('asset/image/SWARAJ FINPRO NEW LOGO 1.png') ?>" alt="">
                <!-- <form role="form" id="LoginForm" method="post" onsubmit="event.preventDefault(); Login_Management();"> -->
                <?php
                echo form_open(site_url('admin/login_validation'))
                ?>
                <div class="row mt-5">
                    <div class="col-md-2 col-sm-12"></div>
                    <div class="text-start col-md-8 col-sm-12">
                        <?php if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $this->session->flashdata('error') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        <?php
                        } ?>

                        <div class="mb-3">
                            <label for="login_email" class="form-label">Email address</label>
                            <input type="email" value="<?php echo set_value('txt_email') ?>" name="txt_email" class="form-control" id="login_email" aria-describedby="emailHelp">
                            <span class="text-danger"><?php echo form_error('txt_email') ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="login_password" class="form-label">Password</label>
                            <input type="password" value="<?php echo set_value('txt_password') ?>" name="txt_password" class="form-control" id="login_password">
                            <span class="text-danger"><?php echo form_error('txt_password') ?></span>
                        </div>

                        <button class=" mt-3 btn btn-success btn-sm float-end">Login</button>
                    </div>
                    <div class="col-md-2 col-sm-12"></div>
                </div>
                <?php
                echo form_close()
                ?>
                <!-- </form> -->
                <!-- </div>
                </div> -->
            </div>
            <div class="col-md-3 col-sm-12 mt-5"></div>
        </div>
        <!-- <div class="">
           
        </div> -->
    </div>
</body>
<script src="<?php echo base_url('asset/bootstrap/bootstrap_min.js') ?>"></script>

</html>