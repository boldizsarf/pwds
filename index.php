<?php
session_start();

error_reporting(-1);
ini_set('display_errors', 'On');

// DB engine
require 'backend/general/dbc.php';

setcookie("sw_lang", "hu", time() + (86400 * 30), "/");
require 'db/lang/hu.php';

// Slash check
require 'backend/checks/SlashCheck.php';

// Param exploder
require 'backend/checks/ParamExploder.php';

require 'backend/checks/EmptyCheck.php';
require 'backend/checks/LoginCheck.php';

require 'backend/checks/ViewController.php';
