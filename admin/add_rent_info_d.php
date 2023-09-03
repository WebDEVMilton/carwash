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
            $rent_headline =$_POST['rent_headline'];
            $rent_msg=$_POST['rent_msg'];
            $rent_contact=$_POST['rent_contact'];




            $permited_one = array('png','webp','jpeg','pdf','jpg');//permission file
            $permited_two = array('png','webp','jpeg','pdf','jpg');//permission file
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

            if(empty($rent_first_image)|| empty($rent_second_img)){
                echo "field must not be empty";
            }elseif($rent_first_image_size>104856700 || $rent_second_img_size>104856700){
                echo "banner Size should be less then 1MB!";

            }elseif(in_array($file_ext, $permited_one) === false){
                echo "You can upload only:"
						           .implode(',', $permited_one)."";

            }
            elseif(in_array($file_ext_second, $permited_two) === false){
                echo "You can upload only:"
						           .implode(',', $permited_two)."";

            }
            
            else{
                move_uploaded_file($temp_rent_first_image,$main_rent_first_image);
                move_uploaded_file($temp_rent_second_img,$main_rent_second_img);

                $insert="insert into rent(rent_headline,rent_msg,rent_contact,rent_first_image,rent_second_img) 
                values('$rent_headline','$rent_msg','$rent_contact','$main_rent_first_image','$main_rent_second_img')";
                $read=$db->insert($insert);
                if($read){
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
                               Title: <input type="text" name="rent_headline"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Title: <input type="text" name="rent_msg"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Title: <input type="number" name="rent_contact"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Title: <input type="file" name="rent_first_image"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Title: <input type="file" name="rent_second_img"  class="medium" />
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