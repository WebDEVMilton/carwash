<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Ads List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Addvertise Full Bar</th>                      
							<th>Gifs</th>                      
                            <th>Action</th>
						</tr>
					</thead>




                <!-- for delete start -->
                <?php
                    $db=new database();

                    if(isset($_GET['deletegifs_id'])){
                        $deletegifs_id=$_GET['deletegifs_id'];

                    $delete_query="Delete from ads 
                    where id='$deletegifs_id' ";

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
                    
                    <?php 
                      $db=new database();

                     $select="SELECT * FROM ads";

                     $read=$db->select($select);
                     if($read){

                        $serial = 0;
                        while($result=$read->fetch_assoc()){
                        $serial++;

                    
                    
                    ?>

						<tr class="odd gradeX">
							<td><?php echo $serial ?></td>
                            <td><img  width="200px" height="100px" src="<?php echo $result['full_img']?>"></td>
                            <td><img  width="200px" height="100px" src="<?php echo $result['gifs']?>"></td>
							
                           
                            
    						<td>
                            <a href="">Edit</a> 
                                    || 
                            <a  href="?deletegifs_id=<?php echo $result['id']?>">Delete</a>
                                 ||
                            <a download="<?php echo $result['full_img']?>"  href="<?php echo $result['full_img']?>">download</a>
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