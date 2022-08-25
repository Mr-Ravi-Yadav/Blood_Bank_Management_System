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
<!-- 
<script>
        function Project()
        {
            var age = document.getElementById('age').value;
            if(age == ""){
                document.getElementById('a').innerHTML="Enter your age ";
                return false;
                }
            if(isNan(age)){
                document.getElementById('a').innerHTML="Enter Only Numeric Value ";
                return false;
                }
        }
</script> -->

    <div class="container">
        <h1><u>DONATE BLOOD</u></h1>
        <form action="pdf.php" method="POST">
            <label for="age"><b>Age</b></label>
            <input type="text" id="age" name="age" class="input-box" placeholder="" required>
            <!-- <span id="a"></span><br><br> -->
            <label for="Disease"><b>Disease</b></label>
            <input type="text" id="Disease" name="Disease" class="input-box" placeholder="" required><br><br>
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
            <input type="submit" id="btn" value="Donate" name="submit">
        </form>

    </div>

    
</body>

</html>
