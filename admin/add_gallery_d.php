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
                            $permited = array('png','webp','jpeg','pdf','jpg');//permission file
                            $image =$_FILES['image']['name'];
                            $image_size = $_FILES['image']['size'];
                            $temp_image=$_FILES['image']['tmp_name'];
                            $div=explode('.',$image);
                            $file_ext=strtolower(end($div));
                            $unique_image =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                            $main_image="upload/". $unique_image;

                            if(empty($image)){
                                echo "field must not be empty";
                            }elseif($image_size>10485670){
                                echo "banner Size should be less then 1MB!";

                            }elseif(in_array($file_ext, $permited) === false){
                                echo "You can upload only:"
                                                .implode(',', $permited)."";

                            }  else{
                                move_uploaded_file($temp_image,$main_image);

                                $insert="insert into gallery(image) values('$main_image')";
                                $insert_image=$db->insert($insert);
                                if($insert_image){
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
                               Select Gallery image: <input type="file" name="image"  class="medium" />
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