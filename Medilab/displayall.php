<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>
<!-------------------------------------------------------------------------------------->
<nav class="navbar navbar-light bg-info">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="140" height="50" class="d-inline-block align-top" alt="" loading="lazy"></a>
    <ul class="nav justify-content-end">
  
  <li class="nav-item bg-dark">
    <button class="btn btn-light"><a class="nav-link" href="index.html">Home</a></button>
  </li> &nbsp;&nbsp;&nbsp;
        <li class="nav-item bg-dark">
    <button class="btn btn-light"><a class="nav-link" href="techlog.html">Back</a></button>
  </li>&nbsp;&nbsp;&nbsp;
  <li class="nav-item bg-dark">
    <button class="btn btn-light"><a class="nav-link" href="adminlog.html">Logout</a></button>
  </li>
  
</ul>
</nav>
<!-------------------------------------------------------------------------------------->
 

        <div id="dc">
        <h1 class="bg-lite">Displaying the Clinicaltest Records</h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>Doctor reffered</th>
                <th>Patient name</th>
                <th>Gender</th>
                <th>Test name</th>
                <th>Test type id</th>
                <th>Amount</th>
                
                </tr></thead>
    	                  
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Sl_no']." ".$result['Doctor_reffered']." ".$result['Patient_name']."".$result['Gender']."".$result['Test_name']."  ".$result['Test_type_id']." ".$result['Amount'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['Sl_no']."</td>
                        <td>".$result['Doctor_reffered']."</td>
                        <td>".$result['Patient_name']."</td>
                        <td>".$result['Gender']."</td>
                        <td>".$result['Test_name']."</td>
                        <td>".$result['Test_type_id']."</td>
                        <td>₹ ".$result['Amount']."</td>
                        
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>
<!-------------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>


        <div id="dc">
        <h1 class="bg-lite">Displaying the Patient Details</h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Patient_ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Date</th>
                <th>Age</th>
                <th>Body Weight</th>
                <th>Email_ID</th>
                <th>Phone_no</th>
                
                </tr></thead> 	                  
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM patient_details";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Patient_ID']." ".$result['First_name']." ".$result['Last_name']."".$result['Date']."".$result['Age']."  ".$result['weight']." ".$result['Email_ID']." ".$result['Phone_no'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['Patient_ID']."</td>
                        <td>".$result['First_name']."</td>
                        <td>".$result['Last_name']."</td>
                        <td>".$result['Date']."</td>
                        <td>".$result['Age']."</td>
                        <td>".$result['weight']."</td>
                        <td>".$result['Email_ID']."</td>
                        <td>".$result['Phone_no']."</td>
                        
                       
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>
<!-------------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>
  <a class="navbar-brand" href="#">
<!--    <img src="images/logo.gif" width="200" height="60" class="d-inline-block align-top" alt="" loading="lazy">-->
    
  </a>

        <div id="dc">
        <h1 class="bg-lite">Displaying the Test Details</h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>Doctor reffered</th>
                <th>Patient name</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Test name</th>
                <th>Test type id</th>
                <th>Patient_ID</th>
                <th>Date</th>
                <th>Age</th>
                <th>Body Weight</th>
                <th>Email_ID</th>
                <th>Phone_no</th>
                <th>Amount</th>
                
<!--              <th colspan="2" align="center">Operation</th>-->
                </tr></thead> 	                  
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM clinicaltest,patient_details WHERE Sl_no=Patient_ID";
//            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Sl_no']." ".$result['Doctor_reffered']." ".$result['Patient_name']."".$result['First_name']." ".$result['Last_name']."  ".$result['Gender']." ".$result['Test_name']."  ".$result['Test_type_id']."  ".$result['Patient_ID']." ".$result['Date']." ".$result['Age']." ".$result['weight']." ".$result['Email_ID']." ".$result['Phone_no']." ".$result['Amount'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['Sl_no']."</td>
                        <td>".$result['Doctor_reffered']."</td>
                        <td>".$result['Patient_name']."</td>
                        <td>".$result['First_name']."</td>
                        <td>".$result['Last_name']."</td>
                        <td>".$result['Date']."</td>
                        <td>".$result['Gender']."</td>
                        <td>".$result['Test_name']."</td>
                        <td>".$result['Test_type_id']."</td>
                        <td>".$result['Patient_ID']."</td>
                        <td>".$result['Age']."</td>
                        <td>".$result['weight']."</td>
                        <td>".$result['Email_ID']."</td>
                        <td>".$result['Phone_no']."</td>
                        <td>₹ ".$result['Amount']."</td>
                       
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>

<!-------------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>
  <a class="navbar-brand" href="#">
