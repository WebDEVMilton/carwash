<!DOCTYPE php>
<?php 
include 'lib/session.php';
Session:: init();

?>
 <?php include 'lib/database.php';?>
 <?php $db=new Database() ;?>
<?php 
 //Session::checkSession();
?>



<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/plugins/fontawesome/slicknav/slicknav_min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
    <!-- header_top -->

    <div class="header-top">
        <div class="container">
              <div class="row">
                <div class="col-xxl-6 col-sm-12 col-lg-6 col-xl-6">
                    <div class="header-top-left d-flex justify-content-flex-start">
                        <div class="part1">
                            <i class="fa-solid fa-envelope"></i>
                            <span> info@carwash.com</span>
                        </div>
                        <div class="part2">
                             <i class="fa-solid fa-phone"></i>
                             <span>(+01) 123 456 7890</span>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xxl-6 col-lg-6 col-xl-6">
                    <div class="header-top-right d-flex justify-content-flex-end">
                        <span>Schedule</span>
                        <span>news</span>
                        <span>faq</span>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-facebook"></i>
                    </div>

                </div>
                
        
               </div>
          </div>
        </div>
        </div>
       
    </div>

<!-- header-bottom -->

<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 mt-xxl-10 col-sm-6 col-md-6 col-lg-4 pt-lg-30 col-xl-5 pt-xl-25">
                <a href="index.php"><h4>Car<span>Care</span></h4></a>
            </div>
            <div class="col-xxl-6 mt-xxl-0 mb-xxl-10 col-sm-6 col-md-6 col-lg-8 col-xl-7">
                <div class="header-bottom-main d-flex justify-content-space-evenly align-item-center text-align-center">
                <div class="header-bottom-part1">
                    <i class="fa-solid fa-car"></i>
                    <h4>Help Line</h4>
                    <span>+01-123-456-7891</span>
                </div>
                <div class="header-bottom-part2">
                    <i class="fa-solid fa-phone"></i>
                    <h4> Phone</h4>
                    <span>+01-123-456-7891</span>
                </div>
                <a href="" class="btn">Book Appoinment</a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
				if(isset($_GET['action'])){
							
							Session::destroy();
							header("Location:login.php");
						}					
					

	        ?>
<!-- header -->

