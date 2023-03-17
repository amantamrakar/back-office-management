<?php if ($this->session->userdata('id')) {
?>
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-md-3 col-sm-4 p-2 img_center">
                <a class="navbar-brand " href="#">
                    <img src="<?php echo base_url('asset\image\SWARAJ FINPRO NEW LOGO 1.png') ?>" alt="Bootstrap" width="280" height="72">
                </a>
            </div>
            <div class="col-md-5 col-sm-4 "></div>
            <div class="col-md-4 col-sm-4 mt-lg-4  mt-md-4 mt-md-0 mb-sm-2  text-center">
                <span class="fw-light float-start" style="margin: 6px;">Admin Welcome : <span class="fw-bold"><?php echo $session_name?></span></span>
                <button class="btn btn-danger " type="submit" style="margin-bottom: 8px;"><a class="text-white text-decoration-none" href="<?php echo site_url() . 'admin/logout' ?>">Logout</a></button>
            </div>
        </div>
    </div>
<?php
} ?>