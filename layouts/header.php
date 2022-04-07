<?php
// $uri = $_SERVER['REQUEST_URI'];
// echo $uri; // Outputs: URI
//  echo '<br>';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
  <link rel="stylesheet" href="assets/custom/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Playfair+Display&display=swap" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
</head>
<body>
  <!-- start header -->
  <header>
    <div class="header">
      <a href="#default" class="logo">Sahyog Physiotherapy</a>
      <div class="header-right">
            <a  class="active" href="index.php">Home</a>
            <a href="bookappoitment.php">Book Appoitment</a>
            <a href="update.php">Update</a>
            <a href="gellary.php">Gallery</a>
            <a  href="product.php">Product</a>
            <a href="about.php">About</a>
            <a href="contact.php">contact us</a>
            <?php 
            session_start();
            if (isset($_SESSION["login_email"])) {
              echo '<a href="logout.php" >Logout</a>';
            }else{
              echo '<a href="signin.php" >Log in</a>
              <a href="signup.php" >Sign up</a>';
            }
            ?>
            
      </div>
    </div>
  </header>
  <!-- end header -->