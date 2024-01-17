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
</tr>
                <?php
               }
            }

            ?>
        </tbody>
    </table>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>
</body>
</html>
  
