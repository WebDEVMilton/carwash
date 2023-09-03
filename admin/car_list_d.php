<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Car List for Sale</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Brand</th>
							<th>Model</th>
							<th>Image</th>
							<th>Company</th>
							<th>Location</th>
							<th>Phone</th>
							<th>Manufacture</th>
							<th>Stock Serial</th>
							<th>Mileage</th>
							<th>Engine</th>
							<th>Total Price</th>
                            <th>Action</th>
                       
						</tr>

					</thead>
                    
					<tbody>



                <!-- for delete start -->
                    <?php
                    $db=new database();

                    if(isset($_GET['delSellcarid'])){
                        $delSellcarid=$_GET['delSellcarid'];

                    $delete_query="Delete from sellcar 
                    where id='$delSellcarid' ";

                    $read=$db->delete($delete_query);
                    if($read){
                        echo"delete sucessfull";
                    }
                    else{
                        echo"something went wrong";

                    }

                }

                    ?>

                <!-- for delete end -->





                    <!-- php code start  -->
                    <?php 

                          $select="SELECT sellcar.*,carbrand.brandname
                          FROM  sellcar 
                          INNER JOIN carbrand ON 
                          carbrand.id= sellcar.carbrand_id
                          ORDER BY  sellcar.location";



                          $read=$db->select($select);
                          if($read){

                              $serial = 0;
                              while($result=$read->fetch_assoc()){
                              $serial++;

                  
                  
                    ?>
					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><?php echo $result['brandname']?></td>
                            <td><?php echo $result['carmodel']?></td>
                            <td><img width="100" height="70" src="<?php echo $result['carimage']?>" alt=""></td>
                            <td><?php echo $result['car_type']?></td>
                            <td><?php echo $result['location']?></td>
                            <td><?php echo $result['phonenum']?></td>
                            <td><?php echo $result['manufac_company']?></td>
                            <td><?php echo $result['stockserial']?></td>
                            <td><?php echo $result['mileage']?></td>
                            <td><?php echo $result['enginename']?></td>
                            <td><?php echo $result['carprice']?></td>
                            
                    
                            <td>
                                <a href="show_car_sell_d.php?showsellcarid=<?php echo $result['id']?>">Show</a> 
                                        ||
                                <a href="edit_car_sell_d.php?editsellcarid=<?php echo $result['id']?>">Edit</a> 
                                        || 
                                <a onclick="alert('are you sure')" href="?delSellcarid=<?php echo $result['id'];?>">Delete</a> 
                            </td>
						</tr>
                        
					    <?php }}?>	


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
        
<?php include 'inc/footer.php'; ?>