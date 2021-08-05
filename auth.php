
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!--begin::Head-->
<?php require 'header.php'; ?>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
<?php
if (isset($param[2])) {
    if ($param[2] == "e") {
        switch ($param[3]){
            case '1':
                $errormsg = $lang["passwdnomatch"];
                break;
            case '2':
                $errormsg = $lang["emailexist"];
                break;
            case '3':
                $errormsg = $lang["wrongtoken"];
                break;
            case '4':
                $errormsg = $lang["nomail"];
                break;
            case '5':
                $errormsg = $lang["noconfirmed"];
                break;
            case '6':
                $errormsg = $lang["wrongpasswd"];
                break;
        }

        echo "<script type=\"text/javascript\">\n";
        echo "    $(document).ready(function() {\n";
        echo "        Swal.fire(\"" . $lang["error"] . "\", \"" . $errormsg . "\", \"error\");\n";
        echo "    })\n";
        echo "</script>";
    } else if ($param[2] == "s") {
        switch ($param[3]){
            case '1':
                $errormsg = $lang["confirmmail"];
                break;
            case '2':
                $errormsg = $lang["emailconfirmed"];
                break;
        }

        echo "<script type=\"text/javascript\">\n";
        echo "    $(document).ready(function() {\n";
        echo "        Swal.fire(\"" . $lang["succreg"] . "\", \"" . $errormsg . "\", \"success\");\n";
        echo "    })\n";
        echo "</script>";
    }
}
?>

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url(assets/media/bg/bg-4.jpg);">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <!--begin: Aside header-->
                <a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                    <img src="<?php echo $logoWhite; ?>" class="max-h-70px" alt=""/>
                </a>
                <!--end: Aside header-->

                <!--begin: Aside content-->
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white"><?php echo $welcomeTitle; ?></h3>
                    <p class="font-weight-lighter text-white opacity-80">
                        <?php echo $welcomeText; ?>
                    </p>
                </div>
                <!--end: Aside content-->

                <!--begin: Aside footer for desktop-->
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold	text-white">
                        <?php echo $copyText; ?>
                    </div>
                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->

        <!--begin::Content-->
        <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
            <!--begin::Content header-->
            <div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
                <span class="font-weight-bold text-dark-50"><?php echo $lang["Még nincs felhasználód?"]; ?></span>
                <a href="javascript:;" class="font-weight-bold ml-2" id="kt_login_signup"><?php echo $lang["register"]; ?></a>
            </div>
            <!--end::Content header-->

            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1"><?php echo $lang["login"]; ?></h3>
                    </div>

                    <!--begin::Form-->
                    <form method="post" action="/backend/general/LogIn.php" class="form" novalidate="novalidate" id="kt_login_signin_form">
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="<?php echo $lang["email"]; ?>" name="email" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="<?php echo $lang["passwd"]; ?>" name="passwd" autocomplete="off"/>
                        </div>
                        <!--begin::Action-->
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <a href="javascript:;" class="text-dark-50 text-hover-primary my-3 mr-2" id="kt_login_forgot">
                                <?php echo $lang["lostpass"]; ?>
                            </a>
                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3"><?php echo $lang["login"]; ?></button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->

                <!--begin::Signup-->
                <div class="login-form login-signup">
                    <div class="text-center mb-10" style="margin-top: 50px;">
                        <h3 class="font-size-h1"><?php echo $lang["register"]; ?></h3>
                    </div>

                    <!--begin::Form-->
                    <form method="post" action="/backend/general/register.php" class="form" novalidate="novalidate" id="kt_login_signup_form">
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="<?php echo $lang["lastname"]; ?>" name="lastname" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="<?php echo $lang["firstname"]; ?>" name="firstname" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="<?php echo $lang["email"]; ?>" name="email" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="<?php echo $lang["passwd"]; ?>" name="passwd" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="<?php echo $lang["passwd2"]; ?>" name="passwd2" autocomplete="off"/>
                        </div>
                        <div class="form-group">
                            <label class="checkbox mb-0">
                                <input type="checkbox" name="agree"/>
                                <span></span>
                                &nbsp;<?php echo $lang["agree"]; ?>&nbsp;<a href="#"><?php echo $lang["tof"]; ?></a>
                            </label>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4"><?php echo $lang["register"]; ?></button>
                            <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4"><?php echo $lang["cancel"]; ?></button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signup-->

                <!--begin::Forgot-->
                <div class="login-form login-forgot">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="font-size-h1">Forgotten Password ?</h3>
                        <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
                    </div>

                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off"/>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
                            <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Forgot-->
            </div>
            <!--end::Content body-->

            <!--begin::Content footer for mobile-->
            <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">
                    &copy; 2020 Metronic
                </div>
                <div class="d-flex order-1 order-sm-2 my-2">
                    <a href="#" class="text-dark-75 text-hover-primary">Privacy</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>
                    <a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
                </div>
            </div>
            <!--end::Content footer for mobile-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->

<?php require 'scripts.php'; ?>

</body>
<!--end::Body-->
</html>