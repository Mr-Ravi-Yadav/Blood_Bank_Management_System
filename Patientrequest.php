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
<?php include 'Patient.html' ?>
<!-- <script>
        function Project()
        {
            var force = /^[A-Za-z]+$/; 
            var patientname = document.getElementById('patientname').value;
            if(patientname == ""){
                document.getElementById('first').innerHTML="Please write your firstname";
                return false;
                }
            if(firstname.length<3){
                document.getElementById('first').innerHTML="firstname must be 3 char";
                return false;
                }
            if(firstname.length>10){
                document.getElementById('first').innerHTML="firstname less than 10 char";
                return false;
                }
            if(patientname.match(force))
                true;
                else{
                    document.getElementById('first').innerHTML="only alphabets are allowed";
                    return false;
                    }
        }
    </script> -->


    <div class="container">
        <h1><u>BLOOD REQUEST</u></h1>
        <form action="patientrequestconnection.php" method="POST" onsubmit="return Project()">
            <label for="patientname"><b>Patient Name</b></label>
            <input type="text" id="patientname" name="patientname" class="input-box" placeholder="" required><br><br>
            <span id="first"></span>
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
            <input type="submit" id="btn" value="Request" name="submit">
        </form>

    </div>

    
</body>

</html>
