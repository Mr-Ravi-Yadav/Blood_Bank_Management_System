
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
    <?php include 'Admin.html' ?>
    <!-- <div class="container"> -->
        <h1 class="text-warning text-center">Donation </h1>
        <table class="table table-striped table-hover table-bordered">
            <!-- <form action="connection2.php" method="POST"> -->
                <tr>
                    <th>ID</th>
                    <th>Age</th>
                    <th>Disease</th>
                    <th>Blood Group</th>
                    <th>Unit</th>
                    <th>Status</th>
                   
                </tr>

        <?php


                $con = new mysqli('localhost','root','','mydb');
                mysqli_select_db($con,"donateblood");
    
    
                $q = "select * from donateblood where Status = 'Pending'";

                $query = mysqli_query($con,$q);
                

                while($res = mysqli_fetch_array($query)){

        ?>

                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['age']; ?></td>
                    <td><?php echo $res['Disease']; ?></td>
                    <td><?php echo $res['BloodGroup']; ?></td>
                    <td><?php echo $res['unit']; ?></td>
                    <td><button class="btn-success btn"><a href="approve.php?id=<?php echo $res['id']; ?>" class="text-white">Approve</a></button>
                    <button class="btn-danger btn"><a href="reject.php?id=<?php echo $res['id']; ?>" class="text-white"> Reject</a></button></td>

                </tr>
            <?php
                }

            ?>
        <!-- </form> -->
        </table>

</body>
</html>