<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Social List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="7%">Serial No.</th>
							<th width="12%">Employe Name</th>
							<th width="12% ">Phone Number</th>
							<th width="12%">Employe Image</th>
							<th width="12%">Facebook</th>
							<th width="16%">Twitter</th>
							<th width="16%">Whatsapp</th>
                            <th width="12%">Action</th>
                       
						</tr>
					</thead>


                    <!-- delete querry  start -->

                    <?php
                    
                    $db=new database();

                    // get method 
                    if(isset($_GET['delemploy_id'])){
                        $delemploy_id=$_GET['delemploy_id'];

                        $delte_query="delete from employe  where id='$delemploy_id'";
                        $read=$db->delete($delte_query);
                        if($read){
                            echo "delete succesfull";

                        }
                        else{
                            echo "something went wrong";
                        }
                    }
                    ?>

                    <!-- delete querry end  -->
					

					<tbody>
                    
                    <!-- select querry start  -->

                    <?php 
                          
                        $select="SELECT * from  employe";


                        $read=$db->select($select);
                        if($read){

                            $serial = 0;
                            while($result=$read->fetch_assoc()){
                            $serial++;

                    ?>
                    
                    <!-- select query end  -->

						<tr class="odd gradeX">
							<td><?php echo  $serial;?></td>
                            <td><?php echo  $result['employe_name'];?></td>
                            <td><?php echo  $result['phone_number'];?></td>
                            <td> <img width="100" height="70" src="<?php echo  $result['employe_img'];?>" alt=""> </td>
                            <td><?php echo  $result['fb_link'];?></td>
                            <td><?php echo  $result['twitter_link'];?></td>
                            <td><?php echo  $result['whtsapp_link'];?></td>

                                                      
    						<td> 
                                <a href="edit_employe_d.php?editemploye_id=<?php echo  $result['id'];?>">Edit</a>
                                ||
                                <a onclick="alert('are you sure to delete!')" href="?delemploy_id=<?php echo  $result['id'];?>">Delete</a>
                            </td>
						</tr>
                        <?php }}?>
                           <!--  if and while loop closing tag -->
						
					</tbody>
				</table>
               </div>
            </div>
        </div>
		
		<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
			setSidebarHeight();


        });
    </script>
        
<?php include 'inc/footer.php' ;?>