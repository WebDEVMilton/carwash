<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Show Car details</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
                    <?php
                        $db=new database();
                        if(isset($_GET['editsellcarid'])){
                            $editsellcarid=$_GET['editsellcarid'];
                        }
                        
                    
                    ?>

                    <?php
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
                        $temp_carimage =$_FILES['carimage']['tmp_name'];
                        $div=explode('.',$carimage);
                        $file_ext=strtolower(end($div));
                        $unique_carimage=substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
                        $main_carimage="upload/". $unique_carimage;

                        if(!empty($carimage)){
                            
                        if($carimage_size>10485670){
                            echo "banner Size should be less then 1MB!";

                        }elseif(in_array($file_ext, $permited) === false){
                            echo "You can upload only:"
                                            .implode(',', $permited)."";

                        }  else{
                            move_uploaded_file($temp_carimage,$main_carimage);

                            $update_querry="update sellcar
                            set  carbrand_id='$carbrand_id',
                                 carmodel='$carmodel',
                                 carimage='$main_carimage',
                                 car_type='$car_type',
                                 location='$location',
                                 phonenum='$phonenum',
                                 manufac_company='$manufac_company',
                                 stockserial='$stockserial',
                                 mileage='$mileage',
                                 enginename='$enginename',
                                 carprice='$carprice'
                             where id='$editsellcarid'";


                            $update_car=$db->update($update_querry);
                            if($update_car){
                                echo "banner insert success";
                            }else{
                                echo "Something went wrong!";
                            }

                        }
                    }else{
                        $update_querry="update sellcar
                        set  carbrand_id='$carbrand_id',
                             carmodel='$carmodel',
                             car_type='$car_type',
                             location='$location',
                             phonenum='$phonenum',
                             manufac_company='$manufac_company',
                             stockserial='$stockserial',
                             mileage='$mileage',
                             enginename='$enginename',
                             carprice='$carprice'
                         where id='$editsellcarid'";


                        $update_sell_car=$db->update($update_querry);
                        if($update_sell_car){
                            echo "Update success";
                        }else{
                            echo "Something went wrong!";
                        }
                    }


                            
                }
                
                    ?>
            














            
			 
                 <form action="" method="post"  enctype="multipart/form-data">
                    <table class="form">
                        
                    
                    <?php 

                          $select="SELECT sellcar.*,carbrand.*
                          FROM  sellcar 
                          INNER JOIN carbrand ON 
                          carbrand.id= sellcar.carbrand_id
                          where sellcar.id='$editsellcarid'
                          ORDER BY  sellcar.location";


                          $read=$db->select($select);
                          if($read){

                              $serial = 0;
                              while($result=$read->fetch_assoc()){
                              $serial++;
                  
                    ?>

                        <select name="carbrand_id" id="select">
                        <option value="<?php echo $result['carbrand_id'];?>"><?php  echo $result['brandname'];?></option>

                                <?php
                                $carbrand_select="select * from carbrand";
                                $read=$db->select($carbrand_select);
                                if($read){
      
                                    $serial = 0;
                                    while($carbrand_result=$read->fetch_assoc()){
                                    $serial++;     
                                
                                ?>

                                <option value="<?php echo $carbrand_result['id'];?>"><?php  echo $carbrand_result['brandname'];?></option>

                            <?php }}?>
                        </select>
                        





                        <tr>
                            <td>
                            Brand category: <input type="text" name="carmodel" value="<?php echo $result['carmodel'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Car image:<img width="100" height="50"  src="<?php echo $result['carimage'] ?>" alt="">

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="file" name="carimage">
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Company Name: <input type="text" name="car_type" value="<?php echo $result['car_type'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Location: <input type="text" name="location" value="<?php echo $result['location'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Phone Number: <input type="text" name="phonenum" value="<?php echo $result['phonenum'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Manufacture Company: <input type="text" name="manufac_company" value="<?php echo $result['manufac_company'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Stock Serial: <input type="text" name="stockserial" value="<?php echo $result['stockserial'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Mileage: <input type="text" name="mileage" value="<?php echo $result['mileage'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Engine Name: <input type="text" name="enginename" value="<?php echo $result['enginename'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Total price: <input type="text" name="carprice" value="<?php echo $result['carprice'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="submit">
                            </td>
                        </tr>
                        



                        <?php }}?>
                  
                      
					
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php' ;?>