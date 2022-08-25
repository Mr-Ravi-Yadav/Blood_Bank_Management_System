<?php

$con = new mysqli('localhost','root','','mydb');
mysqli_select_db($con,"emp2");

$id = $_GET['id'];

$q = " delete from emp1 where id = $id ";

mysqli_query($con,$q);

header('location:pdetail.php');




?>