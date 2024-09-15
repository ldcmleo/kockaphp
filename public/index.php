<?php

// load all functions
include_once "../app/core/loader.php";

$app = new Kocka($_SERVER["HTTP_HOST"], $_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"], $_SERVER["HTTP_USER_AGENT"]);
include_once "../main.php";
$app->run();
