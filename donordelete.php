<?php

include 'database.php';

$id = $_GET['id'];

$q = " delete from request where id = $id ";

mysqli_query($con,$q);

header('location:donorrecord.php');
?>