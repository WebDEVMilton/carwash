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
							<th>Serial No.</th>
							<th>Day</th>
							<th>Opening Time</th>
							<th>Closing Time</th>
                            <th>Action</th>
                       
						</tr>
					</thead>


                    <!-- delete querry  start -->

                    <?php
                    
                    $db=new database();

                    // get method 
                    if(isset($_GET['delshedule_id'])){
                        $delshedule_id=$_GET['delshedule_id'];

                        $delte_query="delete from schedule  where id='$delshedule_id'";
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
                          
                        $select="SELECT * from schedule ";


                        $read=$db->select($select);
                        if($read){

                            $serial = 0;
                            while($result=$read->fetch_assoc()){
                            $serial++;

                    ?>
                    
                    <!-- select query end  -->

						<tr class="odd gradeX">
							<td><?php echo  $serial;?></td>
                            <td><?php echo  $result['day_name'];?></td>
                            <td><?php echo  $result['open_time'];?></td>
                            <td><?php echo  $result['colse_time'];?></td>

                                                      
    						<td> 
                                <a href="edit_shedule_d.php?edittimeid=<?php echo  $result['id'];?>">Edit</a>
                                ||
                                <a onclick="alert('are you sure to delete!')" href="?delshedule_id=<?php echo  $result['id'];?>">Delete</a>
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