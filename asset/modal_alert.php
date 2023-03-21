<?php
    function modal_alert($id)
    {
      
        echo '<div class="modal" tabindex="-1" id="'.$id.'">
         <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id ="modal_ka_head">
                <img src="'.base_url("asset/image/LOGO ICON.png").'" alt="" srcset="" width="50">
                <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel" style="margin-left: 10px;">Swaraj FinPro</h1>
                <button type="button" id="modal_hide" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center" id="alert_message"></p>
            </div>
        </div>
        </div>
        </div>';
    }
