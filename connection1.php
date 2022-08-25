<?php
    
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];
    // $date = $_POST['date'];
    $Address = $_POST['Address'];
    $BloodGroup = $_POST['BloodGroup'];
    $Mobile = $_POST['Mobile'];
    $State = $_POST['State'];
    $city = $_POST['city'];
    // echo  "$date";

    $con = new mysqli('localhost','root','','mydb');
    if($con->connect_error){
        die('Conncetion Failed :'.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into emp2(firstname, lastname, Email, gender, date, Address, BloodGroup, Mobile, State, city)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $stmt->bind_param("ssssississ",$firstname, $lastname, $Email, $gender, $date, $Address, $BloodGroup, $Mobile, $State, $city);
        $stmt->execute();
        
        // $res = mysqli_query($con,$stmt);
        if($stmt){
            ?>
            <script>
                alert("Donor Detail Recorded Sucessfully...");
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