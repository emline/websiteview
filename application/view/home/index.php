<div id="content" class="clearfix">
<div class="front-content">
	
	<div id="main-story" class="w-350 padding-right float-left">
		<img src="<?php echo $this->model->imagecache('college-gameday2.jpg', 350, 300); ?>" />
		<h1>Test headline</h1>
		<h2>You are in the View: application/view/home/index.php (everything in the box comes from this file)</h2>
	</div>
	<div id="sec-story" class="w-200 padding-right float-left">
		<p>test</p>
	
		<p>In a real application this could be the homepage.</p>
		<?php foreach($newest as $new) {
			echo '<li><p><a href="/article/getarticle/' . $new->article_url .'">' . $new->article_headline . '</a></p></li>';
			echo "
			";
		}
		?>
	</div>
	<div class="clear"></div>
	<h3 class="margin-mini-bottom">Another test</h3>
	<img src="<?php echo $this->model->imagecache('dexter.jpg',50, 50); ?>" />
</div>