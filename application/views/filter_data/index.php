<!DOCTYPE html>
<html lang="reactjs">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login_page.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css') ?>">
    <style>

    </style>
</head>

<body>
    <?php
    $table = array('LUMPSUM', 'SIP', 'REDEMPTION', 'SWITCH', 'STP',  'SWP', 'SIP-STOP', 'STP-STOP', 'SWP-STOP', 'COB');
    ?>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <form id="filteration_form">
                        <div class="row">
                            <div class="col-6">
                                <div class="row mb-1">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Date 1 :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="first_date" class="form-control-sm form-control"  id="inputEmail3" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Date 2 :</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="second_date" class="form-control-sm form-control"  id="inputEmail3" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Excel name : </label>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-sm col-sm-10" name="excel_name" id="excel_change" aria-label="Default select example">
                                            <option value="0">Choose</option>
                                            <?php
                                            for ($i = 0; $i < count($table); $i++) {
                                            ?>
                                                <option value="<?php echo $table[$i] ?>"><?php echo $table[$i] ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Client Name :</label>
                                    <div class="col-sm-8">
                                        <select type="text" class="form-select form-select-sm" value="Aman" name="client_name" id="client_list" placeholder="Enter Name" >
                                          <option value="">Choose</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row mb-1">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Reject : </label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="form-check col-2">
                                                <input type="radio" class="btn-check" name="reject_status" value="All" id="p-outlined" autocomplete="off" checked >
                                                <label class="btn btn-outline-primary btn-sm" for="p-outlined">All</label>
                                            </div>
                                            <div class="form-check col-4">
                                                <input type="radio" class="btn-check" name="reject_status" value="Yes" id="success-outlined" autocomplete="off" >
                                                <label class="btn btn-outline-primary btn-sm" for="success-outlined">Rejected</label>
                                            </div>
                                            <div class="form-check col-6">
                                                <input type="radio" class="btn-check" name="reject_status"  value="No" id="danger-outlined" autocomplete="off">
                                                <label class="btn btn-outline-primary btn-sm" for="danger-outlined">Non- Rejected</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row mb-1">
                                    <label for="scheme_name" class="col-sm-4 col-form-label">Scheme Name :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" value="" name="scheme_name" id="scheme_name" placeholder="Enter Scheme Name" />
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="rm_name" class="col-sm-4 col-form-label">RM Name :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" value="" name="rm_name" id="rm_name" placeholder="Enter RM Name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-success btn-sm">Show</button>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="filter_data"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $("#filteration_form").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo base_url() . 'functionality/filteration' ?>",
                data: $("#filteration_form").serialize(),
                success: function(data) {
                    $("#filter_data").html(data);
                }
            });
        })
        $("#excel_change").change(function(e) {
            var name = $(this).find(":Selected").val();
            if (name != 0) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url() . 'functionality/client_list' ?>",
                    data: {
                        name: name
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status) {
                           var list = data.list;
                           console.log(list);
                            let markup = '<option value="0">All User</option>';
                            list.forEach(el => {
                              var id =  Object.keys(el) ;
                              var client_Name = Object.values(el);
                                markup += '<option value='+id+'>'+client_Name+'</option>';
                            });
                            $("#client_list").html(markup);
                        }
                    }
                });
            }
        })
    </script>
</body>

</html>