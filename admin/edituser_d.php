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
                        if(isset($_GET['editid'])){
                            $editid=$_GET['editid'];
                        }
                        
                    
                    ?>


                <!-- php code end  -->

                <?php
                
                
                if(isset($_POST['submit'])){

                    $status=$_POST['status'];

                    if($status){
                        $update_querry="UPDATE user 
                        SET status='$status'
                        WHERE id='$editid'";
                        $read=$db->update($update_querry);

                    }

                }
                
                
                ?>

















            
            
			 
                 <form action="" method="post"  enctype="multipart/form-data">
                    <table class="form">
                                <?php 
                                $select_user="select * from user where id='$editid'";
                                $read=$db->select($select_user);                                
                                if($read){
                                    while($result_user=$read->fetch_assoc()){

                                 ?>

                        <tr>
                            <td>
                            Name: <input type="text" name="fname" value="<?php echo $result_user['fname'] ?>" placeholder="Enter title." class="medium" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                
                                <select name="status" id="">
                            
                        
                                <option value="<?php $result_user['id']?>"><?php echo $result_user['status'];?></option>

                                <option value="admin">Admin</option>
                                <option value="user">user</option>
                               

                                </select>
                            
                            </td>


                            <?php }}?>

                        </tr>
 
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