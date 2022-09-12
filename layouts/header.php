<?php

session_start();

//include('../server/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>


</head>
<body>
    
   <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
        <img class="logo" src="assets/imgs/logo.png"/>
        <h2 class="brand">Planet</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="nav-buttons collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            <li  class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li  class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li  class="nav-item">
                <a  class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
               <a href="cart.php">
                <i class="fas fa-shopping-bag">
                  <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] !=0)    {    ?>

                       <span class="cart-quantity"> <?php echo $_SESSION['quantity'];      ?> </span>
                    <?php } ?>
                </i>
              </a> 
               <a href="account.php"><i class="fas fa-user"></i></a> 
              </li>
             
              </ul>
        </div>
        </div>
  </nav>