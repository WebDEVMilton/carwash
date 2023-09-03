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
                            $permitedgifs= array('gif');//permission file
                            $full_img=$_FILES['full_img']['name'];
                            $gifs=$_FILES['gifs']['name'];
                            $full_img_size = $_FILES['full_img']['size'];
                            $gifs_size = $_FILES['gifs']['size'];
                            $temp_full_img=$_FILES['full_img']['tmp_name'];
                            $temp_gifs=$_FILES['gifs']['tmp_name'];
                            $div=explode('.',$full_img);
                            $divgifs=explode('.',$gifs);
                            $file_ext=strtolower(end($div));
                            $file_ext_gifs=strtolower(end($divgifs));
                            $unique_full_img=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                            $unique_gifs=substr(md5(time()), 0, 10).'.'.$file_ext_gifs;//rendom unique name define for same file name
                            $main_full_img="upload/". $unique_full_img;
                            $main_gifs="upload/". $unique_gifs;

                            if(!empty($full_img)){
                            if($full_img_size>10485670){
                                echo "banner Size should be less then 1MB!";

                            }elseif(in_array($file_ext, $permited) === false){
                                echo "You can upload only:"
                                                .implode(',', $permited)."";

                            }  else{
                                move_uploaded_file($temp_full_img,$main_full_img);

                                $insert="insert into ads(full_img) values('$main_full_img')";
                                $insert_image=$db->insert($insert);
                                if($insert_image){
                                    echo "insert success";
                                }else{
                                    echo "Something went wrong!";
                                }

                            }
                        }
                        if(!empty($gifs)){
                        if($gifs_size>10485670){
                            echo "banner Size should be less then 1MB!";

                        }elseif(in_array($file_ext_gifs, $permitedgifs) === false){
                            echo "You can upload only:"
                                            .implode(',', $permitedgifs)."";

                        }  else{
                            move_uploaded_file($temp_gifs,$main_gifs);

                            $insert="insert into ads(gifs) values('$main_gifs')";
                            $insert_image=$db->insert($insert);
                            if($insert_image){
                                echo "insert success";
                            }else{
                                echo "Something went wrong!";
                            }

                        }
                    }


                                
                }
                    
                    
                    ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
                            <td>
                               Select Gifs image: <input type="file" name="gifs"  class="medium" />
                            </td>
                        </tr> 					
                        <tr>
                            <td>
                               Select adds image: <input type="file" name="full_img"  class="medium" />
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