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


    <div class="grid_8 alpha"> <!-- start editor picks -->

    <?php foreach ($secondary as $sec) {
      echo '<div class=" grid_2 alpha">
      <a href="/article/getarticle/' . $sec->article_url . '"><img src="' . $this->model->imagecache($sec->article_image,140, 140) . '" /></a><br />
      <a href="/article/getarticle/' . $sec->article_url . '"><h4 class="margin-mini-bottom">' . $sec->article_headline . '</h2></a>
       </div>';
    }
    ?>

    <div class="clear"></div>

	<h2>About Maybe Magazine</h2>
    <p>Maybe Magazine is an independent website about anything and everything. I originally started it to focus on comic books. But since I don't really read too many, I've decided to make it my personal platform for my writing.</p>

    </div> <!-- end editor picks -->

  </div> <!-- end grid_8 -->

  <div class="grid_4">
    <div style="height: 250px; margin: 0 0 20px 0; width: 300px;">
        <a href="http://www.redcross.org/templates/render/render.jsp?pageId=3400006&scode=RSG00000E020&subcode=RCO_Storytellers_WebBanner"><img src="http://www.redcross.org:80/images/MEDIA_CustomProductCatalog/m16141464_300x250-Storytellers-Angelina-General-Web-Banner.jpg" alt="Storytellers Web Banner" /></a>
    </div>

      <div class="blk">
        <h3 class="blk-header">
      Newest Topics
        </h3>
        <ul>
      <?php foreach ($newest as $new) {
          echo '<li><p><a href="/article/getarticle/' . $new->article_url .'">' . $new->article_headline . '</a></p></li>';
          echo "
          ";
          }
          ?>
        </ul>
    </div>
  </div> <!-- end grid_4 -->
