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

            $product_brand_id =$_POST['product_brand_id'];
            $product_name=$_POST['product_name'];
            $previous_price=$_POST['previous_price'];
            $current_price=$_POST['current_price'];
            $discount=$_POST['discount'];




            $permited = array('png','webp','jpeg','pdf','jpg','jpg');//permission file
            $product_image=$_FILES['product_image']['name'];
            $product_image_size = $_FILES['product_image']['size'];
            $temp_product_image=$_FILES['product_image']['tmp_name'];
            $div=explode('.',$product_image);
            $file_ext=strtolower(end($div));
            $unique_product_image=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $main_product_image="upload/". $unique_product_image;

            if(empty($product_brand_id)|| empty($product_name)||  empty($previous_price)|| empty($current_price)){
                echo "field must not be empty";
            }
            if(empty($product_image)){
                echo "field must not be empty";
            }elseif($product_image_size>10485670){
                echo "banner Size should be less then 1MB!";

            }elseif(in_array($file_ext, $permited) === false){
                echo "You can upload only:"
						           .implode(',', $permited)."";

            }  else{
                move_uploaded_file($temp_product_image,$main_product_image);

                $insert="insert into  product(product_brand_id,product_name,previous_price,current_price,discount,product_image) 
                values('$product_brand_id','$product_name','$previous_price','$current_price','$discount','$main_product_image')";
                $insert_product=$db->insert($insert);
                if($insert_product){
                    echo "product insert success";
                }else{
                    echo "Something went wrong!";
                }

            }

                
        }
       
       
       ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">	
                        
                    <select name="product_brand_id" id="">
                        <option value="">Select Brand</option>

                    <?php
                    $select_querry="select * from   productbrand";

                    $read=$db->select($select_querry);
                    if($read){
                        while($result=$read->fetch_assoc()){

                    ?>
                    
                        <option value="<?php echo $result['id'];?>"><?php echo $result['productbrand_name'];?></option>

                    <?php }}?>

                    </select>


                        <tr>
                        <tr>
                            <td>
                               Product Name: <input type="text" name="product_name"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                               Previous Price: <input type="text" name="previous_price"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                               Current Price: <input type="text" name="current_price"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Discount: <input type="text" name="discount"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Product Image: <input type="file" name="product_image"  class="medium" />
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