<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
	
						 $db = new Database();
						 $query = "SELECT * FROM tbl_catagory order by id desc";
						 $catagory = $db->select($query);
					?>

					<tbody>
					<?php
							
							if($catagory){
							$serial = 0;
							while($result = $catagory->fetch_assoc()){
								$serial++;
						?>
						<tr class="odd gradeX">
							<td><?php echo $serial; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><a href="editcat.php?catid=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure to Delete!')" href="delcat.php?catid=<?php echo $result['id']; ?>">Delete</a></td>
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