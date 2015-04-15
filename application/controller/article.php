<?php

//$articleID = filter_input(INPUT_GET, 'aid', FILTER_SANITIZE_SPECIAL_CHARS);

class Article extends Controller {

	public $hello;
	
    public function index()
    {

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/carousel.php';
        require APP . 'view/article/index.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/_templates/footer.php';
    }
	
	public function getArticle($article_id) {
	
		$article = $this->model->getArticle($article_id);
		$newest = $this->model->getNewest();
		if($article)
		{
			$byline = $this->model->getAuthor($article->author_id);
		}
		$slider = $this->model->getCarousel($article_id);
		
		if($article)
		{
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/carousel.php';
			require APP . 'view/article/index.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/_templates/footer.php';
		}
		else
		{
			require APP . 'view/_templates/header.php';
			require APP . 'view/_templates/carousel.php';
			require APP . 'view/article/404.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/_templates/footer.php';
		}
	
	}

}
