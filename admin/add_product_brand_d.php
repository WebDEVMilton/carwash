<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Title</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
                <?php
                    $db=new database();
                    if(isset($_POST['submit'])){
                        $productbrand_name=$_POST['productbrand_name'];

                        $permited = array('png','webp','jpeg','pdf');//permission file
                        $product_brand_img=$_FILES['product_brand_img']['name'];
                        $product_brand_img_size = $_FILES['product_brand_img']['size'];
                        $temp_product_brand_img=$_FILES['product_brand_img']['tmp_name'];
                        $div=explode('.',$product_brand_img);
                        $file_ext=strtolower(end($div));
                        $unique_product_brand_img=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                        $main_product_brand_img="upload/". $unique_product_brand_img;
                        
                        
                        if(empty($productbrand_name)){
                            echo "field must not be empty";

                        }
                        elseif(empty($product_brand_img)){
                            echo "field must not be empty";

                        }else if($product_brand_img_size>1048567){
                            echo "banner Size should be less then 1MB!";
            
                        }elseif(in_array($file_ext, $permited) === false){
                            echo "You can upload only:"
                                               .implode(',', $permited)."";
            
                        }  else{
                            move_uploaded_file($temp_product_brand_img,$main_product_brand_img);
            
                            $insert="insert into  productbrand(productbrand_name,product_brand_img) values('$productbrand_name','$main_product_brand_img')";
                            $insert_product_brand=$db->insert($insert);
                            if($insert_product_brand){
                                echo " product brand & img insert success";
                            }else{
                                echo "Something went wrong!";
                            }

                            
                    }
                }
                        
                        


                    
                ?>
                <!-- php code end-->
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td>
                               Add car Brand: <input type="text" name="productbrand_name"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Add car Brand: <input type="file" name="product_brand_img"  class="medium" />
                            </td>
                        </tr>
                      
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php' ;?>