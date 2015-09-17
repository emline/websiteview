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
        $sql = "
		SELECT a.article_headline, a.article_deck, a.author_id, a.article_outlet, a.article_pdate, a.category, a.article_image, c.article_body 
		FROM article AS a 
		JOIN articlecontent AS c ON c.article_id = a.article_id
		WHERE article_status='2' AND article_url = :article_id";
		
        $query = $this->db->prepare($sql);
        $parameters = array(':article_id' => $article_id);

        $query->execute($parameters);
		
		return $query->fetch();

    }
		
    public function getAuthor($author_id)
    {
        $sql = "
		SELECT a.author_name, a.author_mug, a.author_bio 
		FROM author AS a 
		WHERE a.author_id = :author_id";
		
        $query = $this->db->prepare($sql);
        $parameters = array(':author_id' => $author_id);

        $query->execute($parameters);
		
		return $query->fetch();
    }

}