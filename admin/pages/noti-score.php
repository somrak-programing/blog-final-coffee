<?php 
require_once('../../php/connect.php');
header('Content-Type: application/json');
$sql = " SELECT * FROM contacts WHERE status = 'false' ";
$result = $conn->query($sql);
if($result){
    http_response_code(200);
    $response = array('message' => 'OK', 'score' => $result->num_rows);
}else{
    http_response_code(400);
    $response = array('message' => 'ERROR');
}
echo json_encode($response);
?>

