<div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>

                        </li>
						
						 <li><a class="menuitem">Home</a>
                            <ul class="submenu">
                                <li ><a href="add_banner_d.php">Add Banner</a></li>
                                <li><a href="banner_list_d.php">Banner List</a></li>
                            </ul>
                        </li>

                        <li><a class="menuitem">Car Sell</a>
                            <ul class="submenu">
                                <li ><a href="add_car_Brand_d.php">add car brand</a></li>
                                <li><a href="car_brand_list_d.php">Brand list</a></li>
                                <li ><a href="add_car_d.php">Add car</a></li>
                                <li ><a href="car_list_d.php">Car list</a></li>
                            </ul>
                        </li>


						
                         <li><a class="menuitem">Product</a>
                            <ul class="submenu">
                                <li><a href="add_product_brand_d.php">Add product Brand</a></li>
                                <li><a href="product_brand_list_d.php">product brand list</a></li>
                                <li><a href="add_product_d.php">Add product</a></li>
                                <li><a href="product_list_d.php">Product list</a></li>
                            </ul>
                        </li>

                        <li><a class="menuitem">Services</a>
                            <ul class="submenu">
                                <li><a href="add_service_cat_d.php">Add Services category</a> </li>
                                <li><a href="service_cat_list_d.php">Services category List</a> </li>
                                <li><a href="addservice_package_d.php">Add Services Package</a> </li>
                                <li><a href="service_package_list_d.php"> Package list</a> </li>
                                
                            </ul>
                        </li>


                         <li><a class="menuitem">Rent</a>
                            <ul class="submenu">
                                <li><a href="add_rent_info_d.php">Add rent Information</a></li>
                                <li><a href="rent_info_list_d.php">Rent information  list</a></li>
                            </ul>
                        </li>
                         <li><a class="menuitem">Shedule</a>
                            <ul class="submenu">
                                <li><a href="add_shedule_d.php">Add Shedule</a></li>
                                <li><a href="shedule_list_d.php">Shedule list</a></li>
                            </ul>
                        </li>

                         <li><a class="menuitem">Advertise</a>
                            <ul class="submenu">
                                <li><a href="add_ads_d.php">Add Advertise</a></li>
                                <li><a href="ads_list_d.php">Advertise list</a></li>
                            </ul>
                        </li>
                        
                        <li><a class="menuitem">About</a>
                            <ul class="submenu">
                                <li><a href="add_employe_d.php">Add employee</a></li>
                                <li><a href="employe_list_d.php">Employee list</a></li>
                                <li><a href="add_owner_details_d.php">Add Owner Details</a></li>
                                <li><a href="owner_details_list_d.php">Owner Details list</a></li>
                            </ul>
                        </li>

                        
                        <li><a class="menuitem">Contact</a>
                            <ul class="submenu">
                                <li><a href="add_contact_info_d.php">Add Contact Information</a></li>
                                <li><a href="contact_details_list_d.php">Contact detail</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Sponsor</a>
                            <ul class="submenu">
                                <li><a href="add_sponsor_d.php">add sponsor</a></li>
                                <li><a href="sponsor_list_d.php">Sponsor list</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Gallery</a>
                            <ul class="submenu">
                                <li><a href="add_gallery_d.php">Add Gallery</a></li>
                                <li><a href="gallery_list_d.php">Gallary photo list</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">message</a>
                            <ul class="submenu">
                                <li><a href="add_message_d.php">add messages</a></li>
                                <li><a href="message_list_d.php">message list</a></li>
                            </ul>
                        </li>


                        <!-- php code start  -->
                        <?php                         
                        if($_SESSION['status']=='admin'){
                        
                        ?>
                        

                        <li><a class="menuitem">users</a>
                            <ul class="submenu">
                                <li ><a href="userlist_d.php">User List</a></li>
                                <li><a href="banner_list_d.php">Banner List</a></li>
                            </ul>
                        </li>


                        <?php }?>

                        <!-- php code end  -->


                        <li><a class="menuitem">Orders</a>
                            <ul class="submenu">
                                <li><a href="banner_list_d.php">Order List</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>