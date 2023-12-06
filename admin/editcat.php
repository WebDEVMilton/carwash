<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>

        <div class="grid_10">
			<?php 
				if(!isset($_GET['catid']) || $_GET['catid'] == NULL){
					header("Location:catlist.php");
				}else{
					$id = $_GET['catid'];
				}
			?>
            <div class="box round first grid">
                <h2>Update Category</h2>
               <div class="block copyblock"> 
			   <?php 
							$db=new Database();
							if(isset($_POST['submit'])){
							
							 $name  = mysqli_real_escape_string($db->link, $_POST['name']);
							 if(empty($name)){
								 echo "<span class='error'>Field Must Not Be Empty</span>";
							 }
							 else{
								 $query = "update tbl_catagory
								  set 
								  name  = '$name'
								  WHERE id = $id";

								  $updatecat = $db->supdate($query);
								  if($updatecat){
									  echo "<span class='success'>Successfully added</span>";
								  }
							 }
							}
							
					?>
				
                 <form action="" method="post">
                    <table class="form">
					<?php
					$editquery = "select * from tbl_catagory where id = $id order by id desc";
					$catagory = $db->select($editquery);
					if($catagory){
						while($result = $catagory->fetch_assoc()){
					?>
                        <tr>
                            <td>
                                <input type="text" name="name" value="<?php echo $result['name'] ;?>" class="medium" />
                            </td>
                        </tr>
					<?php } } ?>
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