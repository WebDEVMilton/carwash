<?php include 'lib/database.php';?>
 <?php $db=new Database() ;?>
<?php 
include 'lib/session.php';
Session:: init();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
    <title>Document</title>
</head>
<body>

    <?php
    
    
    if(isset($_GET['datetimeID'])){
      $datetimeID=$_GET['datetimeID'];
    }
    
    
    
    
    
    
    ?>



    <?php 

    if(isset($_POST['submit'])){
      $appoinment_time=$_POST['appoinment_time'];

      if(empty($appoinment_time)){
        echo"<script>alert('fill it')</script>";


      }else{

          $select_querry="SELECT * from  booking  where appoinment_time='$appoinment_time' limit 1";
          $select_read=$db->select($select_querry);

          if($select_read=false){
            echo"<script>alert('select different time')</script>";

          }else{
            $update_querry="UPDATE booking 
            set appoinment_time='$appoinment_time'

            where id='$datetimeID'";
            $read=$db->update($update_querry);

            if($read){
              echo "date update successful";
            }else{
              echo "something wrong";
            }

          }



        }

      


    }


    ?>


    <form action="" method="post">
          <input type="text" name="appoinment_time" id="from" />
          <input type="submit" name="submit">
    </form>



<script>
       var today = new Date().toISOString().slice(0, 16);

        //document.getElementsByName("book")[0].min = today;
      
        document.querySelector('#from').min = today;
       

$(function() {
  $('input[name="appoinment_time"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
      format: 'DD/M hh:mm A'
    }
  });
});
</script>
    
</body>





</html>