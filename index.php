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

<!-- bannar -->

<div class="bannar-area bg " style="background-image: url('assets/img/bannar/bannar.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-lg-3 col-xl-3">

            </div>
            <div class="col-xxl-8  col-sm-12 col-md-12 col-lg-9 col-xl-9">
                <div class="bannar-main pt-240">
                    <h4 class="fw-700 fs-60">We care for your car</h4>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident at dolorem alias</span> repellendus cupiditate quod expedita labore perferendis ab eum.</p>
                    <a href="register.php" class="btn-bannar">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Schedule -->

<div class="schedule-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="schedule-about">
                    <h4>CAR SPA</h4>
                    <p>Edinbirgh’s Premier Car Spa is Here! Based just one mile up the A7 from Sherifhall Roundabout we are easy to find and look forward to seeing you!</p>
                </div>
            </div>
            <div class="col-xxl-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="schedule-main">
                    <h4 class="mb-20">Opening Times</h4>
                    <ul class="schedual-time">


                            <!-- php code start  -->

                            <?php 
                                $select_schedule="SELECT * FROM schedule  desec LIMIT 7";
                                $read_schedule=$db->select($select_schedule);
                                if($read_schedule){
                                    while($result_schedule=$read_schedule->fetch_assoc()){                    
                            
                            
                            ?>
                            <!-- php code end  -->

                        <li class=" single-time mt-30">
                        <?php echo $result_schedule['day_name']?> 
                        <?php echo $result_schedule['open_time']?>-<?php echo $result_schedule['colse_time']?>
                        </li>

                        <?php }}?>
                        <!-- php while loop end   -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- product -->

<div class="productd-aread pt-50 pb-80">
    <div class="container">
        <div class="section-title">
            <h4>RECOMMENDED PRODUCTS</h4>
        </div>
        <div class="row">

          <!-- recomended product start -->
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="single-productd d-flex justify-content-space-evenly text-align-center pb-10">


                            <!-- php code start -->
                            <?php
                            $db=new database();
                                
                            $select_rec_product="SELECT * FROM product ORDER BY RAND() LIMIT 4";

                            $read_rec_product=$db->select($select_rec_product);
                            if($read_rec_product){
                                    while($result_rec_product=$read_rec_product->fetch_assoc()){

                                
                            ?>
                            <!-- php code end  -->

                    <div class="product-maind">
                        <a href="productcart.html"><img src="admin/<?php echo $result_rec_product['product_image']?>" alt=""></a>
                        <h4><?php echo $result_rec_product['product_name']?></h4>
                        <span><?php echo $result_rec_product['current_price']?></span>
                    </div>

                    <?php }}?>
                <!-- php while loop close  -->

                </div>
            </div>
            <!-- reconmended product end  -->


            <!-- recomended 2nd row product start -->
            <div class="col-xxl-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="single-productd d-flex justify-content-space-evenly text-align-center">


                            <!-- php code start -->
                            <?php
                            $db=new database();
                            
                            $select_recc_product="SELECT * FROM product ORDER BY RAND() LIMIT 4";

                            $read_recc_product=$db->select($select_recc_product);
                            if($read_recc_product){
                                while($result_recc_product=$read_recc_product->fetch_assoc()){

                            
                            ?>
                            <!-- php code end  -->


                    <div class="product-maind">
                       <a href="productcart.html"><img src="admin/<?php echo $result_recc_product['product_image']?>" alt=""></a> 
                        <h4><?php echo $result_recc_product['product_name']?></h4>
                        <span><?php echo $result_recc_product['current_price']?></span>
                    </div>

                    <?php }}?>
                <!-- php while loop close  -->
                </div>
            </div>

            <!-- recomended product end  -->
           
        </div>
    </div>
</div>

 <!--product end  -->



 
<!-- addvertise start -->

<div class="addvertise-area">
    <div class="add-area pt-150 pb-200" style="background-image: url('assets/img/needy/p1.png');"></div>

</div>






<!-- Galary -->
<div class="galary-area pt-60 pb-60">
    <div class="container">
        <div class="section-title">
            <h4>Recent works</h4>
        </div>
        <div class="row">
            <div class="col-xxl-12  col-lg-12 col-lg-12">

            <!-- php code start  -->
                <div class="gallary d-flex justify-content-space-evenly">
                <?php
                    $select_gallery="select * from  gallery order by id desc limit 4";
                    $read_gallery=$db->select($select_gallery);
                    if($read_gallery){
                        while($result_gallery=$read_gallery->fetch_assoc()){

                ?>
                <!-- php code end  -->

                <div class="single-gallary">
                    <img src="admin/<?php echo $result_gallery['image'];?> "alt="">
                </div>       

                <?php }}?>
                <!-- php while loop end  -->
                
                </div>


            </div>
        </div>
    </div>
</div>




<!-- rent -->

