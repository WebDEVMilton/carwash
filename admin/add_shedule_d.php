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
         if(isset($_POST['submit'])){
            $day_name=$_POST['day_name'];
            $open_time=$_POST['open_time'];
            $colse_time=$_POST['colse_time'];


            if(empty($day_name)|| empty($open_time) || empty($colse_time )){
                echo "field must not be empty";
            }else{
                $insert="insert into schedule(day_name,open_time,colse_time) values('$day_name','$open_time','$colse_time')";
                $insert_row=$db->insert($insert);
                if($insert_row){
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
                               Add day Name: <input type="text" name="day_name" value="" placeholder="Enter service name" class="medium" />
                            </td>
                        </tr>
                            <td>
                                <label>Select opening time</label>
                               <input type="time" name="open_time" value="" placeholder="Enter the time" class="medium" />
                            </td>
                        </tr>
                        </tr>
                            <td>
                                <label>Select closing time</label>
                               <input type="time" name="colse_time" value="" placeholder="Enter the time" class="medium" />
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