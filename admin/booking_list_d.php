<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Banner List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Banner</th>                      
							<th>Banner</th>                      
							<th>Banner</th>                      
							<th>Banner</th>                      
							<th>Banner</th>                      
							<th>Banner</th>                      
                            <th>Action</th>
						</tr>
					</thead>

                     <?php
                    $db=new database();

                    if(isset($_GET['deletebooking'])){
                        $deletebooking_id=$_GET['deletebooking'];

                    $delete_query="Delete from booking 
                    where id='$deletebooking_id' ";

                    $read=$db->delete($delete_query);
                    if($read){
                        echo"<script> alert('Delete Successful') </script>";
                    }
                    else{
                        echo"<script> alert('somthing  went wrong') </script>";

                    }

                }

                    ?> 

                 <?php
                    $db=new database();

                    if(isset($_GET['updatebooking'])){
                        $updatebooking=$_GET['updatebooking'];

                    $update_querry="UPDATE booking
                            SET status= 1
                            WHERE id =  $updatebooking";

                    $read=$db->delete($update_querry);
                    if($read){
                        echo"<script> alert('Update successfull Successful') </script>";
                    }
                    else{
                        echo"<script> alert('somthing  went wrong') </script>";

                    }

                }

                ?> 










					

					<tbody>
                    
                    <?php 
                      $db=new database();

                     $select_booking ="select * from  booking";
                     $read=$db->select($select_booking);
                     if($read){

                        $serial = 0;
                        while($booking_result=$read->fetch_assoc()){
                        $serial++;

                    
                    
                    ?>



                     
					
						<tr class="odd gradeX">
							<td><?php echo $serial ?></td>
                            <td><?php echo $booking_result['customer_name']?></td>
                            <td><?php echo $booking_result['customer_email']?></td>
                            <td><?php echo $booking_result['phone_number']?></td>
                            <td><?php echo $booking_result['address']?></td>
                            <td><?php echo $booking_result['package_name']?></td>
                            <td><?php echo $booking_result['appointment_time']?></td>
                            
							
                           
                            <?php?>
    						<td>
                            <?php
                                $status=$booking_result['status'];
                                if($status==0){
                            ?>
                            <a onclick="alert('Approve it')"  href="?updatebooking=<?php echo $booking_result['id']?>">pending</a>      
                           <?php } ?>
                            <?php
                                $status=$booking_result['status'];
                                if($status==1){
                            ?>
                            <a onclick="alert('Approve it')"  href="?updatebooking=<?php echo $booking_result['id']?>">Approved</a>      
                           <?php } ?>
                                    ||
                            <a onclick="alert('are you sure')"  href="?deletebooking=<?php echo $booking_result['id']?>">Delete</a>
                                 <!-- || -->
                            <!-- <a download="<?php echo $booking_result['banner']?>"  href="<?php echo $booking_result['banner']?>">download</a> -->
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
        
<?php include 'inc/footer.php' ;?>