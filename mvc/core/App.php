<?php
class App
{
    protected $controller = "Home";
    protected $action = "index";
    protected $pagrams = [];
    function __construct()
    {
        // Array( [0] => Home [1] => SayHi [2] => 1)
        $arr = $this->urlProcess();

        //xu ly controller
        if (isset($arr[0])) {
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        // xu ly action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        // xu li pagram
        $this->pagrams = $arr ? array_values(($arr)) : [];
        call_user_func_array([$this->controller, $this->action], $this->pagrams);
    }
    function urlProcess()
    {
        //Home/SayHi/1/2/3
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }
}
