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
                            $first_name=$_POST['first_name'];
                            $last_name=$_POST['last_name'];
                            $owner_position=$_POST['owner_position'];
                            $owner_about=$_POST['owner_about'];

                            $permited = array('png','webp','jpeg','pdf','jpg');//permission file
                            $owner_photo=$_FILES['owner_photo']['name'];
                            $owner_photo_size = $_FILES['owner_photo']['size'];
                            $temp_owner_photo=$_FILES['owner_photo']['tmp_name'];
                            $div=explode('.',$owner_photo);
                            $file_ext=strtolower(end($div));
                            $unique_owner_photo=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                            $main_owner_photo="upload/". $unique_owner_photo;

                            if(empty($owner_photo)){
                                echo "field must not be empty";
                            }elseif($owner_photo_size>10485670){
                                echo "banner Size should be less then 1MB!";

                            }elseif(in_array($file_ext, $permited) === false){
                                echo "You can upload only:"
                                                .implode(',', $permited)."";

                            }  else{
                                move_uploaded_file($temp_owner_photo,$main_owner_photo);

                                $insert="insert into owner(first_name,last_name,owner_position,owner_about,owner_photo) 
                                values('$first_name','$last_name','$owner_position','$owner_about','$main_owner_photo')";
                                $insert_row=$db->insert($insert);
                                if($insert_row){
                                    echo "insert success";
                                }else{
                                    echo "Something went wrong!";
                                }

                            }

                                
                        }
                    
                    
                    ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td>
                               First Name: <input type="text" name="first_name"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Last Name: <input type="text" name="last_name"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Enter Owner Position: <input type="text" name="owner_position"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Select About: <input type="text" name="owner_about"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               Select Owner Image: <input type="file" name="owner_photo"  class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                               <!-- Select Signature Image: <input type="file" name="owner_signs"  class="medium" /> -->
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