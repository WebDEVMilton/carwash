<?php 

     include '../Database.php';
    ?>
	<?php 
    $db = new Database();
     $id = $_GET['catid'];
     $query = "DELETE FROM tbl_catagory WHERE id=$id";
     $deleteData = $db->sdeletes($query);
	  header("Location:catlist.php");
    
  
	
	?>
