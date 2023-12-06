<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">    
				
				<?php 
				 $db=new Database();
				 if(isset($_POST['submit'])){

                    $carbrand_id=$_POST['carbrand_id'];
                    $carName= $_POST['carName'];
                    $carRef= $_POST['carRef'];
                    $carMilage=$_POST['carMilage'];
                    $carEngine=$_POST['carEngine'];
                    $price=$_POST['price'];
                    $permited = array('png','webp','jpeg','pdf');//permission file
            $carImage=$_FILES['carImage']['name'];
            $carImage_size = $_FILES['carImage']['size'];
            $temp_carImage=$_FILES['carImage']['tmp_name'];
            $div=explode('.', $carImage);
            $file_ext=strtolower(end($div));
            $unique_carImage =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
            $main_carImage="upload/".  $unique_carImage;

            if(empty($carImage)){
                echo "field must not be empty";
            }elseif($carImage_size>1048567){
                echo "banner Size should be less then 1MB!";

            }elseif(in_array($file_ext, $permited) === false){
                echo "You can upload only:"
						           .implode(',', $permited)."";

            }  else{
                move_uploaded_file($temp_carImage,$main_carImage);
                $carinsert="insert into car(carbrand_id,carName,carRef,carImage,carMilage,carEngine,price)
                 values('$carbrand_id','$carName','$carRef','$main_carImage','$carMilage','$carEngine','$price')
                ";
                $car_insert_row=$db->insert( $carinsert);

                if($car_insert_row){
                    echo "car insert success";

                }else{
                    echo "something went wrong";
                }
				
                 }
                 }
                
				?>
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">


                    <tr>


                            <td>
                                <label>carbrand</label>
                            </td>
                            <td>
                                <select id="select" name="carbrand_id">
									<option>carbrand</option>
                                    <!-- selsec 1st car brand-->

                                    <?php
	
                                        $db = new Database();
                                        $carbrandselect = "SELECT * FROM carbrand";
                                        $carbrandread = $db->select($carbrandselect);
                                        if($carbrandread){
                                            while($car_brand_result=$carbrandread->fetch_assoc()){
                                    ?>
           


								
                                    <option value="<?php echo $car_brand_result['id'] ;?>"><?php echo $car_brand_result['brand'] ;?> </option>
								  <?php }}?>
                                </select> 
                            </td>
                    </tr>
                       
                        <tr>
                            <td>
                                <label>Car Name</label>
                            </td>
                            <td>
                                <input type="text" name="carName" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Car Refference</label>
                            </td>
                            <td>
                                <input type="text"  name="carRef" class="medium" />
                            </td>
                        </tr>
                       
                   
                   
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="carImage" />
                            </td>
                        </tr>
                       
						
						 <tr>
                            <td>
                                <label>Car Millage</label>
                            </td>
                            <td>
                                <input type="text"  name="carMilage" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Car engine</label>
                            </td>
                            <td>
                                <input type="text"  name="carEngine" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Car 	price</label>
                            </td>
                            <td>
                                <input type="text"  name="price" class="medium" />
                            </td>
                        </tr>
						
						
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
		 <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
       <?php include 'inc/footer.php' ;?>