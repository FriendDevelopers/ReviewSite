<?php
class Base {
    public $basePath;
    public $controller;
    public $id;
    public $action;
    private $route;
    private $params;
    function __construct($route){
        $this->params = array();
        $this->route = $route;
        $this->basePath = ROOT;
        $this->includeNecessaryFile();
        $this->dispatch();
    }

    function parseRoute() {
        $id = false;
        if (isset($this->route)){
            $path = $this->route;
            $cai =  '/^([\w]+)\/([\w]+)\/([\d]+).*$/';  //  controller/action/id
            $ci =   '/^([\w]+)\/([\d]+).*$/';           //  controller/id
            $ca =   '/^([\w]+)\/([\w]+).*$/';           //  controller/action
            $c =    '/^([\w]+).*$/';                    //  action
            $i =    '/^([\d]+).*$/';                    //  id
            $matches = array();
            if (empty($path)){
                $this->controller = 'index';
                $this->action = 'index';
            } else if (preg_match($cai, $path, $matches)){
                $this->controller = $matches[1];
                $this->action = $matches[2];
                $id = $matches[3];
            } else if (preg_match($ci, $path, $matches)){
                $this->controller = $matches[1];
                $id = $matches[2];
            } else if (preg_match($ca, $path, $matches)){
                $this->controller = $matches[1];
                $this->action = $matches[2];
            } else if (preg_match($c, $path, $matches)){
                $this->controller = $matches[1];
                $this->action = 'index';
            } else if (preg_match($i, $path, $matches)){
                $id = $matches[1];
            }

            $query = array();
            $parse = parse_url($path);
            if(!empty($parse['query'])){
                parse_str($parse['query'], $query);
                if(!empty($query)){
                    $_GET = array_merge($_GET, $query);
                    $_REQUEST = array_merge($_REQUEST, $query);
                }
            }
        }
        $method = $_SERVER["REQUEST_METHOD"];
        switch($method){
            case "GET":
                unset($_GET['_route']);
                $this->params = array_merge($this->params, $_GET);
                break;
            case "POST":
                $this->params = array_merge($this->params, $_POST);
                break;
            case "PUT":
            case "DELETE":
                break;

        }
        if(!empty($id)){
            $this->id=$id;
        }
    }

    function dispatch(){
        $this->parseRoute();
        $this->includeControllerClass();
        $controllerName = $this->controller;
        $this->controller .= 'Controller';
        $this->controller = class_exists($this->controller) ? $this->controller : 'Controller';
        $controllerInstance = new $this->controller($controllerName, $this->action, $this->params, $this);
        $hasActionFunction = (int)method_exists($controllerInstance, $this->action);
        $method = $hasActionFunction ? $this->action : 'index';
        $controllerInstance->$method();
    }

    function includeControllerClass() {
        require_once($this->basePath . DS . "controller" . DS . $this->controller . "Controller.php");
    }

    function includeNecessaryFile() {
        require_once($this->basePath . DS . "framwork" . DS . "Controller.php");
    }
}