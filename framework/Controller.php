<?php
class Controller {
    public $app;
    public $params;
    public $layout;

    function __construct($params, Base $app) {
        $this->params = $params;
        $this->app = $app;
    }

    function render($modelView = array()) {
        $content = "";
        if(count($modelView) > 0 ) {
            $content = $this->getContent($modelView);
            if(isset($this->layout)) {
                require($this->app->basePath . DS . 'view' . DS . "layout" . DS . $this->layout . ".php");
            }
        } else {
            $content = $this->getContent($modelView);
            if(isset($this->layout)) {
                require($this->app->basePath . DS . 'view' . DS . "layout" . DS . $this->layout . ".php");
            } else {
                echo $content;
            }
        }
    }

    function renderContent($modelView = array()) {
        $content = $this->getContent($modelView);
        echo $content;
    }

    function renderJSON($data = array()) {
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    function getContent($modelView = array()) {
        $viewFile = "";
        if(isset($modelView['view'])) {
            $viewFile = $this->app->basePath . DS . 'view' . DS . $this->name . DS . $modelView['view'] . ".php";
        } else {
            $viewFile = $this->app->basePath . DS . "view" . DS . $this->name . DS . $this->actionName . ".php";
        }
        if(isset($modelView['model'])) {
            if(is_array($modelView['model'])) {
                extract($modelView['model'], EXTR_PREFIX_SAME, "data");
            }
        }
        ob_start();
        ob_implicit_flush(false);
        require($viewFile);
        return ob_get_clean();
    }
};
