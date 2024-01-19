<?php

define("HOSTNAME", "localhost:3307");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE1", "crud_op");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE1);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} 
// else {
//     echo "Connected successfully!";
// }

?>
