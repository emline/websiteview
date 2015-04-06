<div id="content" class="clearfix">
<div class="front-content">
	
	<div id="main-story" class="w-350 padding-right float-left">
	<?php foreach ($toppicks as $toppick) {
		echo ' <a href="' . URL_PROTOCOL . URL_DOMAIN . '/article/getarticle/' . $toppick->article_url . '"><img src="' . $this->model->imagecache($toppick->article_image, 350, 300) . '" /></a>';
		echo '<h1><a href="' . URL_PROTOCOL . URL_DOMAIN . '/article/getarticle/' . $toppick->article_url . '">' . $toppick->article_alt_headline . '</a></h1>';
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

  <?php foreach ($secondary as $sec) {
   	echo '<div id="ep" class="w-100 padding-mini-right float-left">
   		<img src="' . $this->model->imagecache($sec->article_image,100, 100) . '" /><br />
   		<h2 class="margin-mini-bottom">' . $sec->article_headline . '</h2>
   	</div>';
  }
  ?>

</div>