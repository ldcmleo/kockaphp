<?php
namespace Mixi\MyTest;

function Test() {
    return "My test";
}

function receiver($callable) {
    call_user_func($callable, []);
}