<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Title</h2>
               <div class="block copyblock"> 

               <!-- php code start-->
       
       <?php
         $db=new database();
         if(isset($_POST['submit'])){
            $title=$_POST['title'];
            if(empty($title)){
                echo "field must not be empty";
            }else{
                $insert="insert into title(title) values('$title')";
                $instert_row=$db->insert($insert);
                if($instert_row){
                    echo "title insert success";

                }else{
                    echo "something ";
                }
            }
         }
       
       
       
       ?>
            
			 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                               Title: <input type="text" name="title" placeholder="Enter title." class="medium" />
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