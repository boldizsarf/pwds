<?php

$key1 = hash("sha256", random_bytes(256));

$key2 = hash("sha256", random_bytes(256));

$dbc->set("INSERT INTO emailconfirm (email, key1, key2) VALUES (?, ?, ?)",
    [$email, $key1, $key2]);

$to = $email;
$subject = $lang["confirmemail-subject"];

$mtitle = $lang["email-nameprefix"] . " " . $firstname . "!";
$mtext = $lang["confirmemail-text"];
$mtextbtn = $lang["confirmemail-btn"];
$murl = $serverurl . "/emailconfirm/" . $email . "/" . $key1 . "/" . $key2;

require 'sendMail.php';