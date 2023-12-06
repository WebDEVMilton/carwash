<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/session.php';?>
<?php Session::checkSession();?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
				<?php
				$db = new Database();
				 if(isset($_POST['submit'])){
				 $copyright  = mysqli_real_escape_string($db->link, $_POST['copyright']);
				 
				 if($copyright == ''){
					 echo "<span class='error'>Field Must Not be Empty ! </span>";
				   
				 } else {
				  $query = "update tbl_copyright
				  set
				  
				  copyright  = '$copyright'
				
				  WHERE id = 1";

				  $update = $db->supdate($query);
				  if ($update) {
				 echo "<span class='success'>Data Updated Successfully.
				 </span>";
				}
				 }
				}
				?>
				
                <div class="block copyblock"> 
				
				<?php
	
					$db = new Database();
					 $rightquery = "SELECT * FROM tbl_copyright";
					 $rightread = $db->select($rightquery);
					 if($rightread){
						while($rightresult = $rightread->fetch_assoc()){
				 ?>

				
				
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $rightresult['copyright'] ;?>" name="copyright" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
					 <?php } } ?>
                </div>
            </div>
        </div>
  
<?php include 'inc/footer.php' ;?>