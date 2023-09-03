<?php 
      include '../Database.php';
      include '../helpers/format.php' 
    ?>
<?php 
include '../lib/Session.php' ;
Session:: checkSession();

?>

<?php 
	$db = new Database();

		$delpostid = $_GET['delpostid'];
		
		$delquery = "delete from tbl_post where id = $delpostid";
		$delete = $db->delete($delquery);
		if($delete){
			
			header("Location:postlist.php");
		}else{
			
			header("Location:postlist.php");
		}
	
	

?>