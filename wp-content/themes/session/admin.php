<?php #endregion

  session_start();
  if( !isset($_SESSION['success'])){
    header('location: index.php');
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>hellow admin pannel</h2> 

</body>
</html>