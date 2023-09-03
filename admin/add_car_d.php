<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add car For Sell</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
       <?php
         $db=new database();
         if(isset($_POST['submit'])){
            $carbrand_id=$_POST['carbrand_id'];
            $carmodel=$_POST['carmodel'];
            $car_type=$_POST['car_type'];
            $location=$_POST['location'];
            $phonenum=$_POST['phonenum'];
            $manufac_company=$_POST['manufac_company'];
            $stockserial=$_POST['stockserial'];
            $mileage=$_POST['mileage'];
            $enginename=$_POST['enginename'];
            $carprice=$_POST['carprice'];




            $permited = array('png','webp','jpeg','pdf','jpg');//permission file
            $carimage=$_FILES['carimage']['name'];
            $carimage_size = $_FILES['carimage']['size'];
            $temp_carimage=$_FILES['carimage']['tmp_name'];
            $div=explode('.',$carimage);
            $file_ext=strtolower(end($div));
            $unique_carimage =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $main_carimage="upload/". $unique_carimage;

            if(empty($carbrand_id)|| empty($carmodel)|| empty($car_type)
            || empty($location)|| empty( $phonenum)|| empty($manufac_company)|| empty( $stockserial)|| empty($mileage)
            || empty($enginename)|| empty($carprice)){
                echo "field must not be empty";
            }

            if(empty($carimage)){
                echo "field must not be empty";
            }elseif($carimage_size>10485670){
                echo "Image Size should be less then 1MB!";

            }elseif(in_array($file_ext, $permited) === false){
                echo "You can upload only:"
						           .implode(',', $permited)."";

            }  else{
                move_uploaded_file($temp_carimage,$main_carimage);

                $insert="insert into sellcar(carbrand_id,carmodel,carimage,car_type,location,phonenum,manufac_company,stockserial,mileage,enginename,carprice) 
                values('$carbrand_id','$carmodel','$main_carimage','$car_type','$location','$phonenum','$manufac_company','$stockserial','$mileage','$enginename','$carprice')";


                $insert_sellcar=$db->insert($insert);
                if($insert_sellcar){
                    echo "car details insert success";
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
                                    <label >Select brand</label>
                                </td>

                            <td>                   
                                <select name="carbrand_id">
                                    <option>select brand</option>
                                    
                    <!-- php code start  --> 
                                    <?php 
                                        $select_carbrand="select * from carbrand";
                                        $read=$db->select($select_carbrand);

                                        if($read){
                                            $serial=0;
                                            while($result=$read->fetch_assoc()){
                                                $serial++;
                                        
                                    ?>

                                    <option value="<?php echo $result['id'] ?>"><?php echo $result['brandname'] ?></option>

                                    <?php }}?>
                    <!-- php code end  -->
                                </select>  
                            </td>

                        </tr>



                        <tr>
                            <td>
                               Car Model: <input type="text" name="carmodel"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Car image: <input type="file" name="carimage"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Car Type: <input type="text" name="car_type"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Location: <input type="text" name="location"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Phone Number: <input type="text" name="phonenum"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Manufacture Company: <input type="text" name="manufac_company"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Stock Serial: <input type="text" name="stockserial"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Mileage: <input type="text" name="mileage"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Engine: <input type="text" name="enginename"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Price: <input type="text" name="carprice"  class="medium" />
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