<?php
include("connection.php");
error_reporting(0);

$Email_ID = $_GET['Email_ID'];
$query = "DELETE * FROM lab_technician WHERE Email_ID = '$Email_ID' ";

$data = mysqli_query($con , $query);

if($data)
{
     echo"<script>alert('lab technician removed successful')</script>";
          ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http:localhost/medilab/displayall.php">
<?php 
}
else{
     echo"<script>alert('failed to remove!!')</script>";
}

?>
    