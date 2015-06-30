  <div class="grid_8">
      <h2>Not Available2</h2>
      <?php foreach($newest as $new) {
          echo '<li><a href="http://dev.matthewguhit.com/article/getarticle/' . $new->article_url . '">' . $new->article_headline . '</a></li>';
       }
       ?>
	   
	   <?php echo $markup; ?>
  </div>