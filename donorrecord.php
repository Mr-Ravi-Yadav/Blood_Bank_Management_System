
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Records</title>
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
            color: #fff;
        }
        /* tr:nth-of-type(even){ */
            /* border-bottom: 1px solid #ddddddd;  */
        /* } */
    </style>
</head>
<body>
    <?php include 'donor.html' ?>
    <!-- <div class="container"> -->
        <h1 class="text-warning text-center">Donor Request</h1>
        <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Patient Age</th>
                    <th>Reason</th>
                    <th>Blood Group</th>
                    <th>Unit of Blood(in ml)</th>
                    <th>Hospital Name</th>
                    <th>Status</th>
                    <!-- <th>Delete</th> -->
                </tr>
        <?php


                include 'database.php';


                $q = "select * from request";

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
                    <td><?php echo $res['Hospital']; ?></td>
                    <td><?php echo $res['Status']; ?></td>
                    <!-- <td><button class="btn-primary btn"><div class="text-white"> Pending...</div></button></td> -->
                    <!-- <td><button class="btn-danger btn"><a href="donordelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a></button></td> -->

                </tr>
            <?php
                }

            ?>


                
        </table>
</body>
</html>