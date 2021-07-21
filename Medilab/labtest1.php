<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medilab";

$con = mysqli_connect($servername,$username,$password,$dbname);

//if($con){
//    echo "Connection ok";
//}
//else{
//    echo "Connection failed".mysqli_connect_error();
//}

if(isset($_POST['submit']))
{
        
    $Doctor_reffered=mysqli_real_escape_string($con,$_POST['Doctor_reffered']);	  
    $Patient_name=mysqli_real_escape_string($con,$_POST['Patient_name']);	  
    $Gender=mysqli_real_escape_string($con,$_POST['Gender']);	 	  
    $Test_name=mysqli_real_escape_string($con,$_POST['Test_name']);	 	 	 	 
    $Test_type_id=mysqli_real_escape_string($con,$_POST['Test_type_id']);
    $Amount=mysqli_real_escape_string($con,$_POST['Amount']);

    $insert_clint="insert into clinicaltest(Doctor_reffered,Patient_name,Gender,Test_name,Test_type_id,Amount)
    values('$Doctor_reffered','$Patient_name','$Gender','$Test_name','$Test_type_id','$Amount')";
        
    $run_costumer = mysqli_query($con, $insert_clint);
        
    if($run_costumer){
            echo"<script>alert('Data upload successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/medilab/labtest2.html">
<?php
        }
        
    else{
            echo"<script>alert('Data upload not successful !')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->