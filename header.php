<?php include('dbcon.php');?>
<?php
session_start();

if (!isset($_SESSION['valid'])) {
    header('location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en" class="header-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>

.header-page .logo{
    font-size: 25px;
    font-weight: 900;
    text-decoration: none;
    color: black;
    margin-right: auto;
}
.header-page .logo a{
    text-decoration: none;
    color: black;
}
.header-page .right-links a{
 padding: 0 10px;
}
</style>
</head>
<body>
<div class="nav">
    <div class="logo">
        <p> <a href="home.php">PHP CRUDE APP</a></p>
    </div>
    <div class="right-links">
        <?php 
        
        $id = $_SESSION['id'];
        $query = mysqli_query($connection,"SELECT * FROM users WHERE ID='$id'");

        while($result = mysqli_fetch_assoc($query)){
            $res_uname = $result['Username'];
            $res_email = $result['Email'];
            $res_fname = $result['Fullname'];
            $res_id = $result['ID'];
        }
        
        echo "<a href='edit.php?ID=$res_id'>Edit Profile</a>";

        ?>
    
        <a href="logout.php"> 
            <button class="btn btn-danger ">Log Out</button>
        </a>
    </div>
</div>
    <div class="container">
       
