<?php include('header.php');?>
<?php include('dbcon.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box1">
<h2> ALL STUDENTS </h2>
<button class= "btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD STUDENT</button>
</div>
   <table class="table table-hover table-bordered table striped">
        <thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Location</th>
    <th>Contact</th>
    <th>Update</th>
    <th>Delete</th>

</tr>        </thead>
        <tbody>
            <?php 
            
            $query = "select * from `students`";

            $result = mysqli_query($connection,$query);

            if(!$result){
                die("query Failed".mysqli_error());
            }

            else {
               while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
    <td> <?php echo $row['ID'];?> </td>
    <td> <?php echo $row['Name'];?> </td>
    <td> <?php echo $row['Location'];?> </td>
    <td> <?php echo $row['Contact'];?> </td>
    <td> <a href="update.php?id=<?php echo $row['ID'];?>" class="btn btn-success">Update</a></td>
    <td> <a href="delete.php?id=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a> </td>
</tr>
                <?php
               }
            }

            ?>
        </tbody>
    </table>
    <?php 
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
    
    ?>

<?php 
    if(isset($_GET['insert_msg'])){
        echo "<h6>".$_GET['insert_msg']."</h6>";
    }
    
    ?> 

    <form action="insert_data.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_student" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
<?php include('footer.php');?>
</body>
</html>
  
