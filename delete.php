<?php include('dbcon.php');?>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "delete from `students` where `ID`='$id'";

$result = mysqli_query($connection,$query);

if(!$result){
    die("query Failed".mysqli_error($connection));
}
else{
    header('location:home.php?delete_msg=You have deleted the record successfully!');
}
?>