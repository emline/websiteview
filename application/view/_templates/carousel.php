  <div id="carousel">
    <div id="middle4">
    <span class="left"></span>
    <div id="middle4a">
      <div id="middle4b">
      <div class="bottom-links">
        <?php foreach ($slider as $slide) {
            
        echo '<div id="bottom-picks"><a href="/article/getarticle/' . $slide->article_url .'"><img src="' . $this->model->imagecache($slide->article_image, 293, 150) . '" width="293" height="150" /></a>';
        echo '<h3 class="color"><a href="/article/getarticle' . $slide->article_url . '">' . $slide->article_headline . '</a></h3></div>';
        }
        ?>
      </div> <!-- bottom links -->
      </div> <!-- middle4b -->
    </div> <!-- middle4a -->
    <span class="right"></span>
    </div> <!-- middle 4 -->
  </div>
