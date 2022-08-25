
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood History</title>
    <!-- <link rel="stylesheet" href="style5.css"> -->
    <style>
        table{
            border-collapse: collapse;
            /* background: #0a59e2; */
            width: 100%;
            color: black;
            font-family: monospace;
            font-size: 20px;
            text-align: center;
        }
        th{
            background: red;
            color: #fff;
        }
        .text-white{
            text-align: center;
            color: #fff;
        }
        /* tr:nth-of-type(even){ */
            /* border-bottom: 1px solid #ddddddd;  */
        /* } */
    </style>
</head>
<body>
    <?php include 'Admin.html' ?>
    <!-- <div class="container"> -->
        <h1 class="text-warning text-center">Blood History</h1>
        <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Patient Age</th>
                    <th>Reason</th>
                    <th>Blood Group</th>
                    <th>Unit of Blood<br>(in ml)</th>
                    <!-- <th>Hospital Name</th> -->
                    <th>Status</th>
                    <th>Blood Stock</th>

                </tr>
            

        <?php
                $con = new mysqli('localhost','root','','mydb');
                mysqli_select_db($con,"Prequest");


                $q = "select * from Prequest";

                $query = mysqli_query($con,$q);

                while($res = mysqli_fetch_array($query)){



                ?>

                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['patientname']; ?></td>
                    <td><?php echo $res['age']; ?></td>
                    <td><?php echo $res['Reason']; ?></td>
                    <td><?php echo $res['BloodGroup']; ?></td>
                    <td><?php echo $res['unit']; ?></td>
                    <!-- <td><?php echo $res['Hospital']; ?></td> -->
                    <td><?php echo $res['Status']; ?></td>
                    <td><?php
                    if($res['Status']=="Approve"){
                        $r = $res['unit'];
                        echo "<span style=color:red;> $r Unit Deducted</span>";
                    }
                    if($res['Status']=="Reject"){
                        echo '<span style="color:red;"> 0 unit Deducted</span>';
                    }  ?></td>
 
                    <!-- <td><button class="btn-success btn"><a href="approve.php?id=<?php echo $res['id']; ?>" class="text-white"> Approve</a></button> -->
                    <!-- <button class="btn-danger btn"><a href="reject.php?id=<?php echo $res['id']; ?>" class="text-white"> Reject</a></button></td> -->

                </tr>
             <?php 
                }
 
            ?>

        </table>
</body>
</html>