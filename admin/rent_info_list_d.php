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
							<th>Rent Headline</th>
							<th>Rent Message</th>
							<th>Rent Contact</th>
							<th>First Image</th>
							<th>Second Image</th>
                            <th>Action</th>
                       
						</tr>
					</thead>


                    <!-- delete querry  start -->

                    <?php
                    
                    $db=new database();
                    if(isset($_GET['deleterentdtls_id'])){
                        $deleterentdtls_id=$_GET['deleterentdtls_id'];

                        $delte_query="delete from rent  where id='$deleterentdtls_id'";
                        $read=$db->delete($delte_query);
                        if($read){
                            echo "delete succesfull";

                        }
                        else{
                            echo "something went wrong";
                        }
                    }
                    ?>

                    <!-- delete querry end  -->
					

					<tbody>
                    
                    <!-- select querry start  -->

                    <?php 
                          
                        $select="SELECT * FROM   rent";

                        $read=$db->select($select);
                        if($read){

                            $serial = 0;
                            while($result=$read->fetch_assoc()){
                            $serial++;

                    ?>
                    
                    <!-- select query end  -->



                     
					
						<tr class="odd gradeX">
							<td><?php echo  $serial;?></td>
                            <td><?php echo  $result['rent_headline'];?></td>
                            <td><?php echo  $result['rent_msg'];?></td>
                            <td><?php echo  $result['rent_contact'];?></td>
                            <td><img width="100" height="70" src="<?php echo  $result['rent_first_image'];?>" alt=""></td>
                            <td><img width="100" height="70" src="<?php echo  $result['rent_second_img'];?>" alt=""></td>
                            

                                                      
    						<td> 
                                <a href="edit_rent_info.php?editrentdtls_id=<?php echo  $result['id'];?>">Edit</a>
                                ||
                                <a onclick="alert('are you sure to delete!')" href="?deleterentdtls_id=<?php echo  $result['id'];?>">Delete</a>
                            </td>
						</tr>
                        <?php }}?>
                           <!--  if and while loop closing tag -->
						
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