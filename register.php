<?php include('layouts/header.php');        ?>

<?php


include('server/connection.php');



//if user has already registered, then take user to account page            
if(isset($_SESSION['logged_in'])){
  header('location: account.php');
  exit;
}



if(isset($_POST['register'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  //if passwords dont match
  if($password !== $confirmPassword){
    header('location: register.php?error=passwords dont match');
  

  //if passwod is less than 6 char
  }else if(strlen($password) < 6){
    header('location: register.php?error=password must be at least 6 charachters');
  

  //if there is no error
  }else{
                //check whether there is a user with this email or not
                $stmt1= $conn->prepare("SELECT count(*) FROM users where user_email=?");
                $stmt1->bind_param('s',$email);
                $stmt1->execute();
                $stmt1->bind_result($num_rows);
                $stmt1->store_result();
                $stmt1->fetch();

                //if there is a user already registered with this email
                if($num_rows != 0){
                  header('location: register.php?error=user with this eamil already exists');
                  

                  //if no user registed with this email before
                }else{
                        //create a new user
                        $stmt = $conn->prepare("INSERT INTO users (user_name,user_email,user_password) 
                        VALUES (?,?,?)");

                        $stmt->bind_param('sss',$name,$email,md5($password));

                  

                        //if account was created successfully
                        if($stmt->execute()){
                              $user_id = $stmt->insert_id;
                              $_SESSION['user_id'] = $user_id;
                              $_SESSION['user_email'] = $email;
                              $_SESSION['user_name'] = $name;
                              $_SESSION['logged_in'] = true;
                              header('location: account.php?register_success=You registered successfully');

                          //account could not be created
                        }else{

                             header('location: register.php?error=could not create an account at the moment');

                        }



                }

              }







}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/903005c18e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
<style>
  #register-form{
    width: 50%;
    margin: 5px auto;
    text-align: center;
    padding: 20px;
    border-top: 1px solid #fb774b;
  }
  #register-form input{
    width: 50%;
    margin: 5px auto;
  }
  #register-form #register-btn{
    background-color: #fb774b;
    color: #fff;
  }
  #register-form #login-url{
    color: #fb774b;
  }
</style>
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
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li  class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>
          <li  class="nav-item">
            <a  class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
           <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a> 
           <a href="account.html"><i class="fa-solid fa-user"></i></a> 
          </li>
         
          </ul>
    </div>
    </div>
  </nav> 

  <!--Register-->
  <section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
         <h2 class="form-weight-bold">Register</h2>
         <hr class="mx-auto">
    </div>
            <div class="mx-auto container">
             <form method="POST" action="register.php" id="register-form">
                 <p style = "color:red;"><?php if(isset( $_GET['error'])) {echo $_GET['error'];   }?> </p>
                 <div class="form-group">
                     <label>Name</label>
                     <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required/>
                 </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="register-email" name="email" placeholder="Email" required/>
                </div>
                 <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required/>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="register-confirm-password" name="confirmPassword" placeholder=" Confirm Password" required/>
            </div>
              <div class="form-group">
               
                <input type="submit" class="btn" id="register-btn" value="Register" name="register"/>
            </div>
            <div class="form-group">
              <a id="login-url" herf= "login.php" class="btn">Don't have an account? Login</a>
              
          </div>
             </form>
            </div>

            
  </section>














  <?php include('layouts/footer.php');        ?>