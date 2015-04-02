<?php
class Controller {
    public $name;
    public $actionName;
    public $rootPath;
    public $app;
    public $params;

    function __construct($name, $actionName, $params, $app) {
        $this->rootPath = ROOT;
        $this->name = $name;
        $this->actionName = $actionName;
        $this->params = $params;
        $this->app = $app;
    }

    function render($modelView = array()) {
        if(count($modelView) > 0 ) {

        } else {
            include($this->rootPath . DS . "view" . DS . $this->name . DS . $this->actionName . ".php");
        }
    }

    function renderContent($modelView = array()) {

    }
};
