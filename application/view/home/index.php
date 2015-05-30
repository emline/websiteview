<div class="container_12">

  <div class="grid_8">

    <div class="grid_5 alpha">

      <?php foreach ($toppicks as $toppick) 
      {
	    	echo ' <a href="' . URL_PROTOCOL . URL_DOMAIN . '/article/getarticle/' . $toppick->article_url . '"><img src="' . $this->model->imagecache($toppick->article_image, 380, 300) . '" /></a>';
	  	   echo '<h1><a href="' . URL_PROTOCOL . URL_DOMAIN . '/article/getarticle/' . $toppick->article_url . '">' . $toppick->article_alt_headline . '</a></h1>';
	  	   echo '<p>' . $toppick->article_summary . '</p>';
    	}
  	   ?>

    </div> <!-- end grid_5 -->
    
    <div class="grid_3 omega">
      <?php foreach($newest as $new) 
       {
		 	  echo '<p><a href="/article/getarticle/' . $new->article_url .'">' . $new->article_headline . '</a></p>';
			  echo "
			  ";
		  }
		  ?>
		  
		  <p>This is a test sentence that is only meant to act as a place holder.</p>
    </div> <!-- end grid_3 -->

  </div> <!-- end grid_8 -->
  
  
  <div class="grid_8"> <!-- start editor picks -->
  
    <?php foreach ($secondary as $sec) {
    	echo '<div class=" grid_2 alpha">
   		<img src="' . $this->model->imagecache($sec->article_image,140, 140) . '" /><br />
   		<h2 class="margin-mini-bottom">' . $sec->article_headline . '</h2>
   	   </div>';
    }
    ?>
    
    <!-- Use "for" instead of "foreach" loop so you can configure correctly for nested elements. -->
    
    <div class="clear"></div>
    
    <p>This is a test. I am now pushing all staging changes to FTPloy and all master changes with Deploy HQ, which currently allows up to 10 deployments per day. The latter will only occupull requests that I approve.</p>
  
  </div> <!-- end editor picks -->


</div> <!-- end container_12 -->







<div id="content" class="clearfix">
<div class="front-content">

	<div id="main-story" class="w-350 padding-right float-left">
	
	</div>
	<div id="sec-story" class="w-200 padding-right float-left">
		
	</div>
	<div class="clear"></div>
	<h3 class="margin-mini-bottom">Another test</h3>

  

 <div class="clear"></div>

 

</div>