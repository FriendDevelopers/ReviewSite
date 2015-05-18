<?php

Class TestController extends Controller {
    function checkView() {
        $this->layout = "main";
        $this->render(array("view"=>"checkView","model"=> array("name"=>"Yusuf", 'b'=> "jata")));
    }

    function forum() {
        $this->layout = "main";
        $this->render();
        $this->layout = "footer";
        $this->render();
    }

    function home(){
        $this->layout = "main";
        $this->render();
        $this->layout = "footer";
        $this->render();
    }

    function restaurantView1(){
        $this->layout = "main";
        $this->render();
    }
    function profile(){
        $this->layout = "main";
        $this->render();
        $this->layout = "footer";
        $this->render();
    }
    function signup(){
        $this->layout = "main";
        $this->render();
        $this->layout = "footer";
        $this->render();
    }

}