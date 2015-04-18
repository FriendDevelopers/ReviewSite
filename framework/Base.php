<?php
class Base {
    public $basePath;
    public $controllerName;
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
            $cai =  '/^([\w]+)\/([\w]+)\/([\d]+).*$/';  //  controllerName/action/id
            $ci =   '/^([\w]+)\/([\d]+).*$/';           //  controllerName/id
            $ca =   '/^([\w]+)\/([\w]+).*$/';           //  controllerName/action
            $c =    '/^([\w]+).*$/';                    //  action
            $i =    '/^([\d]+).*$/';                    //  id
            $matches = array();
            if (empty($path)){
                $this->controllerName = 'index';
                $this->action = 'index';
            } else if (preg_match($cai, $path, $matches)){
                $this->controllerName = $matches[1];
                $this->action = $matches[2];
                $id = $matches[3];
            } else if (preg_match($ci, $path, $matches)){
                $this->controllerName = $matches[1];
                $id = $matches[2];
            } else if (preg_match($ca, $path, $matches)){
                $this->controllerName = $matches[1];
                $this->action = $matches[2];
            } else if (preg_match($c, $path, $matches)){
                $this->controllerName = $matches[1];
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
        $this->includecontrollerNameClass();
        $this->controller .= $this->controllerName;
        $this->controllerName .= 'Controller';
        $this->controllerName = class_exists($this->controllerName) ? $this->controllerName : 'controllerName';
        $controllerNameInstance = new $this->controllerName($this->params, $this);
        $hasActionFunction = (int)method_exists($controllerNameInstance, $this->action);
        $method = $hasActionFunction ? $this->action : 'index';
        $controllerNameInstance->$method();
    }

    function includecontrollerNameClass() {
        require_once($this->basePath . DS . "controller" . DS . $this->controllerName . "Controller.php");
    }

    function includeNecessaryFile() {
        require_once($this->basePath . DS . "framework" . DS . "controller.php");
    }
}