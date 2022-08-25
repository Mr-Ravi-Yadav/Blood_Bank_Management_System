<!DOCTYPE html>
<html>

<head>
    <title>Blood Donation</title>>
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <div class="container">
        <h1><u>Donor Login</u></h1><br>
        <form action="donorcon.php" method="POST">
            <!-- <div class="open">please fill the text</div> -->
            <label for="Username"><b>Username:</b></label>
            <input type="username" class="input-box" name="username" placeholder="Your username" required><br><br>
            <label for="Email"><b>Password</b></label>
            <input type="Password" class="input-box" name="password" placeholder="Password" required><br><br>
            <button type="submit" name="submit" class="sign-btn">Login</button>
            <p>Don't have account  <a href="Sign-in.php">Sign in</a> here</p>
        </form>


    </div>
</body>
</html>