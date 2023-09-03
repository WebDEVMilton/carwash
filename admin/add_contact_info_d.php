<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Company Contact Details</h2>
               <div class="block copyblock"> 

            <?php

            $db=new database();
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
                    $insert_querry="insert into  contact(street_location,city,division,helpline_num,phone_num,email)
                     values('$street_location','$city','$division','$helpline_num','$phone_num','$email')";

                    $read=$db->insert($insert_querry);
                    if($read){
                        echo "insert success";
                    }else{
                        echo "something went wrong";
                    }

                }


            }
            
            ?>



                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                Street location:<input type="text" name="street_location"  placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               City: <input type="text" name="city"  placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Division:<input type="text" name="division"  placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                            <td>
                                Helpline Number:<input type="number" name="helpline_num" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                            <td>
                                Phone Number:<input type="number" name="phone_num" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                            <td>
                                Email:<input type="email" name="email"  placeholder="Enter Category Name..." class="medium" />
                            </td>
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