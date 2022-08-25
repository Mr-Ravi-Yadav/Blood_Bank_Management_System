<?php

session_start();
header("location:Patient.html");
if(isset($_POST['submit'])){

    $user = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli('localhost','root','','mydb');
    if($con->connect_error){
        die('Conncetion Failed :'.$con->connect_error);
    }else{
        $SQLQuery = "SELECT * FROM log1 WHERE username = :username";
        $statement = $con->prepare($SQLQuery);
        $statement->execute(array(':username' => $log1));

        while($row = $statement->fetch()){
            $id = $row['id'];
            $password = $row['password'];
            $username = $row['username'];

            if(password_verify($password)){

                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                

            }else{
                echo "Error: Invalid username or password";
            }


        }
    }


}
?>