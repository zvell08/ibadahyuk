<?php


include "connect.php";
header('Content-Type: application/json; charset=utf-8');
$id = rand(1,6);
$sql = "SELECT * FROM ayat_top WHERE id=$id";
$result = $conn->query($sql);


$data = $result->fetch_assoc();
echo json_encode($data);

?>