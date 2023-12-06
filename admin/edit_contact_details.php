<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Edit Contact Details</h2>
               <div class="block copyblock"> 



            <?php
            $db=new database();
            if(isset($_GET['editcontctdetls_id'])){
                $editcontctdetls_id=$_GET['editcontctdetls_id'];
            }
            
            ?>



               <!-- php code start-->
       
       <?php
            $error=$errname=$errormsg=$emailErr=$numbererror="";
            
            if(isset($_POST['submit'])){
                $street_location=$_POST['street_location'];
                $city=$_POST['city'];
                $division=$_POST['division'];
                $helpline_num=$_POST['helpline_num'];
                $phone_num=$_POST['phone_num'];
                $email=$_POST['email'];

                if( empty($street_location)|| empty($email)|| empty($city)|| empty($division)|| empty($helpline_num)|| empty($phone_num)|| empty($email)){
                    echo "field must not be empty";
                }
                elseif(strlen($street_location) <5){
                    $errormsg="must be 5 word";
                    echo $errormsg;

                }
                elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr= "Invalid email format";
                }
                elseif(strlen($phone_num) < 11) {
                    $numbererror="please enter the write number";
                    echo $numbererror;

                }
                elseif(strlen($helpline_num) < 11) {
                    $numbereror="please enter the write number";
                    echo $numbereror;

                }
                else{
                    $update_querry="update  contact 
                    set street_location='$street_location'
                        city='$city'
                        division='$division' 
                        helpline_num='$helpline_num',
                        phone_num='$phone_num',
                        email='$email'
                        where id='$editcontctdetls_id'";

                    $read=$db->update($update_querry);
                    if($read){
                        echo "update success";
                    }else{
                        echo "something went wrong";
                    }

                }


            }
       
       
       
       ?>
            
			 
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">

                    <?php
                        $select_querry="select * from contact where id='$editbrand_id'";

                        $read=$db->select($select_querry);
                        if($read){
                            $serial=0;
                            while($result=$read->fetch_assoc()){
                                $serial++; 

                    ?>

                        <tr>
                            <td>
                               Street Location: <input type="text" name="street_location" value="<?php echo $result['street_location']?>"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               City: <input type="text" name="city" value="<?php echo $result['city']?>"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Division: <input type="text" name="division" value="<?php echo $result['division']?>"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Helpline Number: <input type="number" name="helpline_num" value="<?php echo $result['helpline_num']?>"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Phone Number: <input type="number" name="phone_num" value="<?php echo $result['helpline_num']?>"  class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Email: <input type="email" name="email" value="<?php echo $result['email']?>"  class="medium" />
                            </td>
                        </tr>

                                              
						<tr> 
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