<?php include('dbcon.php');?>
<?php 
if(isset($_POST['add_student'])){
    
    $name = $_POST['name'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];

    if($name == "" || empty($name)){
        header('location:index.php?message=You need to fill in the name!');
    }
    else {
        $query = "insert into `students`(`Name`,`Location`,`Contact`) values('$name','$location','$contact')";
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed!".mysqli_error($connection));
    }
    else{
        header('location:home.php?insert_msg= Your data has been added successfully!');
    }

    }

}
?>