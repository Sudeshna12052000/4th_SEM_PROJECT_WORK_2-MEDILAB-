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
        
    $First_name=mysqli_real_escape_string($con,$_POST['First_name']);	  
    $Last_name=mysqli_real_escape_string($con,$_POST['Last_name']);	  
    $Gender=mysqli_real_escape_string($con,$_POST['Gender']);	 	  
    $Test_name=mysqli_real_escape_string($con,$_POST['Test_name']);	 	 	 	 
    $Test_ID=mysqli_real_escape_string($con,$_POST['Test_ID']);
    $Date=mysqli_real_escape_string($con,$_POST['Date']);
    $Time=mysqli_real_escape_string($con,$_POST['Time']);
    $Test1=mysqli_real_escape_string($con,$_POST['Test1']);
    $Result1=mysqli_real_escape_string($con,$_POST['Result1']);
    $Units=mysqli_real_escape_string($con,$_POST['Units']);
    $Standards1=mysqli_real_escape_string($con,$_POST['Standards1']);
    $Bio_ref1=mysqli_real_escape_string($con,$_POST['Bio_ref1']);
    $Methadology=mysqli_real_escape_string($con,$_POST['Methadology']);

    $insert_clint="insert into report(First_name,Last_name,Gender,Test_name,Test_ID,Date,Time,Test1,Result1,Units,Standards1,Bio_ref1,Methadology)
    values('$First_name','$Last_name','$Gender','$Test_name','$Test_ID','$Date','$Time','$Test1','$Result1','$Units','$Standards1','$Bio_ref1','$Methadology')";
        
    $run_costumer = mysqli_query($con, $insert_clint);
        
    if($run_costumer){
            echo"<script>alert('Upload successful')</script>";
        ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/medilab/service2.php">
<?php
        }
        
    else{
            echo"<script>alert('Something is wrong..!')</script>";
        }
}
?>



	
	

