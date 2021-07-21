<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medilab";

$con = mysqli_connect($servername,$username,$password,$dbname);
//
//if($con){
//    echo "Connection ok";
//}
//else{
//    echo "Connection failed".mysqli_connect_error();
//}

if(isset($_POST['submit']))
{
        
    $First_name=mysqli_real_escape_string($con,$_POST['First_name']);	  
    $Last_name=mysqli_real_escape_string($con,$_POST['Last_name']);	  
    $Date=mysqli_real_escape_string($con,$_POST['Date']);	 	  
    $Age=mysqli_real_escape_string($con,$_POST['Age']);	 	 	 	 
    $weight=mysqli_real_escape_string($con,$_POST['weight']);
    $Email_ID=mysqli_real_escape_string($con,$_POST['Email_ID']);
    $Phone_no=mysqli_real_escape_string($con,$_POST['Phone_no']);

    $insert_clint="insert into patient_details(First_name,Last_name,Date,Age,weight,Email_ID,Phone_no)
    values('$First_name','$Last_name','$Date','$Age','$weight','$Email_ID','$Phone_no')";
        
    $run_costumer = mysqli_query($con, $insert_clint);
        
    if($run_costumer){
            echo"<script>alert('Data upload successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/medilab/service.php">
<?php
        }
        
    else{
            echo"<script>alert('Data upload not successful !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->