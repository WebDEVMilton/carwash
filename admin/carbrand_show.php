<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Car brand</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
       <?php
         $db=new database();
         if(isset($_GET['showbrid'])){
            $showbrandid=$_GET['showbrid'];
         }
         
       
       
       ?>
            
			 
                 <form action="" method="post">
                    <table class="form">
                        
                    

                      <?php 
                      $singlecarquery= "select * from carbrand    
                                       where id='$showbrandid' ";
                        
                    $singleCarBrandRead=$db->select($singlecarquery);
                     if( $singleCarBrandRead){
                        while($result=$singleCarBrandRead->fetch_assoc()){

                      ?>


                        <tr>
                            <td>
                               add car brand: <input type="text" name="brand" value="<?php echo $result['brand'];?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <?php }}?>
                  
                      
					
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php' ;?>