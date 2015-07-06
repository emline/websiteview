<?php

class Model
{

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
	
	public function getKeyword($keyword)
	{
        
        $sql = "SELECT * FROM article WHERE article_status='2' AND category!='Archive' AND article_keywords LIKE '%{$keyword}%'";       
        $query = $this->db->prepare($sql);
        $query->execute();

		
	return $query->fetchAll();
	
    }
	
	public function getNewest()
	{
	
        $sql = "SELECT * FROM article WHERE article_status='2' AND category!='Archive' ORDER BY article_id DESC LIMIT 7";
        $query = $this->db->prepare($sql);
        $query->execute();

		
		return $query->fetchAll();
	
	}
  
  public function checkStatus()
  {
    $sql = "SELECT * FROM article WHERE article_id='52'";
    $query = $this->db->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
  }


  public function getSecondary()
  {


        $sql = "SELECT * FROM article WHERE article_status='2' AND category!='Archive' AND front='b' ORDER BY article_id DESC LIMIT 4";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();


  }
	
	public function getMainImage()
	{
	
        $sql = "SELECT * FROM article WHERE article_status='2' AND category!='Archive' AND front='a' ORDER BY article_id DESC LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();

		
		return $query->fetchAll();
	
	}
	
	public function simpleImage($image)
	{
	
	$result = 'http://dev.matthewguhit.com/public/img/raw/' . $image;
	
	return $result;
	
	}
	
	public function imagecache($nala, $width, $height)
	{

			$image = imagecreatefromjpeg(ROOT . '/public/img/raw/' . $nala); // the image to crop
			$filename2 = ROOT . 'public/img/' . $width . 'x' . $height . '-' . $nala;
			$filename3 = URL_PROTOCOL . URL_DOMAIN . '/public/img/' . $width . 'x' . $height . '-' . $nala;
			$thumb_width = $width;
			$thumb_height = $height;
		
			$width = imagesx($image);
			$height = imagesy($image);
		
			$original_aspect = $width / $height;
			$thumb_aspect = $thumb_width / $thumb_height;
		
			if ($original_aspect >= $thumb_aspect) {
				// If image is wider than thumbnail (in aspect ratio sense)
				$new_height = $thumb_height;
				$new_width = $width / ($height / $thumb_height);
			} else {
				// If the thumbnail is wider than the image
				$new_width = $thumb_width;
				$new_height = $height / ($width / $thumb_width);
			}
		
			$thumb = imagecreatetruecolor($thumb_width, $thumb_height);
		
			// Resize and crop
			imagecopyresampled($thumb, $image, 0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
					0 - ($new_height - $thumb_height) / 2, // Center the image vertically
					0, 0, $new_width, $new_height, $width, $height);
			imagejpeg($thumb, $filename2, 80);
		
			return $filename3;
			
	}
	
		
    public function getAuthor($author_id)
    {
        $sql = "SELECT author_name, author_mug, author_bio FROM author WHERE author_id = :author_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':author_id' => $author_id);

        $query->execute($parameters);
		
		return $query->fetch();
    }
	
	public function getCarousel($article_id)
	{
        $sql = "SELECT * FROM article WHERE front='c' AND article_status='2' AND article_id !='$article_id' ORDER BY article_id DESC LIMIT 9";
        $query = $this->db->prepare($sql);
        $query->execute();

		
		return $query->fetchAll();
	}

}