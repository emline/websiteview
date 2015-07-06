<?php

class Categories extends Controller {

    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/categories/index.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/_templates/footer.php';
    }

	 public function getCategory()
	 {

        //$keyword = filter_input(INPUT_GET,'q');
        //$newest = $this->model->getKeyword($keyword);

        require APP . 'view/_templates/header.php';
        //require APP . 'view/_templates/carousel.php';
        require APP . 'view/categories/index.php';
        require APP . 'view/_templates/region1.php';
        require APP . 'view/_templates/footer.php';

	 }

}
