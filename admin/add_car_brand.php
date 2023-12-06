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

            $brand=$_POST['brand'];
            if(empty($brand)){
                echo "field must not be empty";
            }else{
                $insert="insert into carbrand(brand) values('$brand')";
                $instert_row=$db->insert($insert);
                if($instert_row){
                    echo "car brand insert success";

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
                               add car brand: <input type="text" name="brand" value="" placeholder="Enter title." class="medium" />
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