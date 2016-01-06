  <div class="grid_8">
      <h2>Search Results</h2>

	   
	   <?php 
	     foreach ($keyword as $v) {
	     	
	      echo '<li><p><a href="/article/getarticle/' . $v->article_url . '">' . $v->article_headline . '</a><br /></p></li>';
	       	     	
	     }
 
	   
	   ?>
  </div>