<div class="rent-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 pb-xxl-0 col-sm-12 col-md-12 col-lg-6 p-lg-0 col-xl-4">
                <div class="rent-part1">
                   <img src="assets/img/rent/photo3.jpg" alt=""> 
                </div>
                
            </div>
            <div class="col-xxl-4 pb-xxl-0 col-sm-12 pt-sm-0  col-md-12 col-lg-6 p-lg-0 col-xl-4">
                <div class="rent-part2">
                <h4>Talk to Manager for Rent</h4>
                <p class="text-align-center">ng elit. Earum iste, ipsum consectetur dolores mollitia quia ea corporis, ab laboriosam labore odio, facere at eaque corrupti!</p>
                <a href="" class="rent-btn">call090(393934)</a>
                <h5>own detail shop <span><a href="">learn more</a></span></h5>                    
                </div>

            </div>
            <div class="col-xxl-4 pb-xxl-0 col-sm-12  col-md-12 col-lg-4 p-lg-0 col-xl-4">
                <div class="rent-part3">
                   <img src="assets/img/rent/photo3.jpg" alt=""> 
                </div>
                
            </div>
        </div>
    </div>
</div>


<!-- car-selling -->

<div class="car-selling-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-2 col-sm-12 col-md-12 col-lg-2 col-xl-2">
               <h4 class="text-align-center brand">Brand</h4>

               <ul>
                    <!-- php code start  -->
                        <?php
                        $db=new database();
                        $selectcarbrand="select * from carbrand";
                        $readcarbrand=$db->select($selectcarbrand);
                        if($readcarbrand){
                            while($resultcarbrand=$readcarbrand->fetch_assoc()){               
                        ?>
                    <!-- php code end  -->

                <li><a href="carbrandby_home.php?carbrandby_id=<?php echo $resultcarbrand['id']?>"><?php echo $resultcarbrand['brandname']?></a></li>

                <?php }}?>

                <!-- php wile loop end  -->

               </ul>


            </div>
            <div class="col-xxl-10 col-sm-12 pb-sm-0 col-md-12 col-lg-10 col-xl-10">

            <!-- php code start  -->
                        <?php 
                        
                        $selectsellcar="select sellcar.*,carbrand.brandname
                        from sellcar
                        inner join carbrand on
                        carbrand.id=sellcar.carbrand_id
                        order by sellcar.carmodel desc limit 3";
                        
                        $readsellcar=$db->select($selectsellcar);
                        if($readsellcar){
                            while($resultsellcar=$readsellcar->fetch_assoc()){                    

                        ?>
                <!-- php code end  -->


                <h4><?php echo $resultsellcar['carmodel'] ?></h4>
                <div class="car-selling-main car-selling-d d-flex ">
                    <div class="car-selling-part1">
                        <img src="admin/<?php echo $resultsellcar['carimage'] ?>" alt="">
                        <h5><?php echo $resultsellcar['car_type'] ?></h5>
                    </div>
                    <div class="car-selling-part2 text-align-left">
                        <h4><?php echo $resultsellcar['manufac_company'] ?></h4>
                        <i class="fa-solid fa-location-dot"><span><?php echo $resultsellcar['location'] ?></span></i>
                        <h5><?php echo $resultsellcar['phonenum'] ?></h5>
                        <ul class="d-flex justify-content-space-between">
                            <li>Stock #<?php echo $resultsellcar['stockserial'] ?></li>
                            <li>$<?php echo $resultsellcar['carprice'] ?></li>
                        </ul>
                        <div class="car-selling-bottom d-flex justify-content-space-between">
                            <div class="item-spec">
                                <table>
                                  <tbody>
                                    <tr>
                                        <th class="">Mileage</th>
                                        <td class=""><?php echo $resultsellcar['mileage'] ?></td>
                                    </tr>
                                    <tr>
                                        <th class="">Engine</th>
                                        <td class=""><?php echo $resultsellcar['enginename'] ?></td>
                                    </tr>
                
                                </tbody>
                            </table>
                            </div>
                        <div class="selling-btn mt-15">
                             <a href="carcart.html" class="btn-bannar">Add to cart</a>
                        </div>
                         
                        </div>
                        
                    </div>
                </div>

                <?php }}?>
            <!-- php wile loop end  -->
            </div>
        </div>


        <div class="row">
            <div class="col-xxl-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-xl-0 ">
                <div class="selling-all-car">
                    <a href="sellingcar.php" class="selling-all-item">View All</a>
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
                    <?php 
                    
                    $select_gifs="SELECT ads.gifs
                    FROM ads
                    WHERE ads.gifs IS NOT NULL
                    ORDER BY RAND()
                    LIMIT 1";

                    $read_gifs=$db->select($select_gifs);
                    if($read_gifs){
                        while($result_gifs=$read_gifs->fetch_assoc()){        
                    ?> 

                    <img src="admin/<?php echo $result_gifs['gifs'] ?>" alt="">
                    <?php }}?>
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