<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add car For Sell</h2>
               <div class="block copyblock"> 



            <?php
            $db=new database();
            if(isset($_GET['editrentdtls_id'])){
                $editrentdtls_id=$_GET['editrentdtls_id'];
            }
            
            ?>



               <!-- php code start-->
       
       <?php
         $db=new database();
         if(isset($_POST['submit'])){
            $rent_headline =$_POST['rent_headline'];
            $rent_msg=$_POST['rent_msg'];
            $rent_contact=$_POST['rent_contact'];


            $permited = array('png','webp','jpeg','pdf','jpg');//permission file
            $rent_first_image =$_FILES['rent_first_image']['name'];
            $rent_second_img =$_FILES['rent_second_img']['name'];
            $rent_first_image_size = $_FILES['rent_first_image']['size'];
            $rent_second_img_size = $_FILES['rent_second_img']['size'];
            $temp_rent_first_image=$_FILES['rent_first_image']['tmp_name'];
            $temp_rent_second_img=$_FILES['rent_second_img']['tmp_name'];
            $div=explode('.',$rent_first_image);
            $div_second=explode('.',$rent_second_img);
            $file_ext=strtolower(end($div));
            $file_ext_second=strtolower(end($div_second));
            $unique_rent_first_image  =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $unique_rent_second_img  =substr(md5(time()), 0, 10).'.'.$file_ext_second;//rendom unique name define for same file name
            $main_rent_first_image ="upload/". $unique_rent_first_image;
            $main_rent_second_img="upload/". $unique_rent_second_img;

            if(!empty($rent_first_image) || !empty($rent_second_img)){
                
            if($rent_first_image_size>104856700 || $rent_second_img_size>104856700){
                echo "banner Size should be less then 1MB!";

            }elseif(in_array($file_ext and $file_ext_second, $permited) === false){
                echo "You can upload only:"
						           .implode(',', $permited)."";

            }
            
            else{
                move_uploaded_file($temp_rent_first_image,$main_rent_first_image);
                move_uploaded_file($temp_rent_second_img,$main_rent_second_img);

                $update_querry="update rent
                set rent_headline='$rent_headline',
                    rent_msg='$rent_msg',
                    rent_contact='$rent_contact',
                    rent_first_image='$main_rent_first_image',
                    rent_second_img='$main_rent_second_img'

                    where id='$editrentdtls_id'";

                    $read=$db->update($update_querry);
                        if($read){
                            echo" 2 update successful";
                        }
                        else{
                            echo"something went worng";
                        }
                    

            }
        }
        else{
            $update_querry="update rent
            set rent_headline='$rent_headline',
                rent_msg='$rent_msg',
                rent_contact='$rent_contact'
                where id='$editrentdtls_id'";

                $read=$db->update($update_querry);
                    if($read){
                        echo"1 update successful";
                    }
                    else{
                        echo"something went worng";
                    }

        }

                
        }
       
       
       
       ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">

                    <?php
                        $select_querry="select * from  rent where id='$editrentdtls_id'";

                        $read=$db->select($select_querry);
                        if($read){
                            $serial=0;
                            while($result=$read->fetch_assoc()){
                                $serial++; 

                    ?>

                        <tr>
                            <td>
                               Car image: <input type="text" name="rent_headline" value="<?php echo $result['rent_headline']?>"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Car image: <input type="text" name="rent_msg" value="<?php echo $result['rent_msg']?>"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Car image: <input type="text" name="rent_contact" value="<?php echo $result['rent_contact']?>"  class="medium" />
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img width="100" height="70" src="<?php echo $result['rent_first_image']?>" alt="">
                               Car image: <input type="file" name="rent_first_image"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img width="100" height="70" src="<?php echo $result['rent_second_img']?>" alt="">
                               Car image: <input type="file" name="rent_second_img"  class="medium" />
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