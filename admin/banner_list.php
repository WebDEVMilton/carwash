<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Banner List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Banner</th>                      
                            <th>Action</th>
						</tr>
					</thead>
					

					<tbody>
                    
                    <?php 
                      $db=new database();

                     $select_banner="select * from banner";
                     $read=$db->select($select_banner);
                     if($read){

                        $serial = 0;
                        while($banner_result=$read->fetch_assoc()){
                        $serial++;

                    
                    
                    ?>



                     
					
						<tr class="odd gradeX">
							<td><?php echo $serial ?></td>
                            <td><img  width="200px" height="100px" src="<?php echo $banner_result['banner']?>"></td>
							
                           
                            
    						<td>
                            <a href="">Edit</a> 
                                    || 
                            <a  href="">Delete</a>
                                 ||
                            <a download="<?php echo $banner_result['banner']?>"  href="<?php echo $banner_result['banner']?>">download</a>
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