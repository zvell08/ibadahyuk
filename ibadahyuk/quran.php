
<?php
include "connect.php";
header('Content-Type: application/json; charset=utf-8');
$sql = "SELECT * FROM halaman GROUP BY juz";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
    
echo json_encode($data);

?>


