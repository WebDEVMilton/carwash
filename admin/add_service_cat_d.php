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

            $service_name=$_POST['service_name'];
            if(empty($service_name)){
                echo "field must not be empty";
            }else{
                $insert="insert into servicecat(service_name) values('$service_name')";
                $instert_row=$db->insert($insert);
                if($instert_row){
                    echo "Single service insert successfull";

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
                               add Services: <input type="text" name="service_name" value="" placeholder="Enter service name" class="medium" />
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