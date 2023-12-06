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
                            $permited = array('png','webp','jpeg','pdf');//permission file
                            $bannar_image=$_FILES['bannar_image']['name'];
                            $bannar_image_size = $_FILES['bannar_image']['size'];
                            $temp_bannar_image=$_FILES['bannar_image']['tmp_name'];
                            $div=explode('.',$bannar_image);
                            $file_ext=strtolower(end($div));
                            $unique_bannar_image=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                            $main_bannar_image="upload/". $unique_bannar_image;

                            if(empty($bannar_image)){
                                echo "field must not be empty";
                            }elseif($bannar_image_size>1048567){
                                echo "banner Size should be less then 1MB!";

                            }elseif(in_array($file_ext, $permited) === false){
                                echo "You can upload only:"
                                                .implode(',', $permited)."";

                            }  else{
                                move_uploaded_file($temp_bannar_image,$main_bannar_image);

                                $insert="insert into bannar(bannar_image) values('$main_bannar_image')";
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
                               Select bannar image: <input type="file" name="bannar_image"  class="medium" />
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