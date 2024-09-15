<?php 
class Kocka {
    private $req;
    private $res;

    public function __construct($host, $uri, $method, $user_agent) {
        $this->req["host"] = $host;
        $this->req["uri"] = $uri;
        $this->req["method"] = $method;
        $this->req["user_agent"] = $user_agent;

    }

    public function registerResponse($callable) {
        $this->res = $callable;
    }

    public function run() {
        $response = $this->res;
        $response($this->req);
    }
}
?>