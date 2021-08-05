<?php

if (isset($_SESSION["email"])) {
    if ($param[1] != "dashboard") {
        header("Location: /dashboard");
        die;
    }
}