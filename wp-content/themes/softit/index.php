<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("title"); ?></title>
</head>
<body>
	<h2>This my web site</h2>
	
	<?php 
	
		wp_nav_menu( array(
		
			'theme_location' => 'main-menu',
		));
	?>
</body>
</html>