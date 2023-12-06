<!DOCTYPE html>

<?php 
include '../lib/session.php';
Session:: init();

?>
 <?php include 'database.php';?>
 <?php $db=new Database() ;?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title> Login Form </title>
    <link rel="stylesheet" href="assets/login_style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
          <?php
          if($_SERVER['REQUEST_METHOD'] =='POST'){
              
        $email= mysqli_real_escape_string($db->link,$_POST['email']);
        $password= $_POST['password'];
        $query= "SELECT * FROM  user WHERE email='$email' AND password= '$password' ";
        $result= $db->select($query);
        if($result != false){
          $value=$result->fetch_array();
            Session::set("login",true);
            Session::set("email",$value['email']);
            Session::set("password",$value['password']);
            Session::set("status",$value['status']);
            Session::set("fname",$value['fname']);
            Session::set("lname",$value['lname']);
            Session::set("id",$value['id']);
            
            header("Location:../index.php");
            }else{
        echo   "<script>alert('user name or password not match')</script>";
        }
        }   
        
        
        ?>
 




    <div class="container">
      <form action="" method="post">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" name="email"placeholder="Enter Your Email" required />
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="password" placeholder="Enter Your Password" required />
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Log in" />
        </div>
      </form>
      <div class="option">Not Yet Register?<a href="registration.php">Registration Here</a></div>
      <!--<div class="twitter">
        <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
      </div>
      <div class="facebook">
        <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
      </div>-->
    </div>
  </body>
</html>
