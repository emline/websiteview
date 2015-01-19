<!DOCTYPE html>
<head>

    <title><?php if (isset($headline)) : ?><?php print $headline; ?> | Maybe Magazine<?php else : ?>Home | Maybe Magazine<?php endif; ?></title>
    <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/article.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/login.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/files/css/jquery-ui.css" />
    <link href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/publ<?php echo URL_PROTOCOL . URL_DOMAIN; ?>deo-js/video-js.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">var switchTo5x = true;</script>
    <!-- <script type="text/javascript">stLight.options({publisher:'585a436c-6103-4093-bf23-ef67149b6149'});</script> -->
    <script type="text/javascript" src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/misc/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.c<?php echo URL_PROTOCOL . URL_DOMAIN; ?>10.4/jquery-ui.js"></script>
    <script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/publ<?php echo URL_PROTOCOL . URL_DOMAIN; ?>neral.js" type="text/javascript"></script>
    <script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/publ<?php echo URL_PROTOCOL . URL_DOMAIN; ?>deo-js/video.js"></script>
    <script>
        videojs.options.flash.swf = "<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/video-js/video-fjs.swf";
    </script>
	<script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/publ<?php echo URL_PROTOCOL . URL_DOMAIN; ?>adxmldoc.js"></script>
    <?php
    if (isset($headline)) {

        include("view_meta-article.php");
    } elseif (isset($categoryd)) {

        include("view_meta-article.php");
    }
    ?>
    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=171310049594891";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $(document).ready(function() {
        var carousel = 0;
        $(".left").click(function() {
            if (carousel < 1) {
                $("#middle4b").animate({
                    "margin-left": "-1540px"
                }, 500);
                carousel = 5;
            } else {
                $("#middle4b").animate({
                    "margin-left": "+=308px"
                }, 500);
                carousel -= 1;
            }
        });
        $(".right").click(function() {
            if (carousel < 5) {
                $("#middle4b").animate({
                    "margin-left": "-=308px"
                }, 500);
                carousel += 1;
            } else {
                $("#middle4b").animate({
                    "margin-left": "0px"
                }, 500);
                carousel = 0;
            }
        });
    });
</script>

<!-- Share This Code Start -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "585a436c-6103-4093-bf23-ef67149b6149", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!-- Share This Code End -->

<body id="<?php if($url_controller = 'article') { print 'news'; } else { print 'home'; } ?>"> <!-- START BODY -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=171310049594891";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div id="wrapper"> <!-- START WRAPPER -->
            <div id="top">
                <div style="padding-right: 10px;"><a href="#">Sign in Using Facebook</a> <span>|</span> <?php if (isset($_COOKIE['gp4'])) : ?><a href="<?php print $root; ?>/admin">Manager</a> | <a href="<?php print $root; ?>/logout.php">Log Out</a><?php else : ?><a href="<?php print $root; ?>/admin">Log In</a><?php endif; ?> | <a href="#">Subscribe Now</a> | <a href="#">Help</a></div>
            </div>
            <div id="header">
                <a href="<?php URL_PROTOCOL . URL_DOMAIN ?>/"><span class="col-md6 logo">Maybe Magazine</span></a>
                <div class="col-md-6 search-bar">
                    <form id="search_box" action="http://dev.matthewguhit.com/search/getkeyword/" method="get">
                        <div class="form-search">
                            <table width="300" border="0">
                                <tr>
                                    <td valign="baseline">
                                        <input id="search" type="text" name="q" value="" class="input-text" onclick="if (this.value == 'Search Keywords Here')
                                                    this.value = '';" onblur="if (this.value == '')
                                                                this.value = 'Search Keywords Here';" "autocomplete="off">
                                    </td>
                                    <td valign="baseline">
                                        <button id="search-button" type="submit" title="Search" class="button"><span><span>Search</span></span></button>
                                        <script type="text/javascript">
                                            //<![CDATA[
                                            var searchForm = new Varien.searchForm('search_box', 'search', 'Search entire store here...');
                                            //]]>
                                        </script>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div id="container" >
                <ul class="solidblockmenu">

                    <li id="nav-home" class="col-md-1"><a href="<?php print $root; ?>">Home</a></li>
                    <li id="nav-about" class="col-md-1"><a href="<?php echo $root; ?>/page/1">About</a></li>
                    <li id="nav-news" class="col-md-1"><a href="<?php echo $root; ?>/category/news">News</a></li>
                    <li id="nav-features" class="col-md-1"><a href="<?php echo $root; ?>/category/features">Features</a></li>
                    <li id="nav-opinion" class="col-md-1"><a href="<?php echo $root; ?>/category/opinion">Opinion</a></li>
                    <li id="nav-contact" class="col-md-1"><a href="<?php echo $root; ?>/page/2">Contact</a></li>
                    <li class="email" class="col-md-1"><a href="http://gmail.com/">E-mail</a></li>
                    <li class="facebook" class="col-md-1"><a href="http://facebook.com/">Facebook</a></li>
                    <li class="twitter" class="col-md-1"><a href="http://twitter.com/">Twitter</a></li>

                </ul>
                <!-- Recommited this segment due
                     to likely deployment error by
                     ftploy. Code is good, but upon
                     checking source in browser, it
                     cuts off closing div to the 
                     container id.
                -->
            </div>
