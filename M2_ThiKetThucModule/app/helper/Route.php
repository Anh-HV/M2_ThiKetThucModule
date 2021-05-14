<?php

class Route
{
    protected $controller = "PhoneController";
    protected $action = "index";
    protected $param = [];

    public function __construct()
    {
        $array = $this->urlProcess();
        //Xu ly controller
        if (isset($array[0])) {
            if (file_exists("./app/controller/" . $array[0] . ".php")) {
                $this->controller = $array[0];
                unset($array[0]);
            }
        }

        require "./app/controller/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        //Xu ly controller Action
        if (isset($array[1])) {
            if (method_exists($this->controller, $array[1])) {
                $this->action = $array[1];
            }
            unset($array[1]);
        }
        
        
        //Xu ly Params
       // $this->params= $array ? array_values($array):[];
        if (!empty($array)) {
            $this->param = $array;
        }
        call_user_func_array([$this->controller, $this->action], $this->param);
    }

    public function urlProcess()
    {
        if (isset($_GET['url'])) {
            return explode("/", trim($_GET['url']));
        }
    }
}
