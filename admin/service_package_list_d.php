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
							<th>Service name</th>
							<th>Package Name</th>
							<th>Price</th>
							<th>First Facilities</th>
							<th>Second Facilities</th>
							<th>Third Facilities</th>
                            <th>Action</th>
						</tr>
					</thead>


                    <!-- delete querry  start -->

                    <?php
                    
                    $db=new database();

                    // get method 
                    if(isset($_GET['delpkgid'])){
                        $delpkgid=$_GET['delpkgid'];

                        $delte_query="delete from servicesubcat  where id='$delpkgid'";
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
                          
                        $select="SELECT servicepackage.*,servicecat.*
                        from servicepackage
                        inner join servicecat on
                        servicecat.id=servicepackage.service_id
                        order by servicepackage.pakage_name";

                        $read=$db->select($select);
                        if($read){

                            $serial = 0;
                            while($result=$read->fetch_assoc()){
                            $serial++;

                    ?>
                    
                    <!-- select query end  -->

						<tr class="odd gradeX">
							<td><?php echo  $serial;?></td>
                            <td><?php echo  $result['service_name'];?></td>
                            <td><?php echo  $result['pakage_name'];?></td>
                            <td><?php echo  $result['price'];?></td>
                            <td><?php echo  $result['first_facilities'];?></td>
                            <td><?php echo  $result['second_facilities'];?></td>
                            <td><?php echo  $result['third_facilities'];?></td>

                                                      
    						<td> 
                                <a onclick="alert('are you sure to delete!')" href="?delpkgid=<?php echo  $result['id'];?>">Delete</a>
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