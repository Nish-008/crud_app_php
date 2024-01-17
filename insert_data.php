<?php 
if(isset($_POST['add_student'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];

    if($name == "" || empty($name)){
        header('location:index.php?message=You need to fill in the name!');
    }
}
?>