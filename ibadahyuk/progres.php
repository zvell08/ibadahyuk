
<?php
header('Content-Type: application/json; charset=utf-8');
include "connect.php";

if(!$_POST){
    $_POST = json_decode(file_get_contents('php://input'),true);
}

$hafalan = $_POST['hafalan'];
$tilawah = $_POST['tilawah'];
$juz_t = $_POST['juz_tilawah'];
$juz_h = $_POST['juz_hafalan'];

$cek = mysqli_query($conn,"INSERT INTO progres(hafalan,hafalan_juz,tilawah,tilawah_juz)values('$hafalan','$tilawah','$juz_t','$juz_h')");
if ($cek){
    http_response_code(200);
}else{
    http_response_code(401);
}

?>
