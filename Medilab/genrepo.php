<html>
<head>
    <title>Report</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        tr,th{
            text-align: center;
        }
    </style>
    </head>
    <body class="bg-light">
        <!-------------------------------------------------------------------------------------->
<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="140" height="50" class="d-inline-block align-top" alt="" loading="lazy"></a>
    <ul class="nav justify-content-end">
  
  <li class="nav-item bg-dark">
    <button class="btn btn-light"><a class="nav-link" href="indexlog.php">Home</a></button>
  </li> &nbsp;&nbsp;&nbsp;
        <li class="nav-item bg-dark">
    <button class="btn btn-light"><a class="nav-link" href="viewrepo.php">Back</a></button>
  </li>&nbsp;&nbsp;&nbsp;
  <li class="nav-item bg-dark">
    <button class="btn btn-light"><a class="nav-link" href="index.html">Logout</a></button>
  </li>
  
</ul>
</nav>
<!-------------------------------------------------------------------------------------->
 
    <center>
<!--Generate Report-->
    <div id="dc">
        <h1 class="bg-lite">Reports Generated </h1>
            
        <table class="table  table-bordered">
            <thead class="bg-primary">
            <tr>
                <th scope="col">Sl no</th>
                <th scope="col">First_name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Test Name</th>
                <th scope="col">Test_ID</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Test1</th>
                <th scope="col">Result1</th>
                <th scope="col">Units</th>
                <th scope="col">Standards1</th>
                <th scope="col">Bio_ref1</th>
                <th scope="col">Methadology</th>
                
<!--              <th colspan="2" align="center">Operation</th>-->
                </tr></thead> 
       
<?php
            include("connection.php");
            error_reporting(0);
    if(isset($_POST['submit']))
    {
        $Sl_no = $_POST['Sl_no'];
        
            $query = "SELECT * FROM report WHERE Sl_no='$Sl_no' ";
//            $query = "SELECT * FROM clinicaltest";
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            
            // $result = mysqli_fetch_assoc($data);
            
            echo $result['Sl_no']." ".$result['First_name']." ".$result['Last_name']." ".$result['Gender']." ".$result['Test_name']." ".$result['Test_ID']." ".$result['Date']." ".$result['Time']." ".$result['Test1']." ".$result['Result1']." ".$result['Units']." ".$result['Standards1']." ".$result['Bio_ref1']." ".$result['Methadology'];        
            
        
    
                // echo "$total";

                if($total != 0)
                {
                    // $result = mysqli_fetch_assoc($data);
                    while($result = mysqli_fetch_assoc($data))
                    {
                        echo"
                        <tr>
                        <td>".$result['Sl_no']."</td>
                        <td>".$result['First_name']."</td>
                        <td>".$result['Last_name']."</td>
                        <td>".$result['Gender']."</td>
                        <td>".$result['Test_name']."</td>
                        <td>".$result['Test_ID']."</td>
                        <td>".$result['Date']."</td>
                        <td>".$result['Time']."</td>
                        <td>".$result['Test1']."</td>
                        <td>".$result['Result1']."</td>
                        <td>".$result['Units']."</td>
                        <td>".$result['Standards1']."</td>
                        <td>".$result['Bio_ref1']."</td>
                        <td>".$result['Methadology']."</td>
                        
                       
                        </tr>
                        ";
                    }
                    // echo " Table has records";
                }
    }
                else{
                    echo "No recodrs found";
                }
            ?>

        </table>
        
        
            </div>
        
<!--/Generate Report-->
        </center>
    </body>
</html>

                    
        