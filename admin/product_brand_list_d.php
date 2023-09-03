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
                    
                <!-- for delete start -->
                <?php
                    $db=new database();

                    if(isset($_GET['deleteproduct_id'])){
                        $deleteproduct_id=$_GET['deleteproduct_id'];

                    $delete_query="Delete from productbrand 
                    where id='$deleteproduct_id' ";

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
                      $select_carbrand="select * from productbrand";
                      $read=$db->select($select_carbrand);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>

					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td><?php echo $result['productbrand_name']?></td>
                            <td><img width="100" height="70" src="<?php echo $result['product_brand_img']?>" alt=""></td>
                            
                    
                            <td>
                                <a href="edit_product_brand_d.php?editbrand_id=<?php echo $result['id']?>">Edit</a> 
                                        || 
                                <a  href="?deleteproduct_id=<?php echo $result['id']?>">Delete</a>
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