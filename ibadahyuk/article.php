
<?php
include "connect.php";

$sql = "SELECT * FROM article";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row; 
}

echo json_encode($data);

?>


