<!--begin::Aside-->
<div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto"  id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto justify-content-center" id="kt_brand">
        <!--begin::Logo-->
        <a href="index.html">
            <img alt="Logo" src="<?php echo $logoWhite; ?>" width="150"" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        <!--begin::Menu Container-->
        <div
            id="kt_aside_menu"
            class="aside-menu"
            data-menu-vertical="1"
            data-menu-scroll="1" data-menu-dropdown-timeout="500" 			>
            <!--begin::Menu Nav-->
            <ul class="menu-nav ">
                <?php

                $menu = simplexml_load_file('db/menu.db');
                $lngcode = $_COOKIE["sw_lang"];
                $apg = null;
                $im = 0;

                foreach ($menu->group as $menugroup) {
                    foreach ($menugroup->pages->page as $page) {
                        foreach ($page->access->role as $pagerole) {
                            if ($pagerole == $dbuser[0]["role"]) {
                                if (isset($pagerole["defaultpage"])) {
                                    if ($pagerole["defaultpage"] == "true") {
                                        $dpage = $page->link;
                                    }
                                }
                            }
                        }
                    }
                }

                foreach ($menu->group as $menugroup) {
                    if ($im == 0) {
                        $my = "my-0";
                        $im++;
                    } else {
                        $my = "";
                    }

                    // Permission check
                    foreach ($menugroup->pages->page as $page) {
                        if ($page->link == $param[2]) {
                            $ri = 0;
                            foreach ($page->access->role as $pagerole) {
                                if ($dbuser[0]["role"] == $pagerole) {
                                    $ri++;
                                }
                            }
                            if ($ri == 0) {
                                if (isset($dpage)) {
                                    echo '<meta http-equiv="refresh" content="0; URL=/dashboard/' . $dpage . '">';
                                } else {
                                    echo '<meta http-equiv="refresh" content="0; URL=/dashboard/home">';
                                }
                                return;
                            }
                        }
                    }

                    foreach ($menugroup->access->role as $grouprole) {
                        if ($dbuser[0]["role"] == $grouprole) {
                            echo "<li class=\"menu-section " . $my . "\">\n";
                            echo "                            <h4 class=\"menu-text\">" . $menugroup->names->$lngcode . "</h4>\n";
                            echo "                            <i class=\"menu-icon ki ki-bold-more-hor icon-md\"></i>\n";
                            echo "                        </li>";
                        }
                    }

                    foreach ($menugroup->pages->page as $page) {
                        foreach ($page->access->role as $pagerole) {
                            if ($dbuser[0]["role"] == $pagerole) {
                                if ($param[2] == $page->link) {
                                    $active = "menu-item-active";
                                    $apg = $page->link;
                                } else {
                                    $active = "";
                                }

                                if (isset($page->sublinks)) {
                                    foreach ($page->sublinks->link as $sublink) {
                                        if ($param[2] == $sublink) {
                                            $active = "menu-item-active";
                                            $apg = $sublink;
                                        }
                                    }
                                }

                                echo "<li class=\"menu-item " . $active . "\" aria-haspopup=\"true\" ><a  href=\"/dashboard/" . $page->link . "\" class=\"menu-link \"><i class=\"menu-icon fas fa-" . $page->icon . "\"></i><span class=\"menu-text\">" . $page->names->$lngcode . "</span></a></li>\n";
                            }
                        }
                    }
                }
                
                ?>
                <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->