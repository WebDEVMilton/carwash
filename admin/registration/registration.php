
<?php

include('database.php');
include('sendEmail.php');
?>

<?php

					  $db=new database();

					  if(isset($_POST['submit'])) {
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];

							$email = $_POST['email'];

							$password = $_POST['password'];
							$con_password= $_POST['con_password'];			      

							$code = rand();
							if($password != $con_password){
								echo "<script>alert('password not match!')</script>";
								
							}elseif(!preg_match("/^([a-zA-Z' ]+)$/", $fname)){
								
							echo "<script>alert('Error! Only Alphabets and Whitespace are allowed')</script>";
							}elseif(!preg_match("/^([a-zA-Z' ]+)$/", $lname)){
								
							echo "<script>alert('Error! Only Alphabets and Whitespace are allowed')</script>";
							}elseif(!preg_match("/^\\S+@\\S+\\.\\S+$/", $email)){
								
							echo "<script>alert('this is not valid email')</script>";
							}else{
							$emailquery= "select *from  user  where email= '$email' limit 1";
			                $mailcheck= $db->select($emailquery);
							 if($mailcheck != false){
							echo "<script>alert('email already exist')</script>";

						 }
							
							else{
								
							$sql = "INSERT INTO user(fname,lname,email,password,status,code) VALUES('$fname','$lname','$email','$password','user','$code')";

							$result = $db->insert($sql);

								  if ($result) {

								   echo "<script>alert('please waiting for verify,your will varify by email')</script>";

								$sendMl->send($code,$email);
                
								
								}
								 else{
							  echo "<script>alert('something wrong')</script>";
					  }

					}
					  }
					  }


			?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  Registration  </title>
    <link rel="stylesheet" href="assets/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <p>You are already register?<a href="login.php">login here</a></p>
    <div class="title">Registration</div>
    <div class="content">
      <form action=" " method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" name="lname" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <!--<div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>-->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="con_password" placeholder="Confirm your password" required>
          </div>
        </div>
       <!-- <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>-->
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