<!--    <img src="images/logo.gif" width="200" height="60" class="d-inline-block align-top" alt="" loading="lazy">-->
    
  </a>

        <div id="dc">
        <h1 class="bg-lite">Displaying Staff Details</h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email_ID</th>
                <th>Phone_no</th>
                
<!--              <th colspan="2" align="center">Operation</th>-->
                </tr></thead> 
    
        
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM lab_technician";
//            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['ID']." ".$result['First_name']." ".$result['Last_name']." ".$result['Email_ID']." ".$result['Phone_no'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['ID']."</td>
                        <td>".$result['First_name']."</td>
                        <td>".$result['Last_name']."</td>
                        <td>".$result['Email_ID']."</td>
                        <td>".$result['Phone_no']."</td>
                                                
                       
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>

<!-------------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>
      <div id="dc">
        <h1 class="bg-lite">Displaying the Patient Details</h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>Patient_ID</th>
                <th>Doctor reffered</th>
                <th>Patient name</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Test name</th>
                <th>Test type id</th>
                <th>Date</th>
                <th>Age</th>
                <th>Body Weight</th>
                <th>Email_ID</th>
                <th>Phone_no</th>
                <th>Amount</th>
                
<!--              <th colspan="2" align="center">Operation</th>-->
                </tr></thead> 	                  
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM clinicaltest,patient_details WHERE Sl_no=Patient_ID";
//            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Sl_no']." ".$result['Patient_ID']." ".$result['Doctor_reffered']." ".$result['Patient_name']."  ".$result['First_name']." ".$result['Last_name']." ".$result['Gender']." ".$result['Test_name']."  ".$result['Test_type_id']."  ".$result['Date']." ".$result['Age']." ".$result['weight']." ".$result['Email_ID']." ".$result['Phone_no']." ".$result['Amount'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['Sl_no']."</td>
                        <td>".$result['Patient_ID']."</td>
                        <td>".$result['Doctor_reffered']."</td>
                        <td>".$result['Patient_name']."</td>
                        <td>".$result['First_name']."</td>
                        <td>".$result['Last_name']."</td>
                        <td>".$result['Gender']."</td>
                        <td>".$result['Test_name']."</td>
                        <td>".$result['Test_type_id']."</td>
                        <td>".$result['Date']."</td>
                        <td>".$result['Age']."</td>
                        <td>".$result['weight']."</td>
                        <td>".$result['Email_ID']."</td>
                        <td>".$result['Phone_no']."</td>
                        <td>₹ ".$result['Amount']."</td>
                        
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>

<!-------------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>
  <a class="navbar-brand" href="#">
<!--    <img src="images/logo.gif" width="200" height="60" class="d-inline-block align-top" alt="" loading="lazy">-->
    
  </a>

        <div id="dc">
        <h1 class="bg-lite">People Contacted Us </h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Sl no</th>
                <th>Name</th>
                <th>Email_ID</th>
                <th>Subject</th>
                <th>Message</th>
                
                </tr></thead> 
       
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM contact";
//            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Sl_no']." ".$result['Name']." ".$result['Email_ID']." ".$result['Subject']." ".$result['Message'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['Sl_no']."</td>
                        <td>".$result['Name']."</td>
                        <td>".$result['Email_ID']."</td>
                        <td>".$result['Subject']."</td>
                        <td>".$result['Message']."</td>
                        
                        
                       
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>

<!-------------------------------------------------------------------------------------------->
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>
            Displaying the Clinicaltest Records
        </title>
        <style>
            body{
                background-image:url(images/slider-bg.png)
            }
            #dc{
             text-align: center;   
            }
            h3{
                float: left;
            }
        </style>
    </head>
    <body>
  <a class="navbar-brand" href="#">
<!--    <img src="images/logo.gif" width="200" height="60" class="d-inline-block align-top" alt="" loading="lazy">-->
    
  </a>

        <div id="dc">
        <h1 class="bg-lite">Signup Records </h1>
            
        <table class="table table-striped table-info">
            <thead>
            <tr>
                <th>Sl no</th>
                <th>First Name</th>
                <th>Last_name</th>
                <th>Email_ID</th>
                
                </tr></thead> 
            
<?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM signup";
//            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Sl_no']." ".$result['First_name']." ".$result['Last_name']." ".$result['Email_ID'];        
            
        
    
                // echo "$total";

                if($total != 0){
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data)){
                        echo"
                        <tr>
                        <td>".$result['Sl_no']."</td>
                        <td>".$result['First_name']."</td>
                        <td>".$result['Last_name']."</td>
                        <td>".$result['Email_ID']."</td>
                        
                        
                       
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure you want to delete this record!!')
            }
        </script>
            </div>
    </body>
</html>

