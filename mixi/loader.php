<?php
define('ROOT', dirname(dirname(__FILE__)) . "/");
include_once "mytest.php";

// loading models
foreach (glob(ROOT . "/models/*.php") as $file) {
    include_once $file;
}

// loading middlewares
foreach (glob(ROOT . "/middlewares/*.php") as $file) {
    include_once $file;
}

// loading handlers
foreach (glob(ROOT . "/handlers/*.php") as $file) {
    include_once $file;
}