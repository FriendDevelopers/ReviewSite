<?php

Class TestController extends Controller {
    function checkView() {
        $this->layout = "main";
        $this->render(array("view"=>"checkView","model"=> array("name"=>"Yusuf", 'b'=> "jata")));
    }

    function oishee() {
        $this->layout = "main";
        $this->render();
    }

    function home(){
        $this->layout = "main";
        $this->render();
    }

    function restaurantView1(){
        $this->layout = "main";
        $this->render();
    }
}