<?php
header('Content-Type: application/json; charset=utf-8');

include "connect.php";

if (!$_POST) {
    $_POST = json_decode(file_get_contents('php://input'), true);
}


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $fetch = mysqli_fetch_assoc($result);
    $data = [
        'id' => $fetch['id'],
        'nama' => $fetch['username'],

    ];

    http_response_code(200);
    echo json_encode($data);
} else {
    http_response_code(401);
    echo json_encode('Data tidak ditemukan');
}
