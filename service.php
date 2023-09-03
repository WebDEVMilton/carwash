<?php include 'lib/database.php';?>
<?php include 'session.php'; ?>
<?php $db=new database(); ?>
<?php 
 Session::init();
?>

<!DOCTYPE php>
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

<!-- service -->

<section class="service-area bg" style="background-image: url('assets/img/service_s/bg-01.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h4 class="service-header text-align-center">Services</h4>
            </div>
        </div>

    </div>
</section>




<section class="service-main pt-40 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="service-cat bg" style="background-image: url('assets/img/service_s/slide02.jpg');">
                    <div class="row">
                        <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="service-category-header">
                                <h4 class="cat-header">Service Categorie</h4>
                            </div>
                            
                        </div>
                    </div>

                    <!-- php code start  -->

                        <?php 
                                $select_service="select * from servicecat";
                                $read_service=$db->select($select_service);
                                if($read_service){
                                while($result_service=$read_service->fetch_assoc()){
                                        
            
                        ?>

                    <!-- php code end -->


                    <div class="row">
                        <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="service-category">
                                <div class="row">

                                    <div class="col-xxl-1 col-sm-1 p-sm-0 ">
                                        <i class="fa-solid fa-pump-soap"></i>
                                    </div>
                                    <div class="col-xxl-7 col-sm-6 p-sm-0">
                                        <h4><?php echo $result_service['service_name']?></h4>
                                    </div>
                                    <div class="col-xxl-3 col-sm-5 pt-sm-0 pb-sm-0">
                                        <div class="service-category-btn">
                                        <a href="service_subcat.php?serviceid=<?php echo $result_service['id']?>" class="service-btn">view details</a>
                                        </div>  
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <?php }}?>
                    <!-- php loop end  -->
                </div>
            </div>
        </div>

    </div>
</section>



<div class="service-cart pb-60" style="background-image: url('assets/img/about_a/bg-01.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-xl-12">
              <div class="service-price d-flex justify-content-space-between text-align-center">
                <div class="single-price">
                    <h4>Routine <br>Maintanance</h4>
                    <h6>Start From</h6>
                    <h5>76$</h5>
                    <div class="price-list">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>6 x car wash</li>
                            <li><i class="fa-solid fa-check"></i>1 x lights check</li>
                            <li><i class="fa-solid fa-check"></i>1 x tires replacement</li>
                        </ul>
                    </div>

                </div> 
                <div class="single-price">
                    <h4>ELECTRONICS <br/> DIAGNOSTIC</h4>
                    <h6>Start From</h6>
                    <h5>109$</h5>
                    <div class="price-list">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>6 x car wash</li>
                            <li><i class="fa-solid fa-check"></i>1 x lights check</li>
                            <li><i class="fa-solid fa-check"></i>1 x tires replacement</li>
                        </ul>
                    </div>
                </div>
                <div class="single-price">
                    <h4>Painting <br/> Works</h4>
                    <h6>Start From</h6>
                    <h5>159$</h5>
                    <div class="price-list">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>6 x car wash</li>
                            <li><i class="fa-solid fa-check"></i>1 x lights check</li>
                            <li><i class="fa-solid fa-check"></i>1 x tires replacement</li>
                        </ul>
                    </div>

                </div> 
                <div class="single-price">
                    <h4>COLLISION  <br/> REPAIR</h4>
                    <h6>Start From</h6>
                    <h5>199$</h5>
                    <div class="price-list">
                        <ul>
                            <li><i class="fa-solid fa-check"></i>6 x car wash</li>
                            <li><i class="fa-solid fa-check"></i>1 x lights check</li>
                            <li><i class="fa-solid fa-check"></i>1 x tires replacement</li>
                        </ul>
                    </div>

                </div> 
                </div>

            </div>
        </div>

<!-- about title  -->
        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="service-title text-align-center">
                    <span>Why <h6>Choose</h6> us</span>
                    <p>the car repair Appoinment</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="service-purpose text-align-center">
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
                    <div class="service-button d-flex justify-content-center">
                    <a href="" class="btn-bannar">Read more</a>
                    <p class="or">or</p>
                    <a href="" class="btn-about">Get started</a>
                    </div>

                    
                    
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
</php>