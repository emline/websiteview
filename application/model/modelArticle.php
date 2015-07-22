<?php

class ModelArticle {

	public $xml;
	
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
    public function getArticle($article_id)
    {
        $sql = "SELECT article_headline, article_deck, author_id, article_outlet, article_pdate, category, article_image, article_body FROM article WHERE article_status='2' AND article_url = :article_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':article_id' => $article_id);

        $query->execute($parameters);
		
		return $query->fetch();

    }
		
    public function getAuthor($author_id)
    {
        $sql = "SELECT author_name, author_mug, author_bio FROM author WHERE author_id = :author_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':author_id' => $author_id);

        $query->execute($parameters);
		
		return $query->fetch();
    }

}