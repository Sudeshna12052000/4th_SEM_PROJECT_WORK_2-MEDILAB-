<?php
    include("connection.php");
    error_reporting(0);
    session_start();

    if(isset($_POST['submit']))
    {
        $email = $_POST['Email_ID'];
        $pwd = $_POST['confirm_password'];

        $query = "SELECT * FROM signup WHERE Email_ID='$email' && confirm_password='$pwd'";
        $data = mysqli_query($con,$query);

        $total = mysqli_num_rows($data);

        // echo $total;

        if($total == 1)
        {
            // echo "Login Succefull";
            // header('location:display.php');
            header('location:indexlog.php');
            $_SESSION['Email_ID']=$email;
          
//            <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/medilab/indexlog.php">
            

        }
        else
        {
            echo "<font color = 'red'>Invalid mail ID or Password";
            
        }
    }
?>