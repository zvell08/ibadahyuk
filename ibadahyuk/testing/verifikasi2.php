<?php
include "auth/connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$register = new register($username,$password,$email);
$cek = mysqli_query($conn,"INSERT INTO user(username,password,email)values('$username','$password','$email')");
if ($cek){
    echo json_encode("berhasil");
}else{
    echo json_encode("gagal");
}


?>
