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
							<th>Street location</th>
							<th>City</th>
							<th>Division</th>
							<th>Helpline number</th>
							<th>phone number</th>
							<th>Email</th>
                            <th>Action</th>
                       
						</tr>
					</thead>


                    
                    <?php
                        // delete product   
                            $db = new Database();
                            if(isset($_GET['deletecntctdetil_id'])){
                                $deletecntctdetil_id=$_GET['deletecntctdetil_id'];

                                $deletecntctdetil_id="delete  from  contact where id='$deletecntctdetil_id'";

                                $read=$db->delete($delete_query);
                                if($read){
                                    echo"delete successfull";
                                }else{
                                    echo "something went wrong";
                                }
                            }
                            
                    ?>
					

					<tbody>

                    <!-- php code start  -->
                    
                    <?php 

                      $select_carbrand="select * from contact";
                      $read=$db->select($select_carbrand);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>

					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><?php echo $result['street_location']?></td>
                            <td><?php echo $result['city']?></td>
                            <td><?php echo $result['division']?></td>
                            <td><?php echo $result['helpline_num']?></td>
                            <td><?php echo $result['phone_num']?></td>
                            <td><?php echo $result['email']?></td>

                            
                    
                            <td>
                                <a href="edit_contact_details.php?editcontctdetls_id">Edit</a> 
                                        || 
                                <a  href="?deletecntctdetil_id=<?php echo $result['id']?>">Delete</a>
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