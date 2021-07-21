<?php
include("connection.php");
error_reporting(0);

$Patient_ID = $_GET['Patient_ID'];
$query = "DELETE * FROM clinicaltest,patient_details WHERE Sl_no= '$Patient_ID' AND Patient_ID = '$Patient_ID' ";

$data = mysqli_query($con , $query);

if($data){
     echo"<script>alert('Data removed successful')</script>";
          ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http:localhost/medilab/displayall.php">
<?php 
}
else{
     echo"<script>alert('failed to remove!!')</script>";
}

?>
    
    