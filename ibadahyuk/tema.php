<?php
include "connect.php";

$sql = "SELECT * FROM tema";
$result = $conn->query($sql);

$data =[];
while ($row = $result->fetch_assoc()) {
    $data[] = $row; 
}
echo json_encode($data)
?>