<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en" class="edit-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;

}
body {
    background: #e4e9f7;
}
.container {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    min-height: 90vh;
    margin-top: 20px;
}

.box{
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);

}

.form-box{
    width:  450px;
    margin: 0px 10px;
}

.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}
.edit-page .form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
}

.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}
.btn{
    height: 35px;
    background: rgba(76,68,182,0.808);
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin-top: 10px;
    padding: 0px 10px;
}
.btn:hover{
    opacity: 0.82;
}
.submit{
    width: 100%;
}

.message{
    text-align: center;
    background: #f9eded;
    padding: 15px 0px;
    border: 1px solid #696969;
    border-radius: 5px;
    margin-bottom: 10px;
    color: green;
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
                
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($connection,"UPDATE users SET Username='$username', Email='$email',Fullname='$f_name'WHERE ID='$id'") or die("error occured");
            if($edit_query){
                echo "<div class='message'>
                <p>Profile Updated!</p>
            </div><br>";
            echo "<a href='home.php'><button class='btn'>Go To Homepage</button></a>";
        
            }
            } else{

                $id = $_SESSION['id'];
                $query = mysqli_query($connection,"SELECT * FROM users WHERE ID='$id'");
              while($result=mysqli_fetch_assoc($query)){
                $res_uname = $result['Username'];
                $res_email = $result['Email'];
                $res_fname = $result['Fullname'];
              }
            ?>
<header>Edit Profile Info</header>
<form action="" method="post">
    <div class="field input">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $res_uname; ?>" autocomplete="off" required>
    </div>
    <div class="field input">
        <label for="username">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $res_email; ?>" autocomplete="off" required>
    </div>
    <div class="field input">
        <label for="username">Full Name</label>
        <input type="text" name="f_name" id="f_name" value="<?php echo $res_fname; ?>" autocomplete="off" required>
    </div>
    <div class="field">
        <input type="submit" class="btn" name="submit" value="UPDATE" required>
    </div>
</form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
<?php include('footer.php');?>