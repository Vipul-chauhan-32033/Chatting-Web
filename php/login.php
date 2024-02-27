<?php
// echo " Sign up Php Pages";
session_start();
include_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$psw = mysqli_real_escape_string($conn, $_POST['psw']);

// echo "Hello this is login page";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND psw = '{$psw}'");

if( !empty($email) && !empty($psw)){

    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $status = "Active now";
        
        $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
        if($sql2){
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
        }

    }else{
        echo " Email or Password inncorrect";
    }


}
else{
    echo "All input field are required";
}

?>