<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>CLIMATE STAR'S</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/headerStyle.css">
<!--todo文字種変更-->
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/header.js"></script>
<body>
  <?php get_header(); ?>
  <?php the_content(); ?>
<?php get_footer(); ?>

</body>
</html>
