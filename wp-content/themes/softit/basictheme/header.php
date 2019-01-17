<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" />


<?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>
    <!-- <ul id="page">
        <li class="topNaviagationLink"><a href="index.html">Home</a></li>
        <li class="topNaviagationLink"><a href="index.html">About</a></li>
        <li class="topNaviagationLink"><a href="index.html">Portfolio</a></li>
        <li class="topNaviagationLink"><a href="index.html">Services</a></li>
	    <li class="topNaviagationLink"><a href="index.html">Contact</a></li>
	</ul> -->

	
	<div class="logo-area">
		
		<?php global $basictheme; print_r($basictheme); ?>

		<p>
			<img src="<?php echo $basictheme['logo-uploader']['url']; ?>" alt="">
		</p>

	</div>


	<?php 

		wp_nav_menu(array(
			'theme_location' => 'main-menu',
			'menu_id' => 'page',
			'walker' => new amadermenu()
		));

	?>