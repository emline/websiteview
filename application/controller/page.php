<?php

//$articleID = filter_input(INPUT_GET, 'aid', FILTER_SANITIZE_SPECIAL_CHARS);

class Page extends Controller {
	
    public function index()
    {

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header2.php';
        require APP . 'view/_templates/carousel.php';
        require APP . 'view/article/index.php';
        require APP . 'view/_templates/region2.php';
        require APP . 'view/_templates/footer.php';
    }
	
	public function getPage($param) {
	
		$newest = $this->model->getNewest();
    	$slider = $this->model->getCarousel($param);
	
		require APP . 'view/_templates/header2.php';
		require APP . 'view/_templates/carousel.php';
		require APP . 'view/page/' . $param . '.php';
		require APP . 'view/_templates/footer.php';
	}

}