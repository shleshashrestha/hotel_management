<?php

$email= $_POST['email'];
$password= $_POST['password'];


include 'login_data.php';


$sql="INSERT INTO names(email,password)VALUES('$email','$password')";
$result= mysqli_query($conn, $sql);


if($result){
    header('Laocation: login.php');
}

?>