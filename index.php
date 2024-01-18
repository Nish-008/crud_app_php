<!DOCTYPE html>
<html lang="en" class="index-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
<header>Login </header>
<form action="" method="post">
    <div class="field input">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div class="field input">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required>
    </div>
    <div class="field">
        <input type="submit" class="btn" name="usubmit" value="LOGIN" required>
    </div>
    <div class="links">
        Don't have account? <a href="register.php">Sign Up Now</a>
    </div>
</form>
        </div>
    </div>
</body>
</html>