<div class="header-area header-fixed">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-9 col-xl-9">
                <div class="header-menu">
                    <ul class="menu d-flex justify-content-flex-start">
                        <li><a href="index.php">home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li class="dropdown"><a href="service.php">Service</a></li>
                        <li><a href="sellingcar.php">selling car</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="profile.php">Account</a></li>
                        <li><a href="login.php">Log in</a>or<a href="register.php">Sign up</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3  col-xl-3 d-flex justify-content-flex-end">
                <div class="header-account text-align-right">
                    <h4> <a href="profile.php">Account</a></h4>
                    <i class="fa-solid fa-user"></i>
                        <?php
                        if(isset($_SESSION['login'])==true){

                        ?>
                    <h4><span><a href="?action=logout">log out</a> or </span><a href="register.php">sign up</a></h4>
                    <?php }?>
                        <?php
                        if(isset($_SESSION['login'])==false){

                        ?>
                    <h4><span><a href="?action=logout">log in</a> or </span><a href="register.php">sign up</a></h4>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- contact  -->

<div class="contact-header pt-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12">
                <div class="contact-header-main text-align-center text-transform-uppercase">
                    <i class="fa-sharp fa-solid fa-droplet"></i>
                    <h4>contact information</h4>
                    <p>Please talk to our company for car sell!! <br/> and if you chosse any car, contact with us thorugh the giving your valid information</p>  
                </div>

            </div>
        </div>
    </div>
</div>

<div class="contact-area pt-80 pb-50 ">
    <div class="container">
        <div class="row"> 
            <div class="col-xxl-6 pb-xxl-0 pl-xxl-100 col-sm-12 p-sm-0 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xxl-12 pb-xxl-0 col-sm-12 p-sm-0 col-md-12 col-lg-12">
                        <div class="contact-office">
                            <!-- php code start  -->
                                <?php
                                $select_contact="SELECT * FROM contact ORDER BY id ASC LIMIT 1";

                                $read_contact=$db->select($select_contact);
                                if($read_contact){
                                    while($result_contact=$read_contact->fetch_assoc()){
                
                                ?>

                            <!-- php code end  -->
                            <h5>Head office</h5>
                            <h4><i class="fa-solid fa-map-location-dot"></i><span><?php echo $result_contact['street_location'];?> ,<?php echo $result_contact['city'];?></span></h4>
                            <h4><i class="fa-solid fa-phone"></i><span><?php echo $result_contact['phone_num'];?></span></h4>
                            <h4><i class="fa-brands fa-telegram"></i><span>telegram support</span></h4>

                            <?php }}?>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xxl-12 pb-xxl-0 col-sm-12 p-sm-0 col-md-12 col-lg-12">
                        <div class="opening-hour">
                            <h4>Opening Hour</h4>
                            <ul>
                                <!-- php code start  -->
                                    <?php 
                                    $select_schedule="select * from schedule";
                                    $read_schedule=$db->select($select_schedule);
                                    if($read_schedule){
                                        while($result_schedule=$read_schedule->fetch_assoc()){

                                    
                                    ?>
                                <!-- php code end  -->

                                <li><h5><?php echo $result_schedule['day_name'];?>:</h5>
                                <span><?php echo $result_schedule['open_time']; ?>-
                                <?php echo $result_schedule['colse_time'];?></span></li>

                                <?php }}?>
                                <!-- php code loop end  -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-xxl-6 pr-xxl-100 pl-xxl-0 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="contact-form">
                            <h4>Send your Massage</h4>

                            <!-- php code start  -->
                                <?php
                                $error_empty_nam=$error_empty_eml=$error_empty_phn=$error_empty_txt=$insert_valid=$error_msg="";
                                
                                if(isset($_POST['submit'])){
                                    $name=$_POST['name'];
                                    $email=$_POST['email'];
                                    $phone=$_POST['phone'];
                                    $messages=$_POST['messages'];

                                    if(empty($name)){
                                        $error_empty_nam="Field must not be empty";
                                    }elseif(empty($email)){
                                        $error_empty_eml="Field must not be empty";
                                    }elseif(empty($phone)){
                                        $error_empty_phn="Field must not be empty";
                                    }
                                    elseif(empty($messages)){
                                        $error_empty_txt="Field must not be empty";
                                    }
                                    elseif(strlen($messages)<10){
                                        $error_msg="write at least 10 words";
                                    
                                    }
                                    else{
                                        $insert_msg="insert into message(name,email,phone,messages) 
                                        values('$name','$email','$phone','$messages')";
                                        $insert_row=$db->insert($insert_msg);
                                        if($insert_row){
                                            $insert_valid="message submited";
                                        }

                                    }

                                }
                                
                                ?>

                            <!-- php code end  -->


                            <form action="" method="post" enctype="multipart/form-data">
                                <span>Your Name:</span>
                                <input type="text" name="name">
                                <span class="error_empty_nam"><?php echo $error_empty_nam;?></span>

                                <span>Email:</span>
                                <input type="email" name="email">
                                <span class="error_empty_eml"><?php echo $error_empty_eml;?></span>

                                <span>Phone:</span>
                                <input type="number" name="phone">
                                <span class="error_empty_phn"><?php echo $error_empty_phn;?></span>

                                <span>Massage:</span>
                                <textarea  cols="30" rows="10" placeholder="Massage" name="messages"></textarea>
                                <span class="error_msg"><?php echo $error_msg;?></span>
                                <span class="error_empty_txt"><?php echo $error_empty_txt;?></span>


                                <input type="submit" value="Submit" name="submit" class="contact-btn">
                                <span class="insert_msg"><?php echo $insert_valid;?></span>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>    







        
    </div>
</div>














<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1351.9015267061204!2d-0.17462298074586308!3d51.53515664284912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e1!3m2!1sen!2sbd!4v1688055773598!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>





<div class="sponsor-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12">
                <div class="sponsor-logo d-flex justify-content-space-evenly">
                    <img src="assets/img/sponsor/bmw-logo.png" alt="">
                    <img src="assets/img/sponsor/bugatti-logo.png" alt="">
                    <img src="assets/img/sponsor/ford-logo.png" alt="">
                    <img src="assets/img/sponsor/lamborghini-logo.png" alt="">
                    <img src="assets/img/sponsor/porsche-logo.png" alt="">
                    <img src="assets/img/sponsor/subaru-logo.png" alt="">
                    <!-- <img src="assets/img/sponsor/tesla-logo.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
</div>







<!-- footer-top -->
<section class="footer-top pt-40 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-md-3 col-sm-12">
                <div class="footer-categories">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="">Car Appliances</a></li>
                        <li><a href="">Car paints</a></li>
                        <li><a href="">Car parts</a></li>
                        <li><a href="">Second hand car</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-md-3 col-sm-6">
                <div class="footer-categories">
                    <h4>Brands</h4>
                    <ul>
                        <li><a href="">Benjamin Button</a></li>
                        <li><a href="">Arm & Hammer</a></li>
                        <li><a href="">BisTech</a></li>
                        <li><a href="">OFS</a></li>
                        <li><a href="">Alera</a></li>
                        <li><a href="">Anna</a></li>
                        <li><a href="" class="active">View All</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-md-3 col-sm-6">
                <div class="footer-categories">
                    <h4>Further Info.</h4>
                    <ul>
                        <li><a href="">About us</a></li>
                        <li><a href="">Theme Styles</a></li>
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Gift Certificates</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Brands</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-md-3 col-sm-12">
                <div class="footer-categories">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="">Help & FAQs</a></li>
                        <li><a href="">Terms of Conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Online Returns Policy</a></li>
                        <li><a href="">Rewards Program</a></li>
                        <li><a href="">Rebate Center</a></li>
                        <li><a href="">Partners</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- footer-bottom -->
<section class="footer-bottom pt-40 col-sm-12 p-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-md-8">
                <div class="footer-bottom1">
                    <h4>Subscribe to our newsletter</h4>
                    <p>Get the latest updates on new products and upcoming sales</p>
                    <div class="footer-input">
                        <input type="text" placeholder="Your email address ">
                        <button type="submit">subscribe</button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-4 col-sm-12">
                <div class="footer-bottom2">
                    <h4>Store Info</h4>
                    <ul>
                        <li>685 Market Street</li>
                        <li>San Francisco, CA 94105, US</li>
                        <li>Call us at (018) 900-6690</li>
                        <li>email:<a href="">example@domain.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-md-12 col-sm-12">
                <div class="footer-bottom3">
                    <h4>Connect With Us</h4>
                    <ul>
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-youtube"></i></li>
                        <li><i class="fa-brands fa-square-snapchat"></i></li>
                        <li><i class="fa-brands fa-facebook-messenger"></i></li>
                    </ul>
                </div>
            </div>
    </div>
            <div class="row">
                <div class="col-xxl-6 col-sm-12">
                    <div class="footer-last-content pt-35">

                    </div>
                    <p class="fs-15 fw-200">© 2023 Superkart Demo. Powered by BigCommerce. <br>BigCommerce Templates by Themevale.com</p>
                </div>
                <div class="col-xxl-6 col-sm-12">
                    <div class="footer-last pt-45">
                       <ul>
                        <li><i class="fa-brands fa-cc-visa"></i></li>
                        <li><i class="fa-brands fa-cc-mastercard"></i></li>
                        <li><i class="fa-brands fa-cc-paypal"></i></li>
                        <li><i class="fa-brands fa-cc-amex"></i></li>
                        <li><i class="fa-brands fa-cc-discover"></i></li>
                        <li><i class="fa-brands fa-paypal"></i></li>
                    </ul> 
                    </div>
                    
                </div>
            </div>
        
    </div>
</section>

<!-- script area  -->
<script src="assets/js/jequery.min.js"></script>
<!-- slicknav  -->
<script src="assets/js/slicknav_min.js"></script>

<!-- stikey header -->
<script>
    $(window).load(function(){
        $(this).on('scroll', function() {
            if($(this).scrollTop() > 100) {
                $('.header-area').addClass('test');
            } else {
                $('.header-area').removeClass('test');
            }
        })
    })

    // slicknav 
    $('.header-area ul').slicknav();

</script>


</body>
</html>