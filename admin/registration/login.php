<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="form">
      
        <ul class="tab-group" style="text-align:center;margin-left:40px">
          <li class="tab active"><a style="margin-left:95px;" href="registration.php">Sign Up</a></li>
       
        </ul>
        
        <div class="tab-content">
          <div id="signup">   
            <h1>Log in here</h1>
            <form action="/" method="post">
            
                <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label>
                  Password<span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off"/>
              </div>
              
              <p class="forgot"><a href="#">Forgot Password?</a></p>
              
              <button class="button button-block"/>Log In</button>
              
           </form>
    
            
          
  
          </div>
          
          <div >   
           
            
            
          </div>
          
        </div><!-- tab-content -->
        
  </div> <!-- /form -->
    <script src="main.js"></script>
    
</body>
</html>