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
            #hd{
                border: box;
                border-color: black;
            }
            a{
                color: aliceblue;
                font-size:20px;
            }
            a:hover{
                color: ghostwhite;
                font-size: 30px;
                font-family: cursive;
                text-decoration: none;
            }
        </style>
    </head>
    <body class="bg-lite">
  <a class="navbar-brand" href="#">
<!--    <img src="images/logo.gif" width="200" height="60" class="d-inline-block align-top" alt="" loading="lazy">-->
    
  </a>

        <div id="dc">
        <h1 class="bg-lite">Displaying the Patient Details</h1>
            
        <table class="table table-striped table-primary">
            <thead>
            <tr>
                <th>Sl.no</th>
                <th>Doctor reffered</th>
                <th>Patient name</th>
                <th>Gender</th>
                <th>Test name</th>
                <th>Test type id</th>
                <th>Amount</th>
                <th>Patient_ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Date</th>
                <th>Age</th>
                <th>Body Weight</th>
                <th>Email_ID</th>
                <th>Phone_no</th>
                
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
            
            echo $result['Sl_no']." ".$result['Doctor_reffered']." ".$result['Patient_name']." ".$result['Gender']." ".$result['Test_name']."  ".$result['Test_type_id']." ".$result['Amount']." ".$result['Patient_ID']." ".$result['First_name']." ".$result['Last_name']." ".$result['Date']." ".$result['Age']." ".$result['weight']." ".$result['Email_ID']." ".$result['Phone_no'];        
            
        
    
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
                        <td>".$result['Amount']."</td>
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
        
        <div class="container mt-3" >

<div class="row">

<div class="col-md-8 " id="asdf">
    <div id="hd"  class="jumbotron"><h4>The Report will be generated within next 12 hours, Please Be Patient till the report is uploaded.</h4><hr><h5>You can view your report through our website after login</h5></div> 
    <br/><br/> 
    
    </div>
    
<div class="col-md-3" id="asdf"><button type="submit" class="btn btn-info btn-sm btn-block" id="btt" name="submit"><a href="labtest1.html"><h4>Fill New Form</h4></a></button>
    <button type="submit" class="btn btn-info btn-sm btn-block" id="btt" name="submit"><a href="addrepo.html"><h4>Add Report</h4></a></button>
    <button type="submit" class="btn btn-warning btn-sm btn-block" id="btt" name="submit"><a href="index.html"><h4>Logout</h4></a></button></div>
<div class="col-md-3 " id="asdf"><br>
</div>
    </div>

</div>
    </body>
</html>

