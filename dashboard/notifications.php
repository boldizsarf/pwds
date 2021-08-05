<div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
            <i class="fas fa-bell text-primary"></i>
            <span class="pulse-ring"></span>
        </div>
    </div>
    <!--end::Toggle-->

    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
        <form>
            <!--begin::Header-->
            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                <!--begin::Title-->
                <h4 class="d-flex flex-center rounded-top" style="margin-bottom: 20px;">
                    <span class="text-white"><?php echo $lang["notafications"]; ?></span>
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
                <div class="tab-pane active show" id="topbar_notifications_events" role="tabpanel">
                    <?php
                    $dbuser = $dbc->get("SELECT * FROM users WHERE email=?", [$_SESSION["email"]]);
                    $dbnotify = $dbc->get("SELECT * FROM notifications WHERE uid=? ORDER BY id DESC LIMIT 5", [$dbuser[0]["id"]]);

                    if (empty($dbnotify[0]["id"])) {
                        echo "<div class=\"d-flex flex-center text-center text-muted min-h-200px\">\n";
                        echo $lang["nonotafications"];
                        echo "                    </div>";
                    } else {
                        echo "<div class=\"navi navi-hover scroll my-4\" data-scroll=\"true\" data-height=\"300\" data-mobile-height=\"200\">";
                        foreach ($dbnotify as $notify) {
                            $read = " bg-primary-o-30";
                            if ($notify["viewed"] == "1") {
                                $read = "";
                            }
                            echo "<a href=\"/dashboard/notify/" . $notify["id"] . "\" class=\"navi-item " . $read . "\">\n";
                            echo "                            <div class=\"navi-link\">\n";
                            echo "                                <div class=\"navi-icon mr-2\">\n";
                            echo "                                    <i class=\"" . $notify["icon"] . " text-primary\"></i>\n";
                            echo "                                </div>\n";
                            echo "                                <div class=\"navi-text\">\n";
                            echo "                                    <div class=\"font-weight-bold\">\n";
                            echo $notify["shorttext"];
                            echo "                                    </div>\n";
                            echo "                                    <div class=\"text-muted\">\n";
                            echo $notify["date"];
                            echo "                                    </div>\n";
                            echo "                                </div>\n";
                            echo "                            </div>\n";
                            echo "                        </a>";


                        }
                        echo "</div>";
                    }
                    ?>
                </div>
                <!--end::Tabpane-->
            </div>
            <!--end::Content-->
        </form>
    </div>
    <!--end::Dropdown-->
</div>