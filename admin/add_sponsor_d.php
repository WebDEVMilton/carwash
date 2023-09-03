<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Sponsors</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
                <?php
                    $db=new database();
                    if(isset($_POST['submit'])){
                        $sponsor_name=$_POST['sponsor_name'];

                        $permited = array('png','webp','jpeg','pdf','jpg');//permission file
                        $sponsor_image=$_FILES['sponsor_image']['name'];
                        $sponsor_image_size = $_FILES['sponsor_image']['size'];
                        $temp_sponsor_image=$_FILES['sponsor_image']['tmp_name'];
                        $div=explode('.',$sponsor_image);
                        $file_ext=strtolower(end($div));
                        $unique_sponsor_image =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                        $main_sponsor_image="upload/". $unique_sponsor_image;
                        
                        
                        if(empty($sponsor_name)){
                            echo "field must not be empty";

                        }
                        elseif(empty($sponsor_image)){
                            echo "field must not be empty";
                        }elseif($sponsor_image_size>10485670){
                            echo "image Size should be less then 1MB!";
            
                        }elseif(in_array($file_ext, $permited) === false){
                            echo "You can upload only:"
                                               .implode(',', $permited)."";
            
                        }  else{
                            move_uploaded_file($temp_sponsor_image,$main_sponsor_image);
            
                            $insert_querry ="insert into  sponsor(sponsor_name,sponsor_image) values('$sponsor_name','$main_sponsor_image')";
                            $insert_sponsor =$db->insert($insert_querry);
                            if($insert_sponsor){
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
                               Add Sponsor name: <input type="text" name="sponsor_name"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Add Sponsor Image: <input type="file" name="sponsor_image"  class="medium" />
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