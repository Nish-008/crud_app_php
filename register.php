<!DOCTYPE html>
<html lang="en" class="register-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
<header>Sign Up</header>
<form action="" method="post">
    <div class="field input">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" autocomplete="off" required>
    </div>
    <div class="field input">
        <label for="username">Email</label>
        <input type="text" name="email" id="email" autocomplete="off" required>
    </div>
    <div class="field input">
        <label for="username">Full Name</label>
        <input type="text" name="f_name" id="f_name" autocomplete="off" required>
    </div>
    <div class="field input">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" autocomplete="off" required>
    </div>
    <div class="field">
        <input type="submit" class="btn" name="submit" value="REGISTER" required>
    </div>
    <div class="links">
        Already a user? <a href="index.php">Sign In</a>
    </div>
</form>
        </div>
    </div>
</body>
</html>