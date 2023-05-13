<?php 
 
include "connect.php";


if (!$_POST) {
    $_POST = json_decode(file_get_contents('php://input'), true);
}

    $email = $_POST['email'];
    $password =$_POST['password'];
    
 
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $test = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $test['email'];
        $_SESSION['id'] = $test['id'];
        $data = [
            'id'=>$test['id'],
            'nama'=>$test['username'],
            'email'=>$test['email'],
            'date'=>$test['date_register'],
                     
        ];
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        

    }else{
        http_response_code(401);
    }



?>