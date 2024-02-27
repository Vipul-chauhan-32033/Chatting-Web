<?php
$conn = mysqli_connect("localhost", "root", "","ChatApp");

if(!$conn){
    die("Database not connected".mysqli_connect_error());
}
// else{
//     echo "Database connected successfully";
// }


?>