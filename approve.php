<?php
$con = new mysqli('localhost','root','','mydb');
mysqli_select_db($con,"donateblood");
  
$id = $_GET['id'];
$q = "SELECT count(*) from donateblood where id = '$id'";
$result = $con->query($q);
if($result->num_rows>0){

    $query = "Update  donateblood set Status = 'Approve'  where id = '$id'";

    $res = mysqli_query($con,$query);
    if($res){
        $q2 = "SELECT BloodGroup,unit from donateblood where id = '$id' ";
        $query1 = mysqli_query($con,$q2);
        while( $res= mysqli_fetch_array($query1)){
            $BloodGroup = $res['BloodGroup'];
            $unit = $res['unit'];
        }
        $q = "UPDATE `stock` SET `units`=units + '$unit' WHERE BloodGroup='$BloodGroup'";
        mysqli_query($con,$q);
        ?>
        <script>
            alert("your id has been approved");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Something wrong");
        </script>
        <?php
    }
    // if($res){
    //     echo "your id number $id has been approved";
    // }else{
    //     echo "Something Wrong";

    // }


    $con->query($query);
    // header('location: donationhistory.php');


    
}


?>