<div id="content" class="clearfix">
<?php if ($article->article_headline) : ?>
    <h1 class="headline"><?php echo $article->article_headline; ?></h1>

    <h2 class="deck"><?php echo $article->article_deck; ?></h2>
    <p class="byline">By <?php echo $byline->author_name; ?> | <?php echo $article->article_pdate; ?></p>
	
<?php endif; ?>
    <div class="front-content">
        <br />

        <?php if ($article->article_headline) : ?>
            <div class="addthistoolbar">

                <div class="add-tools">


			<span class='st_sharethis' displayText='ShareThis'></span>
			<span class='st_facebook' displayText='Facebook'></span>
			<span class='st_twitter' displayText='Tweet'></span>
			<span class='st_email' displayText='Email'></span>

			<!--
                    <div class="fb-like" data-href="<?php echo $root . '/article/' . $url . '.html'; ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>

                    <span  class='st_twitter_hcount' displayText='Tweet'></span>
                    <span  class='st_facebook_hcount' displayText='Facebook'></span>
                    <span class='st_fbrec_hcount' displayText='Facebook Recommend'></span> -->



                </div>
                <div class="text-size">Filed Under: <?php echo $article->category; ?></div> 
            </div>



            
			
                <div class="photobox">
                    <div class="img" style="width: 350px;"><img src="<?php echo $this->model->imagecache($article->article_image, 350, 300); ?>" />
                    </div>
                    
                    <div id="enlarge-wrapper">
                        <div class="photoEnlarge">
                            <a class="enlarge" href="#" onclick=
                               "window.open('http://localhost/drupal-6.19/themes/development/node-photoenlarge.html', 'Popup', 'width=640,height=550,scrollbars=no,noresize');
                                               return false;">
                                Enlarge</a>
                        </div>
                    </div>

                    <div class="credit">
                        <?php if (isset($article->article_image1c)) echo $article->article_image1c; ?>
                    </div>

                    <div class="caption">
                        <?php if (isset($article->article_image1d)) echo $article->article_image1d; ?>
                    </div>
                </div>
            
            
           

            
            
            

            <div class="text-story">
                <?php echo $article->article_body; ?>
            </div>

			
			<?php /*
            <div id="author-box">
                <div class="author-mug">
                    <img src="<?php echo imagecache($root, $mug, 87, 100); ?>" />
                </div>
                <div class="author-bio">
                    <h3>About <?php echo $name; ?></h3>
                    <p><?php echo $bio; ?> <a href="mailto:<?php echo $email; ?>">EMAIL</a> | <a href="http://twitter.com/<?php echo $twitter; ?>">TWITTER</a></p>
                </div>
            </div>

            <div class="related-stories">
                <h3 class="related-stories-header">More Articles You May Like</h3>

                <ul>

                    <?php
                    $result = mysql_query("SELECT * FROM external ORDER BY external_id DESC LIMIT 5");

                    while ($row = mysql_fetch_array($result)) {
                        echo '<li><div class="related-stories-block"><a href="' . $row['external_url'] . '" target="_blank">' . $row['external_headline'] . '</a> (' . $row['external_source'] . ') </div></li>';
                    }
                    ?>

                </ul>
            </div>



            <?php if ($comments == 2) : ?>
                <br /><br />
                <?php
                require("view_comments.php");
                //require_once(DIR_ROOT."/application/models/SubmitComment.php");
                ?>
                <br />
            <?php else : ?>
                <br></br>
                <strong>Comments are indefinitely closed.</strong>
            <?php endif; ?>
            <br></br>
			
			*/ ?>






        <?php else : ?>
            <?php header('HTTP/1.0 404 Not Found'); ?>
            <h1>Page Not Available</h1>
            <p>This page is currently not available. Please check back at a later time.</p>


        <?php endif; ?>

    </div> <!-- End Front Content -->