<?php include('header.php');?>
<?php include('dbcon.php');?>
<?php 

if(isset($_GET['ID'])){
    $id = $_GET['ID'];

    $query = "select * from `students` where `ID`='$id'";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("query Failed".mysqli_error());
    }

    else {
       $row = mysqli_fetch_row($result);

       print_r($row);
} }

?>
<form action="">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" class="form-control">
</div>
<div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" name="contact" class="form-control">
</div>
</form>

<?php include('footer.php');?>