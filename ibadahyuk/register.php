
<?php



include "connect.php";
header('Content-Type: application/json; charset=utf-8');
if (!$_POST) {
    $_POST = json_decode(file_get_contents('php://input'), true);
}else{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
}

$cek = mysqli_query($conn,"INSERT INTO user(username,password,email)values('$username','$password','$email')");
if ($cek){
    
    echo json_encode("berhasil");
}else{
    http_response_code(401);
}

?>
