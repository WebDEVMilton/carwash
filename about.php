

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


<!-- about  -->
<div class="about-top bg" style="background-image: url('assets/img/about_a/slide03.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h4 class="text-align-center">About us</h4>
            </div>
        </div>
    </div>
</div>



<div class="about-area pt-50 pb-120">
    <div class="container">
        <div class="row">
        <!-- php code start  -->
                <?php 
                $select_about="SELECT * FROM owner ORDER BY id DESC LIMIT 1";
                $read_about=$db->select($select_about);
                if($read_about){
                    while($result_about=$read_about->fetch_assoc()){

                    
                ?>

        <!-- php code end  -->

            <div class="col-xxl-6 pr-xxl-0 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="about-owner">
                    <img src="admin/<?php echo $result_about['owner_photo'];?>" alt="">
                </div>

            </div>
            <div class="col-xxl-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="owner-details">
                    <span><?php echo $result_about['first_name']?><h4><?php echo $result_about['last_name'];?></h4></span>
                    <h5><?php echo $result_about['owner_position'];?></h5>
                    <p><?php echo $result_about['owner_about'] ;?></p>
                    <p><?php echo $result_about['owner_about'] ;?></p>
                    <p><?php echo $result_about['owner_about'] ;?></p>
                    <img src="assets/img/about_a/signature.png" alt="" class="sing">

                    
                </div>

            </div>

        <?php }}?>

        <!-- php while loop end  -->

        </div>
    </div>
</div>


<div class="about-cart pb-60" style="background-image: url('assets/img/about_a/bg-01.jpg');">
    <div class="container">

<!-- about title  -->
        <div class="row">
            <div class="col-xxl-12 col-sm-12 pt-sm-40 col-md-12 col-lg-12 col-xl-12">
                <div class="about-title text-align-center">
                    <span>Why <h6>Choose</h6> us</span>
                    <p>the car repair Appoinment</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-sm-12 pt-sm-0 col-md-12 col-lg-12 col-xl-12">
                <div class="about-purpose text-align-center">
                    <p>Autospa Hand Wash is an eco-friendly, hand car wash and detailing service based in Portland. Our company <br/> was founded back in 2005 by a team of experts with more then 10 years of professional car wash experience.</p>
                    <p>Our goal is to provide our customers with the friendliest, most convenient hand car wash experience possible.<br/> We use the most modern and up-to-date.</p>
                    <div class="purpose-option d-flex justify-content-space-evenly">
                        <div class="single-purpose">
                             <i class="fa-solid fa-user"></i>
                            <p>We offer multiple services <br/> at a great value</p>
                        </div>
                        <div class="single-purpose">
                            <i class="fa-solid fa-building-columns"></i>
                            <p>Multiple car wash locations <br/> throughout Portland</p>
                        </div>
                        <div class="single-purpose">
                            <i class="fa-solid fa-pump-soap"></i>
                            <p>Biodegradable and eco- <br/>friendly products</p>

                        </div>
                        
                    </div>
                    <a href="" class="btn-bannar">Read more</a>
                    <p class="or">or</p>
                    <a href="" class="btn-about">Get started</a>
                    
                    
                </div>
            </div>
        </div>

    </div>
</div>



<!-- about services -->

<div class="about-service pt-60">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 pb-sm-0 col-md-12 col-lg-12 col-xl-12">
                <div class="about-title text-align-center">
                    <span>Our <h6>Services</h6></span>
                    <p class="mb-40">the car repair Appoinment</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-4 col-sm-12 pt-sm-0 col-md-12 col-lg-4 col-xl-4">
                <div class="service-main d-flex flex-direction-column justify-content-space-between pl-110">
                        <div class="single-service mb-50">
                            <span><i class="fa-solid fa-user"></i>Car Towing</span>
                            <p>Drumstick leberkas tenderloin <br/> swine laborum cupim bacon.</p>
                        </div>
                        <div class="single-service mb-50">
                            <span><i class="fa-solid fa-user"></i>Car Towing</span>
                            <p>Drumstick leberkas tenderloin <br/> swine laborum cupim bacon.</p>
                        </div>
                        <div class="single-service mb-50">
                            <span><i class="fa-solid fa-user"></i>Car Towing</span>
                            <p>Drumstick leberkas tenderloin <br/> swine laborum cupim bacon.</p>
                        </div>
                </div> 


            </div>
            <div class="col-xxl-4 col-sm-12 pt-sm-0 col-md-12 col-lg-4 col-xl-4">
                <div class="service-img">
                    <img src="assets/img/about_a/01.png" alt="">
                </div>
            </div>
            <div class="col-xxl-4 col-sm-12 col-md-12 col-lg-4">
                <div class="service-main d-flex flex-direction-column justify-content-space-between pl-90">
                    <div class="single-service mb-50">
                        <span><i class="fa-solid fa-user"></i>Car Towing</span>
                        <p>Drumstick leberkas tenderloin <br/> swine laborum cupim bacon.</p>
                    </div>
                    <div class="single-service mb-50">
                        <span><i class="fa-solid fa-user"></i>Car Towing</span>
                        <p>Drumstick leberkas tenderloin <br/> swine laborum cupim bacon.</p>
                    </div>
                    <div class="single-service mb-50">
                        <span><i class="fa-solid fa-user"></i>Car Towing</span>
                        <p>Drumstick leberkas tenderloin <br/> swine laborum cupim bacon.</p>
                    </div>
            </div> 
            </div>
        </div>
    </div>
</div>



<!-- employe-area  -->

<div class="employe-area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-4 col-xl-12">
                <div class="about-title text-align-center">
                    <span>Meet our<h6>Team</h6></span>
                    <p>the car repair Appoinment</p>
                </div>
            </div>
        </div>


        <div class="row">
            
        <!-- php code start  -->
            <?php 
            $select_employe="select * from employe  order by id desc limit 3";
            $read_employe=$db->select($select_employe);
            if($read_employe){
                while($result_employe=$read_employe->fetch_assoc()){            
            
            ?>
        <!-- php code end  -->


        
            <div class="col-xxl-4 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="single-employe text-align-center">
                    <img src="admin/<?php echo $result_employe['employe_img'];?>" alt="">
                    <div class="employe-btn">
                        
                        <a href="" class="btn-bannar">Mail me</a>
                    </div>
                    <div class="employe-link">
                        <ul>
                            <li><a href=""><i class="fa-solid fa-user"></i><?php $result_employe['fb_link']?></a></li>
                            <li><a href=""><i class="fa-solid fa-user"></i><?php $result_employe['twitter_link']?></a></li>
                            <li><a href=""><i class="fa-solid fa-user"></i><?php $result_employe['whtsapp_link']?></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>


            <?php }}?>
        <!-- php while loop end  -->
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