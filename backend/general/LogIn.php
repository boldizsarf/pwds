<?php
ini_set('session.gc_probability', '0');
ini_set('session.gc_maxlifetime', '31536000');
ini_set('file_uploads', 'On');

session_start();
require 'dbc.php';

error_reporting(-1);
ini_set('display_errors', 'On');

$email = $_POST["email"];
$passwd = $_POST["passwd"];

$email_count = $dbc->numRows("SELECT * FROM users WHERE email=?", [$email]);

if ($email_count == 0) {
    header("Location: /auth/e/4");
    return;
}

$dbuser = $dbc->get("SELECT * FROM users WHERE email=?", [$email]);

if ($dbuser[0]['emailconfirmed'] == "0") {
    header("Location: /auth/e/5");
    return;
}

if (hash("sha256", $passwd) != $dbuser[0]['password']) {
    header("Location: /auth/e/6");
    return;
}

$_SESSION["email"] = $email;
$_SESSION["SYSTEM"] = "allowed";

header("Location: /dashboard");
return;