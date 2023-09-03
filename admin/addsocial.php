<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Social</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
       <?php
         $db=new database();
         $fberror= $inserror=$linkerror= $twerror= "";
         if(isset($_POST['submit'])){
            
            $fb=$_POST['fb'];
            $inst= $_POST['inst'];
            $linkd=$_POST['linkd'];
            $tw=$_POST['tw'];

            if(empty($fb)|| empty($inst)|| empty($linkd)|| empty( $tw)){
                echo "field must not be empty";
            }elseif(!filter_var($fb, FILTER_VALIDATE_URL)){
                $fberror="not a valid url";
            }elseif(!filter_var($inst, FILTER_VALIDATE_URL)){
                $inserror= "not a valid url";
            }elseif(!filter_var($linkd, FILTER_VALIDATE_URL)){
                $linkerror= "not a valid url";
            }elseif(!filter_var($tw, FILTER_VALIDATE_URL)){
                $twerror="not a valid url";
            }else{
                $insertsocial="insert into social(fb,inst,linkd,tw)
                  values('$fb','$inst','$linkd','$tw')";
                 $insert_row= $db->insert($insertsocial);
                 if($insert_row){
                    echo "social insert success";
                 }else{
                   echo "data not insert";
                 }
                
            }
         }
       
       
       
       ?>
            
			 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                               Facebook: <input type="text" name="fb" value="<?php echo  $fberror; ?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Instragram: <input type="text" name="inst" value="<?php echo $inserror; ?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               linkdin: <input type="text" name="linkd" value="<?php echo $linkerror; ?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Twitter: <input type="text" name="tw" value="<?php echo $twerror;?>" placeholder="Enter title." class="medium" />
                              
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