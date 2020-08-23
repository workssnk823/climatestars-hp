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

<header class="l-header">
  <div class="container-fluid">
    <h1 class="logo"><a href="<?php echo home_url("/"); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logoSample.jpg" alt="株式会社CLIMATESTAR'S"></a></h1>
    <div class="in">
      <div class="title">CLIMATESTAR'S </div>
      <nav class="gnavi hidden-xs">
        <ul>
          <!-- todo URL変更 -->
          <li><a href="<?php echo home_url("/"); ?>">トップ</a></li>
          <li><a href="<?php echo home_url("/companyProfile"); ?>">会社概要</a></li>
          <li><a href="<?php echo home_url("/bussinessContent"); ?>">事業内容</a></li>
          <li><a href="<?php echo home_url("/blog"); ?>">Blog</a></li>
          <li><a href="<?php echo home_url("/contact"); ?>">お問い合わせ</a></li>
        </ul>
                <!-- / .gnavi --></nav>
                <!-- / .in --></div>
                <div class="btn_box visible-xs">
                  <div class="menu_btn_wrapper">
                    <div class="menu_btn"> <span></span> </div>
                    <strong>MENU</strong>
                    <!-- / .menu_btn_wrapper --></div>
                    <!-- /.btn_box --></div>
                    <!-- / .container-fluid --></div>
                    <!-- / .l-header --></header>


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
