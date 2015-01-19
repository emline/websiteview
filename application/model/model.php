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
        $sql = "SELECT article_headline, article_deck, author_id, article_outlet, article_pdate, category, article_image, article_body FROM article WHERE article_url = :article_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':article_id' => $article_id);

        $query->execute($parameters);
		
		return $query->fetch();

    }
	
	public function getKeyword($keyword)
	{
        
        $sql = "SELECT * FROM article WHERE article_keywords LIKE '%{$keyword}%'";       
        $query = $this->db->prepare($sql);
        $query->execute();

		
	return $query->fetchAll();
	
    }
	
	
	public function getBible($hello)
	{
		$xml = simplexml_load_file("http://simoncozens.github.io/open-source-bible-data/cooked/simple-xml/kjv.xml");

		// echo does the casting for you
		//print_r($xml);
		
		$callback = (string)$xml->book['1']->chapter['1']->verse['1'];
		
		return $callback;
	
	}
	
	public function getNewest()
	{
	
        $sql = "SELECT * FROM article WHERE article_status='2' AND category!='Archive' ORDER BY article_id DESC LIMIT 7";
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
        $sql = "SELECT author_name FROM author WHERE author_id = :author_id";
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

    /**
     * Get all songs from database
     */
    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addSong($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($song_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }
}