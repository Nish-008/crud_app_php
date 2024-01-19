<?php include('dbcon.php');?>
<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en" class="index-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
            
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($connection,$_POST['email']);
                $password = mysqli_real_escape_string($connection,$_POST['password']);
           
                $result = mysqli_query($connection,"SELECT * FROM users WHERE Email= '$email' AND Password='$password'") or die("Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = 'true';
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['f_name'] = $row['Fullname'];
                    $_SESSION['id'] = $row['ID'];
                } else {
                    echo "<div class='message'>
                            <p>Wrong username or password</p>
                          </div><br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
                if (isset($_SESSION['valid'])) {
                    header('location: home.php');
                }                
           
            } else{
            
            
            ?>
<header>Login </header>
<form action="" method="post">
    <div class="field input">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
    </div>
    <div class="field input">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required>
    </div>
    <div class="field">
        <input type="submit" class="btn" name="submit" value="LOGIN" required>
    </div>
    <div class="links">
        Don't have account? <a href="register.php">Sign Up Now</a>
    </div>
</form>
        </div>
        <?php } ?>
    </div>
</body>
</html>