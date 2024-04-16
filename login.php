<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-container">
  <h2 class="glow-text">Login</h2>
  <form action="login_back.php" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="Cont" placeholder="Contact" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">


<a href="forgotbtn.php" class="center-button no-underline">
    <button type="button">Forgot Password</button>
</a>
    
  </form>
</div>

</body>

</body>
</html>
