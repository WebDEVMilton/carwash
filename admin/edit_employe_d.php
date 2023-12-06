<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add car For Sell</h2>
               <div class="block copyblock"> 



            <?php
            $db=new database();
            if(isset($_GET['editemploye_id'])){
                $editemploye_id=$_GET['editemploye_id'];
            }
            
            ?>



               <!-- php code start-->
       
       <?php
         if(isset($_POST['submit'])){
            $fb_link=$_POST['fb_link'];
            $twitter_link=$_POST['twitter_link'];
            $whtsapp_link=$_POST['whtsapp_link'];
            $employe_name=$_POST['employe_name'];
            $phone_number=$_POST['phone_number'];

            $permited = array('png','webp','jpeg','pdf','jpg');//permission file
            $employe_img=$_FILES['employe_img']['name'];
            $employe_img_size = $_FILES['employe_img']['size'];
            $temp_employe_img=$_FILES['employe_img']['tmp_name'];
            $div=explode('.',$employe_img);
            $file_ext=strtolower(end($div));
            $unique_employe_img  =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $main_employe_img ="upload/". $unique_employe_img ;
            
            if(!empty($employe_img)){
                if($employe_img_size>10485670){
                    echo "Image Size should be less then 1MB!";

                }elseif(in_array($file_ext, $permited) === false){
                    echo "You can upload only:"
                                    .implode(',', $permited)."";

                }  else{
                    move_uploaded_file($temp_employe_img ,$main_employe_img );

                    $update_querry="update employe 
                    set  employe_img ='$main_employe_img',
                        fb_link ='$fb_link',
                        twitter_link ='$twitter_link',
                        whtsapp_link ='$whtsapp_link',
                        employe_name ='$employe_name',
                        phone_number='$phone_number' 
                        where id='$editemploye_id'";

                    $read=$db->update($update_querry);
                    if($read){
                        echo "update success";
                    }else{
                        echo "Something went wrong!";
                    }

            }
        }
        else{

            $updateproduct_brand="update employe 
            set fb_link ='$fb_link',
                twitter_link ='$twitter_link',
                whtsapp_link ='$whtsapp_link',
                employe_name ='$employe_name',
                phone_number='$phone_number' 
                where id='$editemploye_id'";

            $read=$db->update($updateproduct_brand);
            if($read){
                echo "update success";
            }else{
                echo "Something went wrong!";
            }

        }
           
        }
       
       
       
       ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">

                    <?php
                        $select_querry="select * from  employe where id='$editemploye_id'";

                        $read=$db->select($select_querry);
                        if($read){
                            $serial=0;
                            while($result=$read->fetch_assoc()){
                                $serial++; 

                    ?>

                        <tr>
                            <td>
                               Employe Name: <input type="text" name="employe_name" value="<?php echo $result['employe_name']?>"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Phone Number: <input type="number" name="phone_number" value="<?php echo $result['phone_number']?>"  class="medium" />
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img width="100" height="70" src="<?php echo $result['employe_img']?>" alt="">
                               Employe Image: <input type="file" name="employe_img"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Facebook account: <input type="url" name="fb_link" value="<?php echo $result['fb_link']?>"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Twitter account: <input type="url" name="twitter_link" value="<?php echo $result['twitter_link']?>"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Whatsapp account: <input type="url" name="whtsapp_link" value="<?php echo $result['whtsapp_link']?>"  class="medium" />
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