
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>
    <!-- <link rel="stylesheet" href="style5.css"> -->
    <style>
        table{
            border-collapse: collapse;
            /* background: #0a59e2; */
            width: 100%;
            color: black;
            font-family: monospace;
            font-size: 16px;
            text-align: center;
        }
        th{
            background: black;
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
        <h1 class="text-warning text-center">Patient Records</h1>
        <table class="table table-striped table-hover table-bordered">
            <!-- <form action="connection2.php" method="POST"> -->
            <form>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Gender</th>
                    <!-- <th>D.O.B</th> -->
                    <th>Address</th>
                    <th>Blood Group</th>
                    <th>Mobile No.</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Update</th>
                    <th>Delete</th>
                   
                </tr>
        

        <?php
      


      include 'database.php';
    
    
      $q = "select * from emp1";

      $query = mysqli_query($con,$q);

      while($res = mysqli_fetch_array($query)){


        ?>

                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['firstname']; ?></td>
                    <td><?php echo $res['lastname']; ?></td>
                    <td><?php echo $res['Email']; ?></td>
                    <td><?php echo $res['gender']; ?></td>
                    <!-- <td><?php echo $res['date']; ?></td> -->
                    <td><?php echo $res['Address']; ?></td>
                    <td><?php echo $res['BloodGroup']; ?></td>
                    <td><?php echo $res['Mobile']; ?></td>
                    <td><?php echo $res['State']; ?></td>
                    <td><?php echo $res['city']; ?></td>
                    <td><button class="btn-primary btn"><a href="Pdetailupdate.php?id=<?php echo $res['id']; ?>" class="text-white"> Update</a></button></td>
                    <td><button class="btn-danger btn"><a href="Pdetaildelete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete</a></button></td>
                    

                </tr>
            <?php
                }
            ?>
        </form>
        </table>

</body>
</html>