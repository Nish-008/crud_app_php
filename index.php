<?php include('header.php');?>
<?php include('dbcon.php');?>
<h2> ALL STUDENTS </h2>
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
    <?php include('footer.php');?>
