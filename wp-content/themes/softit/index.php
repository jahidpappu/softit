<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class( ) ?> >
  <div class="header-area">
    <img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="">
    <img src="<?php header_image(); ?>" alt="">
  </div>

 	<?php 
	
		wp_nav_menu( array(
		
			'theme_location' => 'main-menu',
    ));
    
 
?>
<?php wp_footer();?>  
</body>
</html>

