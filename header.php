<!DOCTYPE html>
<html>
<head>
<title> <?php wp_title(); ?> </title>
<?php wp_head();?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body class="bi">

<?php wp_nav_menu(array('container_class'=>'menubar'));?>
