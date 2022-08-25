<?php

    $patientname = $_POST['patientname'];
    $age = $_POST['age'];
    $Reason = $_POST['Reason'];
    $BloodGroup = $_POST['BloodGroup'];
    $unit = $_POST['unit'];
    // $Hospital = $_POST['Hospital'];
    $Status = 'Pending';

    $con = new mysqli('localhost','root','','mydb');
    if($con->connect_error){
        die('Conncetion Failed :'.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into Prequest(patientname, age, Reason, BloodGroup, unit, Status)
            values(?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("sissis",$patientname, $age, $Reason, $BloodGroup, $unit, $Status);
        $stmt->execute();
        
        
        header("location:patientrecord.php");
        $stmt->close();
        $con->close(); 
    }

?>