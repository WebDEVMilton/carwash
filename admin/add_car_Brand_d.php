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
                        $brandname=$_POST['brandname'];

                        $permited = array('png','webp','jpeg','pdf','jpg');//permission file
                        $brandimage=$_FILES['brandimage']['name'];
                        $brandimage_size = $_FILES['brandimage']['size'];
                        $temp_brandimage=$_FILES['brandimage']['tmp_name'];
                        $div=explode('.',$brandimage);
                        $file_ext=strtolower(end($div));
                        $unique_brandimage =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                        $main_brandimage="upload/". $unique_brandimage;
                        
                        
                        if(empty($brandname)){
                            echo "field must not be empty";

                        }
                        elseif(empty($brandimage)){
                            echo "field must not be empty";
                        }elseif($brandimage_size>10485670){
                            echo "banner Size should be less then 1MB!";
            
                        }elseif(in_array($file_ext, $permited) === false){
                            echo "You can upload only:"
                                               .implode(',', $permited)."";
            
                        }  else{
                            move_uploaded_file($temp_brandimage,$main_brandimage);
            
                            $insert="insert into carbrand(brandname,brandimage) values('$brandname','$main_brandimage')";
                            $insert_brand=$db->insert($insert);
                            if($insert_brand){
                                echo "brand & img insert success";
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
                               Add car Brand: <input type="text" name="brandname"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Add car Brand: <input type="file" name="brandimage"  class="medium" />
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