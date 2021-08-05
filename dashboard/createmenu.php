<div class="dropdown" hidden>
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <button type="button" class="btn btn-primary dropdown-toggle mr-3" aria-haspopup="true" aria-expanded="false">
            <?php echo $lang->newservice; ?>
        </button>
    </div>
    <!--end::Toggle-->

    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
        <form>
            <!--begin::Header-->
            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                <!--begin::Title-->
                <h4 class="d-flex flex-center rounded-top" style="margin-bottom: 20px;">
                    <span class="text-white"><?php echo $lang->newservicecreate; ?></span>
                </h4>
                <!--end::Title-->

                <!--begin::Tabs-->
                <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">

                </ul>
                <!--end::Tabs-->
            </div>
            <!--end::Header-->

            <!--begin::Content-->
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                    <!--begin::Scroll-->
                    <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="110" data-mobile-height="200">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-primary mr-5">
                                <span class="symbol-label">
                                    <i class="fas fa-meteor text-primary"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Text-->
                            <div class="d-flex flex-column font-weight-bold">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Comet Linux</a>
                                <span class="text-muted">Linux alapú webtárhely</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40 symbol-light-primary mr-5">
                                <span class="symbol-label">
                                    <i class="fas fa-meteor text-primary"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Text-->
                            <div class="d-flex flex-column font-weight-bold">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Comet Windows</a>
                                <span class="text-muted">Windows alapú webtárhely</span>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Tabpane-->
            </div>
            <!--end::Content-->
        </form>
    </div>
    <!--end::Dropdown-->
</div>