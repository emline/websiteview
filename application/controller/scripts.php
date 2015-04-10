<?php

class Scripts extends Controller {
	
	public $hello;
	
    public function index()
    {

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/scripts/index.php';
    }
	
	public function type($parameter) {

        require APP . 'view/scripts/' . $parameter . '.php';
	
	}

}