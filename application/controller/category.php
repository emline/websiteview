<?php

class Category extends Controller {

    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/categories/index.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/_templates/footer.php';
    }

	 public function getCategory($param)
	 {
	 	
		$category = $this->model->getCategory($param);
		$newest = $this->model->getNewest();

        require APP . 'view/_templates/header.php';
        //require APP . 'view/_templates/carousel.php';
        require APP . 'view/categories/' . $param . '.php';
        require APP . 'view/_templates/region2.php';
        require APP . 'view/_templates/footer.php';

	 }

}