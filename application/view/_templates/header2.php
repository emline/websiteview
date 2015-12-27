<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php 
		if (isset($article->article_headline)) {
			echo $article->article_headline; 
		}
		else {
			echo 'Default Title';
		}
  ?>| Buried Ledes</title>
  <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/article.css" type="text/css" />
  <link href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/lib/960gs/code/css/min/960_12_col.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/lib/jquery/jquery-1.11.3.min.js"></script>
  <script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/js/livesearch.js"></script>
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

<!-- Share This Code Start -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "585a436c-6103-4093-bf23-ef67149b6149", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!-- Share This Code End -->

<body id="home"> 

<!-- START BODY -->
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
      <div style="padding-right: 10px;"><a href="#">Sign in Using Facebook</a> <span>|</span> <?php if (isset($_COOKIE['gp4'])) : ?><a href="<?php echo URL_PROTOCOL . URL_DOMAIN . "/"; ?>/admin">Manager</a> | <a href="<?php echo URL_PROTOCOL . URL_DOMAIN . "/"; ?>/logout.php">Log Out</a><?php else : ?><a href="<?php echo URL_PROTOCOL . URL_DOMAIN . "/"; ?>/admin">Log In</a><?php endif; ?> | <a href="#">Subscribe Now</a> | <a href="#">Help</a></div>
    </div>
    <div id="header">
      <a href="<?php URL_PROTOCOL . URL_DOMAIN ?>/"><span class="col-md6 logo">Maybe Magazine</span></a>
      <div class="col-md-6 search-bar">
        <form id="search_box" action="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/search/getkeyword/" method="get">
          <div class="grid_6">
		  
			<div class="grid_4 alpha">
				<form>
					<input id="search2" name="q" value="" class="form-control" placeholder="Search here" type="text" size="30" onkeyup="showResult(this.value)">
					<div id="livesearch"></div>
				</form>
			</div>
            
			<div class="grid_2 alpha">
				<button id="search-button" type="submit" title="Search" class="btn btn-default"><span><span>Search</span></span></button>
			</div>
          </div>
        </form>
      </div>
    </div>
    <div id="container" >
      <ul class="solidblockmenu">
        <li id="nav-home" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN . "/"; ?>">Home</a></li>
        <li id="nav-about" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/page/getpage/about">About</a></li>
        <li id="nav-news" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/category/news">News</a></li>
        <li id="nav-features" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/category/getcategory/features">Features</a></li>
        <li id="nav-opinion" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/category/opinion">Opinion</a></li>
        <li id="nav-contact" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/page/getpage/contact">Contact</a></li>
        <li class="email" class="col-md-1"><a href="http://gmail.com/">E-mail</a></li>
        <li class="facebook" class="col-md-1"><a href="http://facebook.com/">Facebook</a></li>
        <li class="twitter" class="col-md-1"><a href="http://twitter.com/">Twitter</a></li>
      </ul>
    </div>
	
    <div class="container_12">