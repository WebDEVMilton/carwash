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
							<th width="20%">Serial No.</th>
							<th width="20%">Name</th>
							<th width="20%">Email</th>
							<th width="20%">status</th>
                            <th width="20%">Action</th>
						</tr>
					</thead>
                    
                <!-- for delete start -->
                <?php
                    

                    ?>

                <!-- for delete end -->
					

					<tbody>

                    <!-- php code start  -->
                    
                    <?php 
                      $db=new database();
                      $select_messg="select * from user";
                      $read=$db->select($select_messg);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><?php echo $result['fname'].$result['lname']?></td>                            
                            <td><?php echo $result['email']?></td>                            
                            <td><?php echo $result['status']?></td>                            
                                                      
                            <td>
                                <?php
                                if($_SESSION['status']=='admin'){
                                
                                
                                ?>
                                <a  href="?deletemsg_id=<?php echo $result['id']?>">Delete</a>
                                ||
                                <a  href="edituser_d.php?editid=<?php echo $result['id']?>">Edit</a>
                                <?php }?>
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