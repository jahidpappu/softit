
 <?php
   
    session_start();


    if( isset($_SESSION['success'])){
      header('location: admin.php');
    }


    if( isset($_POST['login'])){

      define('EMAIL', 'admin@gmail.com');
      define('PASSWORD', '123');

        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == EMAIL && $password == PASSWORD ){

          $_SESSION['success'] = '';

            header('location: admin.php');
        }
        else{
          $fail = "password does not match";
         }
      
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
      <input type="email" name="email" placeholder="Your email here">
      <input type="password" name="password" placeholder="Your email here">


    <input type="submit" name="login" placeholder="Your email here">

  </form>
    <?php 
      if( isset($success)){
          echo $success;
      }
    ?>
first Name  <?php echo $firstname; ?> <br>
Last Name  <?php echo $lastname; ?> <br>
Email Address  <?php echo $email; ?> <br>




 
</body>
</html>