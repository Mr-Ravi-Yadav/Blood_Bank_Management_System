<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Donor detail</title>
    <link rel="stylesheet" href="style3.css">
    <style>
        .container{
            background-color:#A52A2A;
        }
        .container h1{
            color: #120314;
            margin-bottom: 30px;
        }
        #btn{
            background-color: green;
            color: #fff;
            font-size: 20px;
        }
        #btn:hover{
            background-color: blue;
        }
    </style>
</head>

<body>
<!-- <?php include 'donor.html' ?> -->

    <div class="container">
        <h1><u>BLOOD REQUEST</u></h1>
        <form action="donorrequestconnection.php" method="POST">
            <label for="patientname"><b>Patient Name</b></label>
            <input type="text" id="patientname" name="patientname" class="input-box" placeholder="" required><br><br>
            <label for="age"><b>Patient Age</b></label>
            <input type="text" id="age" name="age" class="input-box" placeholder="" required><br><br>
            <label for="Reason"><b>Reason</b></label>
            <input type="text" id="Reason" name="Reason" class="input-box" placeholder="" required><br><br>

            <label for="Blood Group"><b>Blood Group</b></label>
            <select id="Blood Group" name="BloodGroup" required class="input-box">
                <option><b>Select</b></option>
                <option value="A+"><b>A+</b></option>
                <option value="A-"><b>A-</b></option>
                <option value="B+"><b>B+</b></option>
                <option value="B+"><b>B-</b></option>
                <option value="AB+"><b>AB+</b></option>
                <option value="AB-"><b>AB-</b></option>
                <option value="O+"><b>O+</b></option>
                <option value="O-"><b>O-</b></option>
            </select><br><br>
            <label for="unit"><b>Unit of Blood(in ml)</b></label>
            <input type="text" id="unit" name="unit" class="input-box" placeholder="" required><br><br>
            <label for="Hospital"><b>Hospital Name</b></label>
            <input type="text" id="Hospital" name="Hospital" class="input-box" placeholder="" required><br><br>
            <input type="submit" value="Request" name="submit">
        </form>

    </div>

    
</body>

</html>
