<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/forgotbtn.css">
</head>
<body>
    <center>
    <div class="forgot_container">
    <form id ="upd" action="forgotbtn_update.php" method="POST">
        <h2 class="text-glow">Forgot password</h2>
        <p>Enter your new password below</p>
        <input type="text" name="name" id="name" value="" placeholder="Enter name" required><br/><br/>
        <input type="password" name="pass" id="pass" value="" placeholder="Enter new password" required><br/><br/>
        <input type="submit" value="Submit">
        <a href="login.php" class="center-button no-underline">
            <button type="button">Back to login</button>
        </a>
    </form>
    </div>
    </center>
</body>
</html>