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
							<th>Sponsor Name</th>
							<th>Sponsor image</th>
                            <th>Action</th>
                       
						</tr>
					</thead>


                    <!-- delete querry  start -->

                    <?php
                    
                    $db=new database();

                    // get method 
                    if(isset($_GET['delsponsor_id'])){
                        $delsponsor_id=$_GET['delsponsor_id'];

                        $delte_query="delete from sponsor  where id='$delsponsor_id'";
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
                          
                        $select="SELECT * from sponsor";


                        $read=$db->select($select);
                        if($read){

                            $serial = 0;
                            while($result=$read->fetch_assoc()){
                            $serial++;

                    ?>
                    
                    <!-- select query end  -->

						<tr class="odd gradeX">
							<td><?php echo  $serial;?></td>
                            <td><?php echo  $result['sponsor_name'];?></td>
                            <td><?php echo  $result['sponsor_image'];?></td>

                                                      
    						<td> 
                                <a onclick="alert('are you sure to delete!')" href="?delsponsor_id=<?php echo  $result['id'];?>">Delete</a>
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