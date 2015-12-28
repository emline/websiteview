<div class="grid_8">
    <h2>Opinion</h2>
	
    <?php 
	
	if(!empty($category)) {
		foreach ($category as $v) {
		echo '<li><p><a href="/article/getarticle/' . $v->article_url .'">' . $v->article_headline . '</a></p></li>';
		echo "
		";
		}
	}
	else {
		echo 'No stories.';
	}
	
    ?>

</div>