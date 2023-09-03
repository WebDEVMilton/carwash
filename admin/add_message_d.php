<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 

            <?php

            $db=new database();
            $error=$errname=$errormsg=$emailErr=$numbererror="";
            
            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $messages=$_POST['messages'];

                if( empty($name)|| empty($email)|| empty($phone)|| empty($messages)){
                    echo "field must not be empty";
                }
                elseif(!preg_match ("/^[a-zA-z]*$/",$name)){
                    $errname="Only alphabets and whitespace are allowed.";
                }
                elseif(strlen($messages) <10){
                    $errormsg="must be 20 word";
                    echo $errormsg;

                }
                elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr= "Invalid email format";
                }
                elseif(strlen($phone) < 11) {
                    $numbererror="please enter the write number";

                }
                else{
                    $insert_querry="insert into  message(name,email,phone,messages) values('$name','$email','$phone','$messages')";

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
                                Name:<input type="text" name="name" value="<?php echo $errname ?>" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Eamil: <input type="text" name="email" value="<?php echo $emailErr ?>" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Phone Number:<input type="text" name="phone" value="<?php echo $numbererror ?>" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            messgae:<textarea name="messages" value="<?php echo $errormsg ?>" ></textarea>
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