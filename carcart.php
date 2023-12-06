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


<!-- cart area -->


<div class="cart-area-c pt-20 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 pr-xxl-0">
                <div class="cart-img-c">
                    <img src="assets/img/car_cart_s/TH_1 (1).jpg" alt="">
                    <div class="cart-multiple-img-c d-flex justify-content-space-between align-item-center">
                        <a href=""><</a>
                        <img src="assets/img/car_cart_s/TH_1 (2).jpg" alt="">
                        <img src="assets/img/car_cart_s/TH_1 (3).webp" alt="">
                        <img src="assets/img/car_cart_s/TH_1.jpg" alt="">
                        <a href="">></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 pl-xxl-0 pr-xxl-0">
                <div class="product-name-c">
                    <h4>2021 CHEVROLET 6500HD Switch-N-Go</h4>
                    <div class="cart-header-c d-flex justify-content-space-between">
                        <div class="cart-header-part1-c">
                        <span>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </span>
                        <span>
                            <h5>3013 <p> ratings</p></h5>
                        </span>
                        </div>
                        <div class="cart-header-part2-c">
                            <span><i class="fa-solid fa-share"></i></span>
                            <span><i class="fa-solid fa-heart"></i></span>
                        </div>

                    </div>
                    <div class="product-brand-c">
                        <span>Brand:<a href=""> Lenevo</a> | <a href="">More Audio From lenevo</a></span>
                    </div>
                    <div class="product-price-c">
                        <h6>$420</h6>
                        <span>$1300 <h5>-68%</h5></span>
                    </div>
                    <div class="quantity-checkbox-c">
                        <input type="checkbox"> Cash On Delivery
                        <a href="contact.php" class="buy-btn-c">Buy now</a>
                    </div>



                </div>

            </div>
            <div class="col-xxl-3  pl-xxl-0">
                <div class="cart-right-c">
                    <div class="delivery-header-c d-flex justify-content-space-between align-item-center">
                    <h4>Delivery</h4>
                    <i class="fa-sharp fa-solid fa-circle-info"></i>
                    </div>
                    <div class="cart-location-c d-flex justify-content-space-between ">
                        <span><i class="fa-solid fa-location-dot"></i> Barishal, Barishal - Agailjhara,<br> Agailjhara Sadar</span>
                        <a href="">Change</a>
                    </div>

                    <div class="cart-delivary-c d-flex justify-content-space-between p-5">
                        <span><i class="fa-solid fa-truck"></i> Standard Delivery <h6> 2 - 11 day(s)</h6></span>
                        <h5>$12</h5>
                    </div>
                    <div class="cart-cash-c p-5">
                        <span><i class="fa-solid fa-money-bill"></i> Cash on delivery</span>
                    </div>
                    <div class="delivery-header-bottom-c d-flex justify-content-space-between align-item-center">
                        <h4>Service</h4>
                        <i class="fa-sharp fa-solid fa-circle-info"></i>
                        </div>
                        <div class="return-policey-c">
                            <span><i class="fa-solid fa-bullseye"></i>  Days Returns<h5>Change of mind is not applicable</h5></span>
                        </div>
                        <div class="warrenty-c">
                            <span><i class="fa-solid fa-shield"></i> Warranty not available</span>
                        </div>

                        <div class="agent-name-c">
                            <table>
                                <tr>
                                  <td>Selling by:</td>
                                </tr>
                                <tr>
                                    <td class="company-name-c">Navia.Ltd</td>
                                </tr>
                              </table> 
                        </div>
                        <div class="agent-rating-c text-align-center">
                            <table>
                                <tr>
                                  <td>Name:Milton Dey</td>
                                  <td>NID:23232322</td>
                                </tr>
                                <tr>
                                    <td>Phone:323332323</td>
                                    <td>Address:Dhaka</td>
                                </tr>
                              </table> 
                        </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xxl-10 pt-xxl-0 pr-xxl-0">
                <div class="specification-c">
                    <h4 class="product-header-c">Product details of 2021 CHEVROLET 6500HD Switch-N-Go</h4>
                    <div class="product-specification-c">
                      <div class="row">
                        <div class="col-xxl-6">
                       <div class="product-details-c pl-15">
                        <ul>
                            <li>
                                Brand: Lenovo
                            </li>
                            <li>
                                Model : HE05Bluetooth Headphones
                            </li>
                            <li>
                                Main Features:
                            </li>
                            <li>
                                It features BT 5.0 technology, convenient for you to connect it to your smartphone, with CVC noise-canceling mic, the earphones get rid of static and environmental noises during phone calls, so that you can have clearer and more stable calls.
                            </li>
                            <li>
                                Top grade loudspeakers, giving you all-around stereo sound, perfect for playing games.
                            </li>
                            <li>
                                Built-in 80mAh rechargeable battery, giving it a standby time of 120 hours and continuous working time for about 8 hours.

                            </li>
                        </ul>
                     </div>
                        </div>
                        <div class="col-xxl-6">
                            <div class="product-details-c pl-15 pr-15">
                                <ul>
                                    <li>
                                        When connected to your phone, the battery capacity of the earphones will be shown on your phone so that you can know when to charge your earphoneseasily.
                                    </li>
                                    <li>
                                        With buttons on earphones, you can play / pause music, adjust volume and answer / end calls with one simple operation on the eardphones.
                                    </li>
                                    <li>
                                        Made from qualified metal and silicone material, it's dust-proof, sweatproof and waterproof, great for your daily use.
                                    </li>
                                    <li>
                                        Ergonomic and magnetic design, lightweight and very flexible, can be bent to any shape, easy to store.
                                    </li>
                                    <li>
                                        Wireless earphones, which sets your hands free and gives you more convenience for sports.
                                    </li>
                                    <li>
                                        Comes with 3 different sizes of eartips, meeting different needs for different ears, it will be more comfortable to wear.
                                    </li>
                                </ul>
                            </div>
                        </div>

                      </div> 
                    </div>

                </div>

                    
                <div class="specification-bottom-c">
                    <div class="row">
                        <div class="col-xxl-12 pl-xxl-15">
                            <ul>
                                <li>
                                    Lenovo HE05 Bluetooth Wireless Headphones
                                </li>
                                <li>
                                    Brand: Lenovo
                                </li>
                                <li>
                                    Model : HE05Bluetooth Headphones
                                </li>
                                <li>
                                    Main Features:
                                </li>
                                <li>
                                    It features BT 5.0 technology, convenient for you to connect it to your smartphone, with CVC noise-canceling mic, the earphones get rid of static and environmental noises during phone calls, so that you can have clearer and more stable calls.
                                </li>
                                <li>
                                    Top grade loudspeakers, giving you all-around stereo sound, perfect for playing games.
                                </li>
                                <li>
                                    Built-in 80mAh rechargeable battery, giving it a standby time of 120 hours and continuous working time for about 8 hours.
                                </li>
                                <li>
                                    When connected to your phone, the battery capacity of the earphones will be shown on your phone so that you can know when to charge your earphoneseasily.
                                </li>
                                <li>
                                    With buttons on earphones, you can play / pause music, adjust volume and answer / end calls with one simple operation on the eardphones.
                                </li>
                                <li>
                                    Made from qualified metal and silicone material, it's dust-proof, sweatproof and waterproof, great for your daily use.
                                </li>
                                <li>
                                    Ergonomic and magnetic design, lightweight and very flexible, can be bent to any shape, easy to store.
                                </li>
                                <li>
                                    Wireless earphones, which sets your hands free and gives you more convenience for sports.
                                </li>
                                <li>
                                    Comes with 3 different sizes of eartips, meeting different needs for different ears, it will be more comfortable to wear.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    
            
            
            <div class="col-xxl-2 pt-xxl-0 ">
                <div class="row">
                    <div class="col-xxl-12 pt-xxl-0">
                        <div class="cart-product-c">
                            
                            <h5>Best Deals</h5>
                            <a href=""><img src="assets/img/car_cart_s/TH_1 (4).webp" alt=""></a>
                            <h4>Bmw seat A402</h4>
                            <span>$34<p> -54%</p></span>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12 pt-xxl-0">
                        <div class="cart-product-c">
                            
                            <h5>Best Deals</h5>
                            <a href=""><img src="assets/img/product_cart_item/product8.webp" alt=""></a>
                            <h4>Bmw seat A402</h4>
                            <span>$34<p> -54%</p></span>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12 pt-xxl-0">
                        <div class="cart-product-c">
                            
                            <h5>Best Deals</h5>
                            <a href=""><img src="assets/img/car_cart_s/TH_1.webp" alt=""></a>
                            <h4>Bmw seat A402</h4>
                            <span>$34<p> -54%</p></span>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
















<!-- reviews -->

<div class="review-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7">
                <div class="review-submission">
                <h4>Give your Review</h4>
                <input type="text" placeholder="comment">
                </div>
            <div class="row">
            <div class="col-xxl-7">
                <div class="single-review">
                    <img src="assets/img/reviews/01.png" alt="">
                    <h5>David bombal</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quos libero repellat reiciendis officia doloremque eligendi tempora similique.</p>
                </div>
            </div>
           </div>   
            <div class="row">
            <div class="col-xxl-7">
                <div class="single-review">
                    <img src="assets/img/reviews/03.png" alt="">
                    <h5>David bombal</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloribus dolorem vero nesciunt sunt sequi, ex magni ducimus quibusdam ipsam possimus animi natus, assumenda sapiente!</p>
                </div>
            </div>
           </div>   
           <div class="row">
            <div class="col-xxl-7">
                <div class="review-all">
                    <a href="">Review All</a>
                </div>
            </div>
           </div>
            </div>
            <div class="col-xxl-5">
                <div class="review-addverties pt-20">
                    <img src="assets/img/gifs/gif3.gif" alt="">
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