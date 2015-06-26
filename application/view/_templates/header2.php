<!DOCTYPE html>
<head>
  <title><?php echo $article->article_headline; ?>| Maybe Magazine</title>
  <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/article.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/login.css" type="text/css" />
  <link href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/css/960_12_col.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/js/jquery-2.1.4.min.js"></script>

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

<!-- Share This Code Start -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "585a436c-6103-4093-bf23-ef67149b6149", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!-- Share This Code End -->

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/scripts/type/livesearch?q="+str,true);
  xmlhttp.send();
}
</script>

<body id="<?php if($url_controller = 'article') { print 'news'; } else { print 'home'; } ?>"> 

<script src="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/public/js/jquery-2.1.4.min.js"></script>

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
          <div class="form-search">
            <table width="300" border="0">
              <tr>
                <td valign="baseline">
					<form>
					<input id="search2" name="q" value="" class="input-text" type="text" size="30" onkeyup="showResult(this.value)">
					<div id="livesearch"></div>
					</form>
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
        <li id="nav-home" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN . "/"; ?>">Home</a></li>
        <li id="nav-about" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/page/1">About</a></li>
        <li id="nav-news" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/category/news">News</a></li>
        <li id="nav-features" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/category/features">Features</a></li>
        <li id="nav-opinion" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/category/opinion">Opinion</a></li>
        <li id="nav-contact" class="col-md-1"><a href="<?php echo URL_PROTOCOL . URL_DOMAIN; ?>/page/2">Contact</a></li>
        <li class="email" class="col-md-1"><a href="http://gmail.com/">E-mail</a></li>
        <li class="facebook" class="col-md-1"><a href="http://facebook.com/">Facebook</a></li>
        <li class="twitter" class="col-md-1"><a href="http://twitter.com/">Twitter</a></li>
      </ul>
    </div>
	
    <div class="container_12">