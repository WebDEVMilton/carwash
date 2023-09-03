
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
								
							$sql = "INSERT INTO user(fname,lname,email,password,code) VALUES('$fname','$lname','$email','$password', '$code')";

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Registration</title>
</head>
<body>

    <div class="form">
      
        <ul class="tab-group">
          <li class="tab active"><a style="margin-left:120px;" href="login.php">Login Form</a></li>
          
        </ul>
        
        <div class="tab-content">
          <div id="signup">   
            <h1>Sign Up Here</h1>
						
            
        <form action="" method="post">
		        
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  First Name<span class="req">*</span>
                </label>
                <input type="text" name="fname" required />
              </div>
          
              <div class="field-wrap">
                <label>
                  Last Name<span class="req">*</span>
                </label>
                <input type="text" name="lname" required />
              </div>
            </div>
  
            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"  name="email" required />
            </div>
            
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="password" required />
            </div>
			   <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input type="password" name="con_password" required />
            </div>
            
            <input type="submit" name="submit" value="submit" class="button button-block" />
            
            </form>
  
          </div>
          <div >   
           
            
            
           </div>
        
        </div><!-- tab-content -->
        
  </div> <!-- /form -->

  <script src="main.js"></script>
    
</body>
</html>