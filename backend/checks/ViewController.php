<?php

if (file_exists($param[1] . '.php')) {
    require $param[1] . '.php';
    return;
} else {
    header("Location: /error");
    return;
}