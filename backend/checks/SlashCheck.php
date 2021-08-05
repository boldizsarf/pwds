<?php
if (substr($_SERVER['REQUEST_URI'], -1) != "/") {
    header("Location: " . $_SERVER['REQUEST_URI'] . "/");
    die;
}