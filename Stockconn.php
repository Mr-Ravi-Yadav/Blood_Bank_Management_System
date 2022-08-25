<?php

if(isset($_POST['submit'])){
    $BloodGroup = $_POST['BloodGroup'];
    $Stock = $_POST['Stock'];

    $con = new mysqli('localhost','root','','mydb');
    if($con->connect_error){
        die('Conncetion Failed :'.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into Stock(BloodGroup, Stock)
            values(?, ?)");
        
        $stmt->bind_param("si",$BloodGroup, $Stock);
        $stmt->execute();

        if($stmt){
            ?>
            <script>
                alert("Stock Updated Sucessfully...");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Something wrong");
            </script>
            <?php
        }
        $stmt->close();
        $con->close(); 
    }
}

?>