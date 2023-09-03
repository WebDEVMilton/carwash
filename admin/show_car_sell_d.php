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
         if(isset($_GET['showsellcarid'])){
            $showsellcarid=$_GET['showsellcarid'];
         }
         
       ?>
            
			 
                 <form action="" method="post">
                    <table class="form">
                        
                    
                    <?php 

                          $select="SELECT sellcar.*,carbrand.brandname
                          FROM  sellcar 
                          INNER JOIN carbrand ON 
                          carbrand.id= sellcar.carbrand_id
                          where sellcar.id='$showsellcarid'
                          ORDER BY  sellcar.location";


                          $read=$db->select($select);
                          if($read){

                              $serial = 0;
                              while($result=$read->fetch_assoc()){
                              $serial++;

                  
                  
                    ?>


                        <tr>
                            <td>
                            Brand category: <input type="text" name="brand" value="<?php echo $result['brandname'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Car image:<img width="100" height="50"  src="<?php echo $result['carimage'] ?>" alt="">
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Company Name: <input type="text" name="" value="<?php echo $result['car_type'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Location: <input type="text" name="" value="<?php echo $result['location'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Phone Number: <input type="text" name="" value="<?php echo $result['phonenum'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Manufacture Company: <input type="text" name="" value="<?php echo $result['manufac_company'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            Stock Serial: <input type="text" name="" value="<?php echo $result['stockserial'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Mileage: <input type="text" name="" value="<?php echo $result['mileage'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Engine Name: <input type="text" name="" value="<?php echo $result['enginename'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Total price: <input type="text" name="" value="<?php echo $result['carprice'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        



                        <?php }}?>
                  
                      
					
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php' ;?>