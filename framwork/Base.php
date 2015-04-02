<?php
class Base
{ // first push from sakib
    public $basePath;
    public $controller;
    public $id;
    public $action;
    private $route;
    function __construct($route){
        $this->route = $route;
    }

    function parseRoute() {
        $id = false;
        // parse path info
        if (isset($this->_route)){
            // the request path
            $path = $this->route;
            // the rules to route
            $cai =  '/^([\w]+)\/([\w]+)\/([\d]+).*$/';  //  controller/action/id
            $ci =   '/^([\w]+)\/([\d]+).*$/';           //  controller/id
            $ca =   '/^([\w]+)\/([\w]+).*$/';           //  controller/action
            $c =    '/^([\w]+).*$/';                    //  action
            $i =    '/^([\d]+).*$/';                    //  id
            // initialize the matches
            $matches = array();
            // if this is home page route
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

            // get query string from url
            $query = array();
            $parse = parse_url($path);
            // if we have query string
            if(!empty($parse['query'])){
                // parse query string
                parse_str($parse['query'], $query);
                // if query paramater is parsed
                if(!empty($query)){
                    // merge the query paramaters to $_GET variables
                    $_GET = array_merge($_GET, $query);
                    // merge the query paramaters to $_REQUEST variables
                    $_REQUEST = array_merge($_REQUEST, $query);
                }
            }
        }

        // gets the request method
        $method = $_SERVER["REQUEST_METHOD"];

        // assign params by methods
        switch($method){
            case "GET": // view
                // we need to remove _route in the $_GET params
                unset($_GET['_route']);
                // merege the params
                $this->_params = array_merge($this->_params, $_GET);
                break;
            case "POST": // create
            case "PUT":  // update
            case "DELETE": // delete
                break;

        }
        // set param id to the id we have
        if(!empty($id)){
            $this->id=$id;
        }
    }

    function dispatch(){
        $this->parseRoute();
        // set controller name
        $controllerName = $this->controller;

        // assign controller full name
        $this->controller .= 'Controller';
        // if we have extended controller
        $this->controller = class_exists($this->_controller) ? $this->controller : 'Controller';
        // construct the controller class
        $dispatch = new $this->controller($controllerName, $this->action);
        // if we have action function in controller
        $hasActionFunction = (int)method_exists($this->controller, $this->action);
        // we need to reference the parameters to a correct order in order to match the arguments order
        // of the calling function
        $c = new ReflectionClass($this->_controller);
        $m = $hasActionFunction ? $this->_action : 'defaultAction';
        $f = $c->getMethod($m);
        $p = $f->getParameters();
        $params_new = array();
        $params_old = $this->_params;
        // re-map the parameters
        for($i = 0; $i<count($p);$i++){
            $key = $p[$i]->getName();
            if(array_key_exists($key,$params_old)){
                $params_new[$i] = $params_old[$key];
                unset($params_old[$key]);
            }
        }
        // after reorder, merge the leftovers
        $params_new = array_merge($params_new, $params_old);
        // call the action method
        $this->_view = call_user_func_array(array($dispatch, $m), $params_new);
        // finally, we print it out
        if($this->_view){
            echo $this->_view;
        }
    }
}