<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Car brand</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
       <?php
         $db=new database();
         $error= "";
         if(isset($_POST['submit'])){

            $service_id =$_POST['service_id'];
            $pakage_name=$_POST['pakage_name'];
            $price=$_POST['price'];
            $first_facilities=$_POST['first_facilities'];
            $second_facilities=$_POST['second_facilities'];
            $third_facilities=$_POST['third_facilities'];



            if(empty($pakage_name)){
                echo "please enter the pakage name";
            }
            elseif(empty($price)){
                echo "please enter the pakage price";
            }else{
                $insert="insert into  servicepackage(service_id,pakage_name,price,first_facilities,second_facilities,third_facilities) 
                values($service_id,'$pakage_name','$price','$first_facilities','$second_facilities','$third_facilities')";
                $instert_row=$db->insert($insert);
                if($instert_row){
                    echo "insert successfull";

                }else{
                    echo "something went wrong ";
                }
            }
            
         }
       
       
       ?>
            
			 
                 <form action="" method="post">
                    <table class="form">
                    <tr>
                        <td>

                            <select name="service_id" id="">
                                <option value="">Select Service</option>

                                <?php
                                    $select_querry="select * from servicecat";
                                    $read=$db->select($select_querry);

                                    if($read){
                                        while($result=$read->fetch_assoc()){
                                
                                ?>


                                <option value="<?php echo $result['id']?>"><?php echo  $result['service_name']?></option>

                            <?php }}?>
                            </select>




                        </td>


                    </tr>    
                    





                        <tr>
                            <td>
                               add Pakage Name: <input type="text" name="pakage_name" value="" placeholder="Enter service name" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               add Pakage Price: <input type="text" name="price" value="" placeholder="Enter service name" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               add First Faciliteies: <input type="text" name="first_facilities" value="" placeholder="Enter service name" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               add Second Facilities: <input type="text" name="second_facilities" value="" placeholder="Enter service name" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               add third Facilities: <input type="text" name="third_facilities" value="" placeholder="Enter service name" class="medium" />
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