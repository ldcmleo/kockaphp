<?php
class User {
    private $name;
    private $password;
    private $email;

    public function __construct($name, $password, $email) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }

    public function print() : string {
        $json = [];
        $json["user"] = $this->name;
        $json["password"] = $this->password;
        $json["email"] = $this->email;

        return json_encode($json);
    }
}
