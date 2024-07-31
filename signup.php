<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="container">
    <h2 class="glow-text">Sign Up</h2>
    <form action="signup_back.php" method="post">

        <input type="text" name="fullname"
                            placeholder="Full Name" class="input" id="input1" required>
                        <input type="text" name="address"
                            placeholder="Land Address" class="input" id="input2" required>
                        <input type="text" name="State" placeholder="State"
                            class="input" id="input3" required>
                        <input type="text" name="dist" placeholder="Destrict"
                            class="input" id="input4" required>
                        <input type="text" name="acr"
                            placeholder="Area of land in squar meter"
                            class="input" id="input5" required><br><br>
                        <input type="text" name="cont"
                            placeholder="Contact"
                            class="input" id="input6" required><br><br>
                        <input type="password" name="pass"
                            placeholder="Enter password"
                            class="input" id="input7" required><br><br>
                        <select id="type" name="type" class="select" required>
                            <option value="volvo">Choose the login type</option>
                            <option value="Admin">Admin</option>
                            <option value="Farmer">farmer</option>
                            <option value="Service Provider">Service Provider</option>
                        </select><br><br>
                        <input type="submit" value="Sign Up"> 
                        <div class="para">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>

    </form>
</div>
</body>
</html>
