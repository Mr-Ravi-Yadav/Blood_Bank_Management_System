<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Stock</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: monospace;
            font-size: 20px;
            text-align: center;
        }
        .ravi{
            background-color:green;
        }
        th{
            background: red;
            color: #fff;
        }
        .text-white{
            color: #fff;
        }
        .veer{
            text-align:right;
            padding: 0px 10px 2px 10px;
        }

    </style>
</head>
<body>
<?php include 'Admin.html' ?>
        <h1 class="text-warning text-center">Blood Stock</h1>
        <div class="veer"><button class="btn-success btn"><a href="pdf.php" class="text-white">Generate Report</a></button></div>
        <form action="" method="POST">
        <table class="table table-striped table-hover table-bordered">

        <tr>
            <th>Blood Group</th>
            <th>Units</th>
        </tr>
    <?php

        $con = new mysqli('localhost','root','','mydb');
                mysqli_select_db($con,"stock");
    
    
                $q = "select * from stock";

                $query = mysqli_query($con,$q);
                

                while($res = mysqli_fetch_array($query)){
                                  
    ?>
                <tr class="text-center">
                    <td><?php echo $res['BloodGroup']; ?></td>
                    <td><?php echo $res['units']; ?></td>
                    
                    </tr>
            <?php
                }

            ?>
</table>
</form>
</body>
</html>