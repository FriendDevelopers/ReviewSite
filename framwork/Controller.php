<?php
class Controller {
    public $name;
    public $actionName;
    public $rootPath;

    function __construct($name, $actionName) {
        $this->rootPath = ROOT . DS . ".." . DS;
        $this->name = $name;
        $this->actionName = $actionName;
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
