<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient detail</title>
    <link rel="stylesheet" href="style3.css">
    <style>
        .container{
            background-color:#A52A2A;
        }
        .container h1{
            color: #120314;
            margin-bottom: 30px;
        }
        span{
            color: red;
            font-size: 18px;
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
    <?php include 'Patient.html'?> 
    <script>
        function Project()
        {
            var force = /^[A-Za-z]+$/;
            var firstname = document.getElementById('firstname').value;
            if(firstname == ""){
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
            if(firstname.match(force))
                true;
                else{
                    document.getElementById('first').innerHTML="only alphabets are allowed";
                    return false;
                    }
            var lastname = document.getElementById('lastname').value;
            if(lastname == ""){
                document.getElementById('last').innerHTML="Please write your lastname";
                return false;
                }
                if(lastname.length<3){
                document.getElementById('last').innerHTML="lastname must be 3 char";
                return false;
                }
            if(lastname.length>10){
                document.getElementById('last').innerHTML="lastname less than 10 char";
                return false;
                }
            if(lastname.match(force))
                true;
                else{
                    document.getElementById('last').innerHTML="only alphabets are allowed";
                    return false;
                    }
            var email = document.getElementById('email').value;
            if(email == ""){
                document.getElementById('emaill').innerHTML="Please write your Email";
                return false;
                }
            var Mobile = document.getElementById('Mobile').value;
            if(isNan(Mobile)){
                document.getElementById('Mob').innerHTML="Enter Only Numeric Value ";
                return false;
                }
            // var gender = document.getElementById('gender').value;
            // if(gender == ""){
            //     document.getElementById('gen').innerHTML="Please Select One Option";
            //     return false;
            //     }
            // var date = document.getElementById('date').value;
            // if(date == ""){
            //     document.getElementById('dat').innerHTML="Enter Your Birth Date ";
            //     return false;
            //     }
            // var Address = document.getElementById('Address').value;
            // if(Address == ""){
            //     document.getElementById('Add').innerHTML="Fill Your Address ";
            //     return false;
            //     }
            // var Blood Group = document.getElementById('Blood Group').value;
            // if(Blood Group == ""){
            //     document.getElementById('blood').innerHTML="Select Your Blood Group ";
            //     return false;
            //     }
            // var Mobile = document.getElementById('Mobile').value;
            // if(Mobile == ""){
            //     document.getElementById('Mob').innerHTML="Enter Mobile No ";
            //     return false;
            //     }
            // if(isNan(Mobile)){
            //     document.getElementById('Mob').innerHTML="Enter Only Numeric Value ";
            //     return false;
            //     }
            // if(Mobile.length<10){
            //     document.getElementById('Mob').innerHTML="Mobile No. must be 10 digit";
            //     return false;
            //     }
            // if(Mobile.length<10){
            //     document.getElementById('Mob').innerHTML="Mobile No. must be 10 digit ";
            //     return false;
            //     }
            // if(Mobile.charAt(0)!=9) && (Mobile.charAt(0)!=9) && (Mobile.charAt(0)!=9) &&{
            //     document.getElementById('Mob').innerHTML="Mobile No. must start with 9, 8, 7 ";
            //     return false;
            //     }
            // var State = document.getElementById('State').value;
            // if(State == ""){
            //     document.getElementById('Stat').innerHTML="Please write your State ";
            //     return false;
            //     }
            // var city = document.getElementById('city').value;
            // if(city == ""){
            //     document.getElementById('cit').innerHTML="Please write your city";
            //     return false;
            //     }
        }
    </script>

    <div class="container">
        <h1><u>PATIENT DETAIL</u></h1>
        <form action="patientdetailconn.php" method="POST" onsubmit="return Project()">
            <label for="firstname"><b>First Name</b></label>
            <input type="text" id="firstname" value="" name="firstname" max="10" min="3" class="input-box" placeholder="Your first name..">
            <span id="first"></span><br><br>
            <label for="lastname"><b>Last Name</b></label>
            <input type="text" id="lastname" value="" name="lastname" max="10" min="4" class="input-box" placeholder="Your last name..">
            <span id="last"></span><br><br>
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" value="" name="Email" class="input-box" placeholder="Email">
            <span id="emaill"></span><br><br>


            <label for="gender" id="gender"><b>Gender:</b></label>
            <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female" required>Female
            <input type="radio" name="gender" value="other" required>Other
            <span id="gen"></span><br><br>
            <label for="Address"><b>Address:</b></label><br>
            <textarea id="Address" name="Address" class="input-box" placeholder="Write Address"
            style="height:70px" required></textarea>
            <span id="Add"></span><br><br>
            <label for="Blood Group"><b>Blood Group</b></label>
                <select id="Blood Group" name="BloodGroup"  class="input-box" required>
                    <option value="A+"><b>A+</b></option>
                    <option value="A-"><b>A-</b></option>
                    <option value="B+"><b>B+</b></option>
                    <option value="B+"><b>B-</b></option>
                    <option value="AB+"><b>AB+</b></option>
                    <option value="AB-"><b>AB-</b></option>
                    <option value="O+"><b>O+</b></option>
                    <option value="O-"><b>O-</b></option>
                </select>
                <span id="blood"></span><br><br>
                <label for="Mobile No"><b>Mobile No</b></label>
                <input type="text" id="Mobile" name="Mobile" class="input-box" placeholder="Enter Mobile" required>
                <span id="Mob"></span><br><br>
                <label for="State"><b>State</b></label>
                <input type="text" id="State" name="State" class="input-box" placeholder="type State" required>
                <span id="Stat"></span><br><br>
                <label for="city"><b>City</b></label>
                <input type="text" id="city" name="city" class="input-box" placeholder="type city" required>
                <span id="cit"></span><br><br>
                <input type="submit" id="btn" value="Submit" name="submit">

        </form>
    </div>


</body>

</html>
