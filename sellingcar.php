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


<!-- rent car -->

<!-- <div class="rent-area pb-200" style="background-image: url('assets/img/logo/Driv_900X300_900x300_.gif');">

</div> -->


<!-- rent-bottom  -->
<div class="car-sell-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 pb-xxl-0 col-sm-12 col-md-12 col-lg-3 col-xl-3 p-xl-0 pt-xl-15">
                <div class="car-search">
                    <input type="search" placeholder="bmw,seat-cover" class="search-product">
                    <input type="submit" class="search-btn" value="search">
                </div>
            </div>
            <div class="col-xxl-9 col-sm-12 col-md-12 col-lg-9 col-xl-9 p-xl-0 pt-xl-15">
                <div class="car-type d-flex justify-content-space-between">

                        <?php
                            $select_branda="SELECT * FROM carbrand ORDER BY id DESC LIMIT 7";
                            $read_branda=$db->select($select_branda);
                            if($read_branda){
                                while($result_branda=$read_branda->fetch_assoc()){

                            
                        ?>

                    <div class="single-type">
                        <a href="sellcarby_brand.php?sellcarby_brand_id=<?php echo $result_branda['id'];?>"></a>
                        <img src="admin/<?php echo $result_branda['brandimage'] ?>" alt="" class="brand-img">
                    </div>

                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- rent-right-option -->

<div class="car-rent">
    <div class="container">
        <div class="row">
            <!-- car-list -->
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="car-sell-list-option">
                            <ul>
                                <li>Sorted by:</li>
                                <li><a href="">Recomended</a></li>
                                <li><a href="">Lowest Total Price</a></li>
                                <li><a href="">Car Type</a></li>
                                <li><a href="">Closest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12 col-sm-12 col-lg-12 pb-lg-0">

            <!-- php code start  -->
                    <?php 
                        
                        $selectsellingcar="SELECT sellcar.*, carbrand.*
                        FROM sellcar
                        INNER JOIN carbrand ON carbrand.id = sellcar.carbrand_id
                        ORDER BY sellcar.carmodel asc
                        LIMIT 10";
                        
                        $readsellingcar=$db->select($selectsellingcar);
                        if($readsellingcar){
                            while($resultsellingcar=$readsellingcar->fetch_assoc()){                    

                        ?>
                <!-- php code end  -->

                        <h4 class="car-selling-header"><?php echo $resultsellingcar['carmodel'] ?></h4>
                        <div class="car-selling-main d-flex ">
                            <div class="car-selling-part1">
                                <img src="admin/<?php echo $resultsellingcar['carimage'] ?>" alt="">
                                <h5><?php echo $resultsellingcar['car_type'] ?></h5>
                            </div>
                            <div class="car-selling-part2 text-align-left">
                                <h4><?php echo $resultsellingcar['manufac_company'] ?></h4>
                                <i class="fa-solid fa-location-dot"><span><?php echo $resultsellingcar['location'] ?></span></i>
                                <h5><?php echo $resultsellingcar['phonenum'] ?></h5>
                                <ul class="d-flex justify-content-space-between">
                                    <li>Stock #<?php echo $resultsellingcar['stockserial'] ?></li>
                                    <li>$<?php echo $resultsellingcar['carprice'] ?></li>
                                </ul>
                                <div class="car-selling-bottom d-flex justify-content-space-between">
                                    <div class="item-spec">
                                        <table>
                                          <tbody>
                                            <tr>
                                                <th class="">Mileage</th>
                                                <td class=""><?php echo $resultsellingcar['mileage'] ?></td>
                                            </tr>
                                            <tr>
                                                <th class="">Engine</th>
                                                <td class=""><?php echo $resultsellingcar['enginename'] ?></td>
                                            </tr>
                        
                                        </tbody>
                                    </table>
                                    </div>
                                <div class="selling-btn mt-15">
                                     <a href="carcart.php" class="btn-bannar">Add to cart</a>
                                </div>
                                 
                                </div>
                                
                            </div>
                        </div>


                        <?php }}?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xxl-12 col-sm-12 col-md-12 pb-md-0 col-lg-12 col-xl-12">
                        <div class="page-changer text-align-center">
                            <ul>
                                <li><a href=""><i class="fa-solid fa-circle-arrow-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa-sharp fa-solid fa-circle-arrow-right"></i></a></li>
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
            <div class="col-xxl-7 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <div class="review-submission">
                <h4>Give your Review</h4>
                <input type="text" placeholder="comment">
                </div>
            <div class="row"> 
            <div class="col-xxl-7 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <div class="single-review">
                    <img src="assets/img/reviews/01.png" alt="">
                    <h5>David bombal</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quos libero repellat reiciendis officia doloremque eligendi tempora similique.</p>
                </div>
            </div>
           </div>   
            <div class="row">
            <div class="col-xxl-7 col-sm-12  col-md-12 col-lg-7 col-xl-7">
                <div class="single-review">
                    <img src="assets/img/reviews/03.png" alt="">
                    <h5>David bombal</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloribus dolorem vero nesciunt sunt sequi, ex magni ducimus quibusdam ipsam possimus animi natus, assumenda sapiente!</p>
                </div>
            </div>
           </div>   
           <div class="row">
            <div class="col-xxl-7 col-sm-12  col-md-12 col-lg-7 col-xl-7">
                <div class="review-all">
                    <a href="">Review All</a>
                </div>
            </div>
           </div>
            </div>
            <div class="col-xxl-5 col-sm-12  col-md-12 col-lg-5 col-xl-5">
                <div class="review-addverties pt-20">
                    <img src="assets/img/gifs/photo2.gif" alt="">
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