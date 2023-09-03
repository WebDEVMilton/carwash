<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add car For Sell</h2>
               <div class="block copyblock"> 



            <?php
            $db=new database();
            if(isset($_GET['editbrand_id'])){
                $editbrand_id=$_GET['editbrand_id'];
            }
            
            ?>



               <!-- php code start-->
       
       <?php
         if(isset($_POST['submit'])){
            $productbrand_name=$_POST['productbrand_name'];

            $permited = array('png','webp','jpeg','pdf','jpg');//permission file
            $product_brand_img =$_FILES['product_brand_img']['name'];
            $product_brand_img_size = $_FILES['product_brand_img']['size'];
            $temp_product_brand_img=$_FILES['product_brand_img']['tmp_name'];
            $div=explode('.',$product_brand_img);
            $file_ext=strtolower(end($div));
            $unique_product_brand_img =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $main_product_brand_img="upload/". $unique_product_brand_img;
            
            if(!empty($product_brand_img)){
                if($product_brand_img_size>10485670){
                    echo "Image Size should be less then 1MB!";

                }elseif(in_array($file_ext, $permited) === false){
                    echo "You can upload only:"
                                    .implode(',', $permited)."";

                }  else{
                    move_uploaded_file($temp_product_brand_img,$main_product_brand_img);

                    $update_querry="update productbrand 
                    set productbrand_name='$productbrand_name',
                        product_brand_img='$main_product_brand_img' 

                        where id='$editbrand_id'";

                    $read=$db->update($update_querry);
                    if($read){
                        echo "car details insert success";
                    }else{
                        echo "Something went wrong!";
                    }

            }
        }
        else{

            $updateproduct_brand="update productbrand 
            set productbrand_name='$productbrand_name'
            where id='$editbrand_id'";

            $read=$db->update($updateproduct_brand);
            if($read){
                echo "car details insert success";
            }else{
                echo "Something went wrong!";
            }

        }
           
        }
       
       
       
       ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">

                    <?php
                        $select_querry="select * from productbrand where id='$editbrand_id'";

                        $read=$db->select($select_querry);
                        if($read){
                            $serial=0;
                            while($result=$read->fetch_assoc()){
                                $serial++; 

                    ?>

                        <tr>
                            <td>
                               Car image: <input type="text" name="productbrand_name" value="<?php echo $result['productbrand_name']?>"  class="medium" />
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img width="100" height="70" src="<?php echo $result['product_brand_img']?>" alt="">
                               Car image: <input type="file" name="product_brand_img"  class="medium" />
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