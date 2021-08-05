<?php

require 'backendHeader.php';

$firstname = $_POST["firstname"];
$lasttname = $_POST["lastname"];
$email = $_POST["email"];
$passwd = $_POST["passwd"];
$passwd2 = $_POST["passwd2"];

if ($passwd != $passwd2) {
    header("Location: /auth/e/1");
    return;
}

$email_count = $dbc->numRows("SELECT * FROM users WHERE email=?", [$email]);

if ($email_count > 0) {
    header("Location: /auth/e/2");
    return;
}

$dbusers = $dbc->get("SELECT * FROM users ORDER BY id DESC");
$uid = $dbusers[0]["id"] + 1;

$dbc->set("INSERT INTO users (id, firstname, lastname, email, password, role, emailconfirmed) VALUES (?, ?, ?, ?, ?, ?, ?)",
    [$uid, $firstname, $lasttname, $email, hash("sha256", $passwd), "0", "0"]);

require '../../backend/actions/sendConfirmEmail.php';

header("Location: /auth/s/1");
return;