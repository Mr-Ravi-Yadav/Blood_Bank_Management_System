<?php
 include 'database.php';
//  $id = $_GET['id'];
//  $showrecord = "SELECT * FROM emp1 where id=$id";
//  $showdata = mysqli_query($con,$showrecord);
//  $arrrecord = mysqli_fetch_array($showdata);



if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $Address = $_POST['Address'];
    $BloodGroup = $_POST['BloodGroup'];
    $Mobile = $_POST['Mobile'];
    $State = $_POST['State'];
    $city = $_POST['city'];

    $q = "UPDATE emp1 SET id=$id, firstname='$firstname',lastname='$lastname',Email='$Email',gender='$gender',date=$date,Address='$Address',BloodGroup='$BloodGroup',Mobile=$Mobile,
    State='$State',city='$city' where id=$id";

    $res = mysqli_query($con,$q);


    if($res){
        echo "Record Updated Successfully";
        
    }else{
        echo "Record Not Updated Successfully";
    }

}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Update record</title>
    <link rel="stylesheet" href="style3.css">
    <style>
        .container{
            background-color:#A52A2A;
        }
        .container h1{
            color: #120314;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1><u>DONOR DETAIL</u></h1>
        <form action="" method="POST">
            <label for="firstname"><b>First Name</b></label>
            <input type="text"  id="firstname" name="firstname"  max="10" min="3" class="input-box"   required><br><br>
            <label for="lastname"><b>Last Name</b></label>
            <input type="text" id="lastname" name="lastname" max="10" min="4" class="input-box"   required><br><br>
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" name="Email" class="input-box"  required><br><br>


            <label for="gender"><b>Gender:</b></label>
            <input type="radio" name="gender" value="male"  required>Male
            <input type="radio" name="gender" value="female"  required>Female
            <input type="radio" name="gender" value="other"  required>Other<br><br>
            <label for="fname"><b>Date Of Birth :</b></label>
            <input type="date" name="date"  max="2021-12-31" min="2000-01-01"  required><br><br>
            <label for="Address"><b>Address:</b></label><br>
            <textarea id="Address" name="Address" class="input-box"  
                style="height:70px"  required></textarea><br><br>
            <label for="Blood Group"><b>Blood Group</b></label>
            <select id="Blood Group" name="BloodGroup"  required class="input-box">
                <option value="<?php echo $arrrecord['BloodGroup']; ?>"><b>A+</b></option>
                <option value="A-"><b>A-</b></option>
                <option value="<?php echo $arrrecord['BloodGroup']; ?>"><b>B+</b></option>
                <option value="B+"><b>B-</b></option>
                <option value="AB+"><b>AB+</b></option>
                <option value="AB-"><b>AB-</b></option>
                <option value="O+"><b>O+</b></option>
                <option value="O-"><b>O-</b></option>
            </select><br><br>
            <label for="Mobile No"><b>Mobile No</b></label>
            <input type="text" id="Mobile" name="Mobile" class="input-box"   required><br><br>
            <label for="State"><b>State</b></label>
            <input type="text" id="State" name="State" class="input-box"  required><br><br>
            <label for="city"><b>City</b></label>
            <input type="text" id="city" name="city" class="input-box"  required><br><br>
            <input type="submit" value="Update" name="submit">
        </form>

    </div>

    
</body>

</html>