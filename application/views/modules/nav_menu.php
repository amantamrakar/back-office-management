<?php
$nav_arr = array('LUMPSUM', 'SIP', 'REDEMPTION', 'SWITCH', 'STP',  'SWP', 'SIP-STOP', 'STP-STOP', 'SWP-STOP', 'COB');
$image = array('LUMPSUM_Modified.png', 'SIP_Modified.png', 'REDEMPTION_Modified.png', 'SWITCH_Modified.png', 'STP_Modified.png',  'SWP_Modified.png', 'STOP_SIP_Modified.png', 'STOP-STP_Modified.png', 'STOP_SWP_Modified.png', 'COB_Modified.png');
// echo $_GET['form'];
?>
<div class="container-fluid mt-3">
    <div class="row text-center">
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
        <?php
        for ($i = 0; $i < count($nav_arr); $i++) { ?>
            <div class="col-lg-1 col-md-2 col-sm-12">
                <input type="radio" id="<?php echo $nav_arr[$i] ?>" data-form_value="<?php echo $nav_arr[$i] ?>" class="form_type " name="select_1" value="" <?php
                                                                                                                                                                if ($nav_arr[$i] == 'LUMPSUM') {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }
                                                                                                                                                                ?>>
                <label class="labling" for="<?php echo $nav_arr[$i] ?>">
                    <img class="mt-3" src="<?php echo base_url('asset/image/'.$image[$i].'') ?>" alt="" srcset="" style="border-radius: 4px;
                            width: 35px;
                            height: 35px;
                            background-color: #fff;">
                    <p class="mt-2" id=""><?php echo $nav_arr[$i] ?></p>
                </label>
            </div>
        <?php
        }
        ?>
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
    </div>
</div>

<!-- ------------------modal-------------------------------- -->

<!-- Modal -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
    <!-- <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img src="<?php echo base_url('asset/image/LOGO ICON.png') ?>" alt="" srcset="" style="
    width: 60px;">
                <h1 class="modal-title fs-5" id="staticBackdropLabel" style="margin-left: 10px;">Excel Upload</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="" id="excel_upload">
                        <div class="col-md-12">
                            <label class="" for="upload_excel">Excel Upload</label>
                            <input type="file" name="upload_excel_all_table" class="form-control form-control-sm mt-1">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div> -->
<!-- ------------------modal-------------------------------- -->

<script src="<?php echo base_url('asset/js/jquery.js') ?>"></script>
<script>
    function before_load() {
        var F = $('.form_type').data("form_value");
        $.ajax({
            type: "post",
            url: "<?php site_url() . 'Forms/' ?>" + F,
            data: {
                Form_value: F
            },
            success: function(data) {
                $("#content").html(data);
            }
        });
    }
    $(document).ready(function() {
        before_load()
    });


    $(".form_type").click(function(e) {
        var F = $(this).data("form_value");
        if (F == 'STP-STOP') {
            F = 'STP_STOP';
        } else if (F == 'SIP-STOP') {
            F = 'SIP_STOP';
        } else if (F == 'SWP-STOP') {
            F = 'SWP_STOP';
        }
        $.ajax({
            type: "post",
            url: "<?php site_url() . 'Forms/' ?>" + F,
            data: {
                Form_value: F
            },
            success: function(data) {
                $("#content").html(data);
            }
        });
    })
</script>