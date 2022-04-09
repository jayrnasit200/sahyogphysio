<?php
include 'functions.php';
// print_r(getfilename_url('1'));


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo get_sitename();?></title>
  <link rel="icon" href="<?php echo get_logo();?>" type="image/icon type">

  <link rel="stylesheet" href="assets/custom/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Playfair+Display&display=swap" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
  <!-- start header -->
  <header>
    <div class="header">
      <a href="<?php echo gethost();?>" class="logo"><?php echo get_sitename();?></a>
      <div class="header-right">
            <a  class="<?php if(empty(getfilename_url(2)) || getfilename_url(2) == "index.php"){echo "active";} ?>" href="index.php">Home</a>
            <a  class="<?php if(getfilename_url(2) == "bookappoitment.php"){echo "active";} ?>" href="bookappoitment.php">Book Appoitment</a>
            <a class="<?php if(getfilename_url(2) == "update.php"){echo "active";} ?>" href="update.php">Update</a>
            <a class="<?php if(getfilename_url(2) == "gellary.php"){echo "active";} ?>" href="gellary.php">Gallery</a>
            <a  class="<?php if(getfilename_url(2) == "product.php"){echo "active";} ?>" href="product.php">Product</a>
            <a class="<?php if(getfilename_url(2) == "about.php"){echo "active";} ?>" href="about.php">About</a>
            <a class="<?php if(getfilename_url(2) == "contact.php"){echo "active";} ?>" href="contact.php">contact us</a>
            <?php 
            session_start();
            if (isset($_SESSION["login_id"]) || isset($_SESSION["admin"])) {
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