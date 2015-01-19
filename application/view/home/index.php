<div id="content" class="clearfix">
<div class="front-content">
	
	<div id="main-story" class="w-350 padding-right float-left">
	<?php foreach ($toppicks as $toppick) {
		echo '<img src="' . $this->model->imagecache($toppick->article_image, 350, 300) . '" />';
		echo '<h1>' . $toppick->article_alt_headline . '</h1>';
		echo '<p>' . $toppick->article_summary . '</p>';
	}
	?>
	</div>
	<div id="sec-story" class="w-200 padding-right float-left">
		<?php foreach($newest as $new) {
			echo '<p><a href="/article/getarticle/' . $new->article_url .'">' . $new->article_headline . '</a></p>';
			echo "
			";
		}
		?>
		<p>This is a test sentence that is only meant to act as a place holder.</p>
	</div>
	<div class="clear"></div>
	<h3 class="margin-mini-bottom">Another test</h3>
	<div id="ep" class="w-100 float-left">
		<img src="<?php echo $this->model->imagecache('dexter.jpg',100, 100); ?>" /><br />
		<h2 class="margin-mini-bottom">Test headline</h2>
	</div>
	<div id="ep" class="w-100 float-left padding-left">
		<img src="<?php echo $this->model->imagecache('college-gameday2.jpg',100, 100); ?>" /><br />
		<h2 class="margin-mini-bottom">Test headline</h2>
	</div>
	<div id="ep" class="w-100 float-left padding-left">
		<img src="<?php echo $this->model->imagecache('gfv.jpg',100, 100); ?>" /><br />
		<h2 class="margin-mini-bottom">Test headline</h2>
	</div>
</div>