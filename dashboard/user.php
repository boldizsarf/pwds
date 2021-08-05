<div class="topbar-item">

    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1"><?php echo $lang["welcome"]; ?>,</span>
        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"><?php echo $dbuser[0]["firstname"]; ?>!</span>
        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
		                        <span class="symbol-label font-size-h5 font-weight-bold" hidden>
                                    S
                                </span>
                                    <div class="symbol-label" style="background-image:url('https://www.gravatar.com/avatar/<?php echo hash("md5", $dbuser[0]['email']); ?>')"></div>
		                    </span>
    </div>
</div>
