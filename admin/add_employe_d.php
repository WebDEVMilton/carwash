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
                        $fb_link =$_POST['fb_link'];
                        $twitter_link=$_POST['twitter_link'];
                        $whtsapp_link=$_POST['whtsapp_link'];
                        $employe_name=$_POST['employe_name'];
                        $phone_number=$_POST['phone_number'];

                        $permited = array('png','webp','jpeg','pdf','jpg');//permission file
                        $employe_img=$_FILES['employe_img']['name'];
                        $employe_img_size = $_FILES['employe_img']['size'];
                        $temp_employe_img =$_FILES['employe_img']['tmp_name'];
                        $div=explode('.',$employe_img);
                        $file_ext=strtolower(end($div));
                        $unique_employe_img=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                        $main_employe_img ="upload/". $unique_employe_img;
                        
                        
                        if( empty($whtsapp_link)|| empty($fb_link)|| empty($twitter_link)){
                            echo "field must not be empty";

                        }elseif(!preg_match ("/^[a-zA-z]*$/",$employe_name)){
                            echo "Only alphabets and whitespace are allowed.";
                        }

                        elseif(empty($employe_img)){
                            echo "field must not be empty";

                        }else if($employe_img_size>10485670){
                            echo "banner Size should be less then 1MB!";
            
                        }elseif(in_array($file_ext, $permited) === false){
                            echo "You can upload only:"
                                               .implode(',', $permited)."";
            
                        }  else{
                            move_uploaded_file($temp_employe_img,$main_employe_img);
            
                            $insert="insert into  employe(employe_img,fb_link,twitter_link,whtsapp_link,employe_name,phone_number) 
                            values('$main_employe_img','$fb_link','$twitter_link','$whtsapp_link','$employe_name','$phone_number')";
                            $insert_product_brand=$db->insert($insert);
                            if($insert_product_brand){
                                echo "insert success";
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
                               Enter employee Name: <input type="text" name="employe_name"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                               Enter Phone number:<input type="number" name="phone_number"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                        					
                        <tr>
                            <td>
                               Add employe image<input type="file" name="employe_img"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Add Facebook account <input type="url" name="fb_link"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Add Twitter account: <input type="url" name="twitter_link"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Add Whatsapp account: <input type="url" name="whtsapp_link"  class="medium" />
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