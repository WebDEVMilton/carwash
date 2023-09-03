<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>service pakages</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
       <?php
         $db=new database();
         if(isset($_GET['editpkgid'])){
            $editpkgid=$_GET['editpkgid'];
         }      
       ?>

    <?php
         if(isset($_POST['submit'])){
            $servicecat_id=$_POST['servicecat_id'];
            $servicesub_id=$_POST['servicesub_id'];
            $pakageName=$_POST['pakageName'];
            $pakageref=$_POST['pakageref'];
            $price=$_POST['price'];

            $permited = array('png','webp','jpeg','jpg');//permission file
            $pakageImage=$_FILES['pakageImage']['name'];
            $pakageImage_size = $_FILES['pakageImage']['size'];
            $temp_pakageImage=$_FILES['pakageImage']['tmp_name'];
            $div=explode('.',$pakageImage);
            $file_ext=strtolower(end($div));
            $pakageImage_image =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $main_pakageImage="upload/".$pakageImage_image ;


            if(empty($servicecat_id) ||empty($servicesub_id)||empty($pakageName)||empty($pakageref)||empty($price)){
                echo "field must not be empty";
            }

            if(!empty($pakageImage)){
          
               if($pakageImage_size >10485670){
                echo "Size should be less then 1MB!";

            }elseif(in_array($file_ext, $permited) === false){
                echo "You can upload only:"
						           .implode(',', $permited)."";

            }  else{
                move_uploaded_file($temp_pakageImage,$main_pakageImage);

                $updateservicepkg=" update servicespakage
                 set
                 servicecat_id ='$servicecat_id',
                 servicesub_id='$servicesub_id',
                 pakageImage='$main_pakageImage',
                 pakageName='$pakageName',
                 pakageref='$pakageref',
                 price='$price'
                 where id='$editpkgid' ";               
                
              
                $updateservicepkgread=$db->update($updateservicepkg);
                if( $updateservicepkgread){
                    echo "update successfull";
                }else{
                    echo "Something went wrong!";
                }
            }
        }
        
            else{
                $updateservicepkg=" update servicespakage
                 set
                 servicecat_id ='$servicecat_id',
                 servicesub_id='$servicesub_id',
                 pakageName='$pakageName',
                 pakageref='$pakageref',
                 price='$price'
                 where id= '$editpkgid'";               
            
              
                $updateservicepkgread=$db->update($updateservicepkg);
                if( $updateservicepkgread){
                    echo "update successfull";
                }else{
                    echo "Something went wrong!";
                }
            }
        }
        
        
        

       ?>

     





            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                        
                    

                      <?php 
                      $servicepkgquery= " SELECT   servicespakage .*,servicecat.*,servicessubcat.*
                      FROM  servicespakage 
                      INNER JOIN servicecat ON 
                      servicecat.id= servicespakage.servicecat_id  
                      INNER JOIN servicessubcat ON 
                      servicessubcat.id= servicespakage.servicesub_id
                      where servicespakage.id='$editpkgid'
                      ORDER BY  servicespakage.pakageName   ";    
                                    
                        
                    $servicepkgRead=$db->select($servicepkgquery);
                     if($servicepkgRead){
                        while($result=$servicepkgRead->fetch_assoc()){

                      ?>


                        <tr>
                            <td>
                                <label>Service Category</label>
                            </td>
                            <td>
                                <select id="select" name="servicecat_id">
									<option value="<?php echo $result['servicecat_id']; ?>"><?php echo $result['servicecategory']; ?></option>
								<?php
	
										
										 $catquery = "SELECT * FROM servicecat";
										$catagory = $db->select($catquery);
										if($catagory){
											while($servicescatresult=$catagory->fetch_assoc()){
								 ?>
                                    <option value="<?php echo $servicescatresult['id']; ?>"><?php echo $servicescatresult['servicecategory']; ?></option>
                                    <?php } } ?> 
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Service sub Category</label>
                            </td>
                            <td>
                                <select id="select" name="servicesub_id">
                                <option value="<?php echo $result['servicesub_id']; ?>"><?php echo $result['subCatName']; ?></option>
								<?php
	
										$db = new Database();
										 $catquery = "SELECT * FROM  servicessubcat";
										$catagory = $db->select($catquery);
										if($catagory){
											while($servicesubresult=$catagory->fetch_assoc()){
								 ?>
                                    <option value="<?php echo $servicesubresult['id']; ?>"><?php echo $servicesubresult['subCatName']; ?></option>
								<?php } } ?>  
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            package Name: <input type="text" name="pakageName" value="<?php echo $result['pakageName'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            package reffer: <input type="text" name="pakageref" value="<?php echo $result['pakageref'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            package price: <input type="text" name="price" value="<?php echo $result['price'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                           
                            <td>
                            image: <img width="200" height="250"  src="<?php echo $result['pakageImage'];?>" placeholder="Enter title." class="medium" />
                            <input type="file" name="pakageImage"/>
                            </td>
                        </tr>

                        <?php }}?>
                       
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