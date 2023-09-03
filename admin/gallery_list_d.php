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
							<th>Gallery Image</th>
                            <th>Action</th>
                       
						</tr>
					</thead>
                    
                <!-- for delete start -->
                <?php
                    $db=new database();

                    if(isset($_GET['deleteglryimg_id'])){
                        $deleteglryimg_id=$_GET['deleteglryimg_id'];

                    $delete_query="Delete from gallery  
                    where id='$deleteglryimg_id' ";

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
                      $select_querry="select * from gallery";
                      $read=$db->select($select_querry);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>

					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><img width="100" height="70" src="<?php echo $result['image']?>" alt=""></td>
                            
                    
                            <td>
                                <a  href="?deleteglryimg_id=<?php echo $result['id']?>">Delete</a>
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