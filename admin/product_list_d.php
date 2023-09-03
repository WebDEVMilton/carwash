<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

 <div class="grid_10">
            <div class="box round first grid">
                <h2>Message List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">Serial</th>
							<th width="15%">Brand</th>
							<th width="10%">Product Name</th>
							<th width="20%">Product  Image</th>
							<th width="10%">Previous Price</th>
							<th width="10%">Current Price</th>
							<th width="10%">Discount</th>
							<th width="20%">Action</th>
						</tr>

					</thead>


					<tbody>


                    <?php
                        // delete product   
                            $db = new Database();
                            if(isset($_GET['delproductid'])){
                                $delproductid=$_GET['delproductid'];

                                $delete_query="delete  from product where id='$delproductid'";

                                $read=$db->delete($delete_query);
                                if($read){
                                    echo"delete successfull";
                                }else{
                                    echo "something went wrong";
                                }
                            }
                            
                    ?>

                            <!-- data fatch through select query  -->

                            <?php
                            $select_query = "SELECT product.*, productbrand.* 
                            from product
                            inner join productbrand on
                            productbrand.id=product.product_brand_id
                            order by product.product_name"; 
                            $read = $db->select($select_query);
                            if($read){
                                $serial = 0;
                                while($result=$read->fetch_assoc()){
                                    $serial++;
                            ?>
						<tr class="odd gradeX">
							 <td><?php echo $serial; ?></td>
							<td><?php echo $result['productbrand_name']; ?></td>
							<td><?php echo $result['product_name']; ?></td>
							<td><img width="100" height="70" src="<?php echo $result['product_image']; ?>" alt=""></td>
							<td><?php echo $result['previous_price']; ?></td>
							<td><?php echo $result['current_price']; ?></td>
							<td><?php echo $result['discount']."%"; ?></td>
							<td>
                                <a href="show_product_d.php?showproductid=<?php echo $result['id']; ?>">Show</a>
                                ||
                                <a href="edit_product_d.php?editproductid=<?php echo $result['id']; ?>">Edit</a>
                                ||
                                <a onclick="alert('are you sure to delete!')" href="?delproductid=<?php echo $result['id']; ?>">Delete</a>
                            </td>
						</tr>
					 <?php } } ?>
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
