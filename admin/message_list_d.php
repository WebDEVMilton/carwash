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
							<th width="10%">Serial No.</th>
							<th width="15%">Name</th>
							<th width="20%">Email</th>
							<th width="20%">Phone Number</th>
							<th width="25%">Message</th>
                            <th width="10%">Action</th>
						</tr>
					</thead>
                    
                <!-- for delete start -->
                <?php
                    $db=new database();

                    if(isset($_GET['deletemsg_id'])){
                        $deletemsg_id=$_GET['deletemsg_id'];

                    $delete_query="Delete from message 
                    where id='$deletemsg_id' ";

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
					

					<tbody>

                    <!-- php code start  -->
                    
                    <?php 
                      $select_messg="select * from message";
                      $read=$db->select($select_messg);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>

					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><?php echo $result['name']?></td>                            
                            <td><?php echo $result['email']?></td>                            
                            <td><?php echo $result['phone']?></td>                            
                            <td><?php echo $result['messages']?></td>                            
                    
                            <td>

                                <a  href="?deletemsg_id=<?php echo $result['id']?>">Delete</a>
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