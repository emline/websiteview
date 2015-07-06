  <div class="grid_4">
    <div class="ad300x250"><a href="http://www.redcross.org/templates/render/render.jsp?pageId=3400006&scode=RSG00000E020&subcode=RCO_Storytellers_WebBanner"><img src="http://www.redcross.org:80/images/MEDIA_CustomProductCatalog/m16141464_300x250-Storytellers-Angelina-General-Web-Banner.jpg" alt="Storytellers Web Banner" /></a></div>

    <div class="blk">
    <h3 class="blk-header">Newest
    Topics
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
  </div>