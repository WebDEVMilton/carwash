<?php 

     include '../Database.php';
    ?>
	<?php 
    $db = new Database();
     $id = $_GET['delmsgid'];
     $query = "DELETE FROM tbl_contact WHERE id=$id";
     $deleteData = $db->sdeletes($query);
	  header("Location:message_list.php");
    
  
	
	?>