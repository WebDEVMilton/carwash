<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Show Car details</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
                <!-- get method  -->
                    <?php
                        $db=new database();
                        if(isset($_GET['edittimeid'])){
                            $edittimeid=$_GET['edittimeid'];
                        }
                        
                    
                    ?>

                    <?php
                            if(isset($_POST['submit'])){
                                $day_name=$_POST['day_name'];
                                $open_time=$_POST['open_time'];
                                $colse_time=$_POST['colse_time'];

                            if(!empty($day_name) || !empty($open_time) || !empty($colse_time)){
                                $update_querry="update schedule 
                                set day_name='$day_name',
                                    open_time  ='$open_time',
                                    colse_time ='$colse_time'
                                where id='$edittimeid'";


                                $update_product=$db->update($update_querry);
                                if($update_product){
                                    echo "product insert success";
                                }else{
                                    echo "Something went wrong!";
                                }
                            }


                                    
                        }
                
                ?>

                <!-- php code end  -->
            
            
			 
                 <form action="" method="post"  enctype="multipart/form-data">
                    <table class="form">
                        
                    
                    <?php 
                          $select="SELECT * from schedule where id='$edittimeid'";

                          $read=$db->select($select);
                          if($read){

                              $serial = 0;
                              while($result=$read->fetch_assoc()){
                              $serial++;
                  
                    ?>


                        <tr>
                            <td>
                            Edit day: <input type="text" name="day_name" value="<?php echo $result['day_name'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                            Edit opening Time: <input type="time" name="open_time" value="<?php echo $result['open_time'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            Edit closing Time: <input type="time" name="colse_time" value="<?php echo $result['colse_time'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                        
                        <?php }}?>
                  
                      
					
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php' ;?>