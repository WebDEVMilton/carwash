<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">    
				
				<?php 
				 $db=new Database();
				 if(isset($_POST['submit'])){
				 $title  = mysqli_real_escape_string($db->link, $_POST['title']);
				 $cat = mysqli_real_escape_string($db->link, $_POST['cat']);
				 $body = mysqli_real_escape_string($db->link, $_POST['body']);
				 $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
				
				$permited  = array('jpg', 'jpeg', 'png', 'gif');
				$file_name = $_FILES['image']['name'];
				$file_size = $_FILES['image']['size'];
				$file_temp = $_FILES['image']['tmp_name'];

				$div = explode('.', $file_name);
				$file_ext = strtolower(end($div));
				$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
				$uploaded_image = "upload/".$unique_image;
				
				if (empty($file_name) || empty($title) || empty($cat) || empty($body) || empty($tags)) {
				 echo "<span class='error'>Field Must Not be Empty ! </span>";
				}elseif ($file_size >1048567) {
				 echo "<span class='error'>Image Size should be less then 1MB!
				 </span>";
				} elseif (in_array($file_ext, $permited) === false) {
				 echo "<span class='error'>You can upload only:-"
				 .implode(', ', $permited)."</span>";
				} else{
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_post(title,cat,image,body,tags) 
				VALUES('$title','$cat','$uploaded_image','$body','$tags')";
				$inserted_rows = $db->sinsert($query);
				if ($inserted_rows) {
				 echo "<span class='success'>Data Inserted Successfully.
				 </span>";
				}else {
				 echo "<span class='error'>Data Not Inserted !</span>";
				}
				}
				
		}
?>
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..." name="title" class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
									<option>Select Catagory</option>
								<?php
	
										$db = new Database();
										 $catquery = "SELECT * FROM tbl_catagory";
										$catagory = $db->select($catquery);
										if($catagory){
											while($result=$catagory->fetch_assoc()){
								 ?>
                                    <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
								<?php } } ?>  
                                </select> 
                            </td>
                        </tr>
                   
                   
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter tags name" name="tags" class="medium" />
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