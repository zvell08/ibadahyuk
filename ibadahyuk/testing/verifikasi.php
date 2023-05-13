<?php
include_once "auth/connect.php";
include_once "login2.php";

$email = $_POST['email'];
$password = $_POST['password'];


$login = new login($email,$password);
$login = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $login);
    if ($result->num_rows > 0) {
        $test = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $test['email'];
        $_SESSION['id'] = $test['id'];
        $data = [
        'id' => $test['id'],
        'nama' => $test['username'],
        ];
       

        echo json_encode($data);
        // echo json_encode([
        //     'id'=>$test['id'],
        //     'nama'=>$test['username'],
        // ]);

    } else {

        echo json_encode([
            'id'=>"null",
            'nama'=>"null",
            'id_tujuan'=>"null"

        ]);
    }
?>
