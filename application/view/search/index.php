<div id="content" class="clearfix">
<div class="front-content">
    <h2>Not Available2</h2>
    <?php foreach($newest as $new) {
        echo '<li><a href="http://dev.matthewguhit.com/article/getarticle/' . $new->article_url . '">' . $new->article_headline . '</a></li>';
    }
    ?>
</div>