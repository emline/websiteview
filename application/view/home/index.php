<div id="content" class="clearfix">
<div class="front-content">
	
	<div id="main-story" class="w-350 padding-right float-left">
		<img src="<?php echo $this->model->imagecache('college-gameday2.jpg', 350, 300); ?>" />
		<h1>Test headline</h1>
		<h2>This area should be used as a summary for the main story.</h2>
	</div>
	<div id="sec-story" class="w-200 padding-right float-left">
		<?php foreach($newest as $new) {
			echo '<li><p><a href="/article/getarticle/' . $new->article_url .'">' . $new->article_headline . '</a></p></li>';
			echo "
			";
		}
		?>
		<p>This is a test sentence that is only meant to act as a place holder.</p>
	</div>
	<div class="clear"></div>
	<h3 class="margin-mini-bottom">Another test</h3>
	<img src="<?php echo $this->model->imagecache('dexter.jpg',50, 50); ?>" />
</div>