<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medilab";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con){
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}

if(isset($_POST['submit']))
{
        
    $first_name=mysqli_real_escape_string($con,$_POST['first_name']);	  
    $last_name=mysqli_real_escape_string($con,$_POST['last_name']);	  
    $Email_ID=mysqli_real_escape_string($con,$_POST['Email_ID']);	 	  
    $create_password=mysqli_real_escape_string($con,$_POST['create_password']);	 	 	 	 
    $confirm_password=mysqli_real_escape_string($con,$_POST['confirm_password']);

    $insert_clint="insert into signup(first_name,last_name,Email_ID,create_password,confirm_password)
    values('$first_name','$last_name','$Email_ID','$create_password','$confirm_password')";
        
    $run_costumer = mysqli_query($con, $insert_clint);
        
    if($run_costumer){
            echo"<script>alert('Signup successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/medilab/login.html">
<?php
        }
        
    else{
            echo"<script>alert('Something is wrong..!')</script>";
        }
}
?>

<!--<p align="center"><a href="http://localhost/lifecare/login.php">login with Your new account</a></p>-->
<!--<p align="center"><a href="http://localhost/miniproject_ssp/deletion.php">View the records</a></p>-->