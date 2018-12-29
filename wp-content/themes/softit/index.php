
 <?php
    $first = isset($_POST['firstname']) ? $_POST['firstname'] : "jahid";
    $first = isset($_POST['lastname']) ? $_POST['lastname'] : " hossain";
    $first = isset($_POST['email']) ? $_POST['email'] : " hossain@gmai.com";

    if( isset($_POST['info_submit'])){
        $success = "The form has been submitted";
    }
  ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("title"); ?></title>
</head>
<body>
  <h2>This my web site</h2>
 
  <form action="index.php" method="POST">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <input type="email" name="email" placeholder="Your email here">


    <input type="submit" name="info_submit" placeholder="Your email here">

  </form>
    <?php 
      if( isset($success)){
          echo $success;
      }
    ?>
first Name  <?php echo $firstname; ?> <br>
Last Name  <?php echo $lastname; ?> <br>
Email Address  <?php echo $email; ?> <br>




	<?php 
	
		wp_nav_menu( array(
		
			'theme_location' => 'main-menu',
    ));
    
  if( isset($_GET['name'])){
    echo $_GEt['name'];
  }

	?>
</body>
</html>