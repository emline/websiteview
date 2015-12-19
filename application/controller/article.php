<?php

//$articleID = filter_input(INPUT_GET, 'aid', FILTER_SANITIZE_SPECIAL_CHARS);

class Article extends Controller {
	
    public function index()
    {

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header2.php';
        require APP . 'view/_templates/carousel.php';
        require APP . 'view/article/index.php';
        require APP . 'view/_templates/region2.php';
        require APP . 'view/_templates/footer.php';
    }
	
	public function getArticle($article_id) {
	
		$article = $this->article->getArticle($article_id);
        $byline = $this->article->getAuthor($article->author_id);
    	$comment = $this->model->getCommentsPage($article_id);        
		$newest = $this->model->getNewest();
    	$slider = $this->model->getCarousel($article_id);        
		$user = $this->model->getUserName(1); //this is supposed to be me until I get authentication to work?
		
		if($article)
		{
			require APP . 'view/_templates/header2.php';
			require APP . 'view/_templates/carousel.php';
			require APP . 'view/article/index.php';
			require APP . 'view/_templates/region2.php';
			require APP . 'view/_templates/footer.php';
		}
		else
		{
			require APP . 'view/_templates/header2.php';
			require APP . 'view/_templates/carousel.php';
			require APP . 'view/article/404.php';
			require APP . 'view/_templates/sidebar.php';
			require APP . 'view/_templates/footer.php';
		}
	
	}

}