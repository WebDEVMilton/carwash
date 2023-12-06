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
							<th>Product Image</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Customer Name</th>
							<th>Phone</th>
							<th>City</th>
							<th>Adress</th>
                            <th>Action</th>
                       
						</tr>
					</thead>
                    
                <!-- for delete start -->
                <!-- <?php
                    $db=new database();

                    if(isset($_GET['deleteproduct_id'])){
                        $deleteproduct_id=$_GET['deleteproduct_id'];

                    $delete_query="Delete from orders
                    where id='$deleteproduct_id' ";

                    $read=$db->delete($delete_query);
                    if($read){
                        echo"delete sucessfull";
                    }
                    else{
                        echo"something went wrong";

                    }

                }

                    ?> -->

                <!-- for delete end -->
					

					<tbody>

                    <!-- php code start  -->
                    
                    <?php 
                            $select_query = "SELECT orders.*, product.product_image 
                            from orders
                            inner join product on
                            product.id=orders.product_id
                            order by orders.customer_name";
                      $read=$db->select($select_query);

                      if($read){

                        $serial=0;
                        while($result=$read->fetch_assoc()){
                            $serial++;
                        
                    ?>

					
						<tr class="odd gradeX">
                            <td><?php echo $serial?></td>
                            <td>
                            <img width="70" height="50" src="<?php echo $result['product_image']?>" alt="">
                            </td>
                            <td><?php echo $result['product_name']?></td>
                            <td><?php echo $result['product_price']?></td>
                            <td><?php echo $result['customer_name']?></td>
                            <td><?php echo $result['phone_num']?></td>
                            <td><?php echo $result['city']?></td>
                            <td><?php echo $result['address']?></td>
                
                            
                    
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