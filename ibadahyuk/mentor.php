<?php 
 
include "connect.php";

    $id = $_POST['id'];
 
    $sql = "SELECT * FROM mentor WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $test = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $test['id'];
        // $data = [
        //     'id'=>$test['id'],
        //     'nama'=>$test['username'],
                     
        // ];
        echo json_encode($test);

    } else {
        http_response_code(500);
    }



?>