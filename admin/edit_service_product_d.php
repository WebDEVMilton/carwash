<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Show Car details</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
                <!-- get method  -->
                    <?php
                        $db=new database();
                        if(isset($_GET['editservproduct_id'])){
                            $editservproduct_id=$_GET['editservproduct_id'];
                        }
                        
                    
                    ?>

                    <?php
                            if(isset($_POST['submit'])){
                                $product_brand=$_POST['product_brand'];
                                $product_name=$_POST['product_name'];
                                $previous_price=$_POST['previous_price'];
                                $current_price=$_POST['current_price'];


                                $permited = array('png','webp','jpeg','pdf','jpg');//permission file
                                $product_image=$_FILES['product_image']['name'];
                                $product_image_size = $_FILES['product_image']['size'];
                                $temp_product_image =$_FILES['product_image']['tmp_name'];
                                $div=explode('.',$product_image);
                                $file_ext=strtolower(end($div));
                                $unique_product_image=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                                $main_product_image="upload/". $unique_product_image;

                                if(!empty($product_image)){
                                    
                                if($product_image_size>10485670){
                                    echo "banner Size should be less then 1MB!";

                                }elseif(in_array($file_ext, $permited) === false){
                                    echo "You can upload only:"
                                                    .implode(',', $permited)."";

                                }  else{
                                    move_uploaded_file($temp_product_image,$main_product_image);

                                    $update_product_querry="update product
                                    set product_brand='$product_brand',
                                        product_name ='$product_name',
                                        previous_price='$previous_price',
                                        current_price ='$current_price',
                                        product_image='$main_product_image'
                                    WHERE id='$editproductid'";


                                    $update_edit_product=$db->update($update_product_querry);
                                    if($update_edit_product){
                                        echo "product insert success";
                                    }else{
                                        echo "Something went wrong!";
                                    }

                                }
                            }else{
                                $update_querry="update product
                                set product_brand='$product_brand',
                                    product_name ='$product_name',
                                    previous_price='$previous_price',
                                    current_price ='$current_price'
                                where id='$editproductid'";


                                $update_product=$db->update($update_querry);
                                if($update_product){
                                    echo "product insert success";
                                }else{
                                    echo "Something went wrong!";
                                }
                            }


                                    
                        }
                
                ?>

                <!-- php code end  -->
            
            
			 
                 <form action="" method="post"  enctype="multipart/form-data">
                    <table class="form">
                        
                    
                    <?php 

                          $select="SELECT 
                          
                          
                          
                          
                          
                          
                          ";

                          $read=$db->select($select);
                          if($read){

                              $serial = 0;
                              while($result=$read->fetch_assoc()){
                              $serial++;
                  
                    ?>


                        <tr>
                            <td>
                            Brand category: <input type="text" name="product_brand" value="<?php echo $result['product_brand'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                            Brand category: <input type="text" name="product_name" value="<?php echo $result['product_name'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Car image:<img width="100" height="50"  src="<?php echo $result['product_image'] ?>" alt="">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="file" name="product_image">
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Company Name: <input type="text" name="previous_price" value="<?php echo $result['previous_price'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Location: <input type="text" name="current_price" value="<?php echo $result['current_price'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                        
                        <?php }}?>
                  
                      
					
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php' ;?>