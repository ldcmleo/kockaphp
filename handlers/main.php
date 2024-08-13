<?php
namespace Handlers\Main;
use Model\User;

function mainFunction() {
    $user = new User("Leonardo", "abc123", "ldcmleo19@email.com");
    return $user->print();
}