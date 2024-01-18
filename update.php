<?php include('header.php');?>
<?php include('dbcon.php');?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "select * from `students` where `ID`='$id'";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("query Failed".mysqli_error($connection));
    }

    else {
       $row = mysqli_fetch_assoc($result);

    //    print_r($row);
} }

?>

<?php 

if(isset($_POST['update_student'])){

    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }

    $name = $_POST['name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];

    $query = "update `students` set `Name`= '$name',`Location`='$location',`Contact`='$contact' where `ID`='$idnew'";
    
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("query Failed".mysqli_error($connection));
    }
    else{
        header('location:home.php?update_msg=You have updated the info successfully!');
    }
}

?>

<form action="update.php?id_new=<?php echo $id; ?>" method="post">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $row['Name']?>">
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" class="form-control" value="<?php echo $row['Location']?>">
</div>
<div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" name="contact" class="form-control" value="<?php echo $row['Contact']?>">
</div>

<input type="submit" class="btn btn-success" name="update_student" value="UPDATE">
</form>

<?php include('footer.php');?>