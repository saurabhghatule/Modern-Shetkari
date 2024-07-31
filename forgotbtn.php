<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="css/forgotbtn.css">
</head>
<body>
    <div class="forgot_container">
        <form id="upd" action="forgotbtn_update.php" method="POST">
            <h2 class="text-glow" style="color: black;">Forgot password</h2>
            <p>Enter your new password below</p>
            <input type="text" name="name" id="name" value="" placeholder="Enter name" required><br/><br/>
            <input type="password" name="pass" id="pass" value="" placeholder="Enter new password" required><br/><br/>
            <input type="submit" value="Submit">
            <div class="center-button">
                <a href="login.php" class="no-underline">
                    <button type="button">Back to login</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>