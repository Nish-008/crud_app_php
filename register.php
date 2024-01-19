<?php include('dbcon.php');?>
<!DOCTYPE html>
<html lang="en" class="register-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .register-page .message{
    text-align: center;
    background: #f9eded;
    padding: 15px 0px;
    border: 1px solid #696969;
    border-radius: 5px;
    margin-bottom: 10px;
    color: red;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $f_name = $_POST['f_name'];
    $password = $_POST['password'];


    $verify_query = mysqli_query($connection, "SELECT Email FROM users WHERE Email = '$email'");
    
    if(mysqli_num_rows($verify_query) != 0){
        echo "<div class='message'>
            <p>This email is already in use. Please choose another one.</p>
        </div><br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
    } else {
        mysqli_query($connection, "INSERT INTO users (Username, Email, Fullname, Password) VALUES ('$username', '$email', '$f_name', '$password')") or die("Error Occurred");
        
        echo "<div class='message'>
        <p>You have successfully Registered!</p>
    </div><br>";
    echo "<a href='index.php'><button class='btn'>Login Now</button></a>";

    }

} else{
?>

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
        <?php } ?>
    </div>
</body>
</html>