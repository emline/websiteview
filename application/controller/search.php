<?php

//$articleID = filter_input(INPUT_GET, 'aid', FILTER_SANITIZE_SPECIAL_CHARS);

class Search extends Controller {

    public function index()
    {

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/index.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/_templates/footer.php';
    }

	   public function getKeyword()
     {

        // Defines input from search action.
        $keyword = filter_input(INPUT_GET,'q');

        // Object to be used in view.
        $newest = $this->model->getKeyword($keyword);

  			// php-pagination library include
        require APP . 'libs/php-pagination/Pagination.class.php';

  			// determine page (based on <_GET>)
  			$page = isset($_GET['page']) ? ((int) $_GET['page']) : 1;

  			// instantiate; set current page; set number of records
  			// See: http://web.onassar.com/blog/2012/06/09/github-project-php-pagination/
  			$pagination = (new Pagination());
  			$pagination->setCurrent($page);
  			$pagination->setCrumbs(4);
  			$pagination->setTotal(200);

  			// grab rendered/parsed pagination markup
  			$markup = $pagination->parse();


  			// Core Includes
        require APP . 'view/_templates/header.php';
        require APP . 'view/search/index.php';
        require APP . 'view/_templates/sidebar.php';
        require APP . 'view/_templates/footer.php';

	}

}
