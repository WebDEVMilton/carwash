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
							<th>Car Brand</th>
							<th>Brand Image</th>
                            <th>Action</th>
                       
						</tr>
					</thead>


                    
                    <?php
                        // delete product   
                            $db = new Database();
                            if(isset($_GET['deletebrandcar_id'])){
                                $deletebrandcar_id=$_GET['deletebrandcar_id'];

                                $delete_query="delete  from carbrand  where id='$deletebrandcar_id'";

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

                      $select_carbrand="select * from carbrand";
                      $read=$db->select($select_carbrand);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>

					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><?php echo $result['brandname']?></td>
                            <td><img width="100" height="70" src="<?php echo $result['brandimage']?>" alt=""></td>
                            
                    
                            <td>
                                <a href="">Edit</a> 
                                        || 
                                <a  href="?deletebrandcar_id=<?php echo $result['id']?>">Delete</a>
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