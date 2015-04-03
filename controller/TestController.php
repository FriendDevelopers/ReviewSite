<?php

Class TestController extends Controller {
    function checkView() {
        $this->layout = "main";
        $this->render(array("view"=>"checkView","model"=> array("a"=>"Yusuf", 'b'=> "jata")));
    }
}