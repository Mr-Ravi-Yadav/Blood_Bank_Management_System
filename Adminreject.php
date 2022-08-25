<?php
$con = new mysqli('localhost','root','','mydb');
mysqli_select_db($con,"Prequest");
  
$id = $_GET['id'];
$q = "SELECT count(*) from Prequest where id = '$id'";

$result = $con->query($q);


if($result->num_rows>0){

    $query = "Update  Prequest set Status = 'Reject' where id = '$id'";
    $res = mysqli_query($con,$query);
    if($res){
        ?>
        <script>
            alert("your id has been Rejected");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Something wrong");
        </script>
        <?php
    }

    $con->query($query);
}


?>