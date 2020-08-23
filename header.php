<!DOCTYPE html>
<html lang="ja">
<meta charset="<?php bloginfo('charset'); ?>" >
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta content="width=device-width,initial-scale=1.0,user-scalable=yes" name="viewport">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- [if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<header>
<nav class="navbar navbar-default" style="margin-bottom:0;">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
      <span class="sr-only">メニュー</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="#">HOME</a></li>
      <li><a href="#">PROFILE</a></li>
      <li><a href="#">BLOG</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
  </div>
</nav>
<div id="top-vg">
<img src="<?php echo get_template_directory_uri(); ?>/images/top.jpeg" alt="トップページ画像" >
</div>
</header>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>