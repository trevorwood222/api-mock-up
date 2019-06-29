<?php session_start();

require_once("./cors.php");
cors();

$headers = apache_request_headers();

$api_key = $headers['x-api-key'];
if($api_key !== "mistawood"){
	$payload = [
		"response" => "invalid api-key",
	];
	echo json_encode($payload);
	exit();
}

$data = json_decode(file_get_contents('php://input'), true);

echo json_encode($data);

// echo json_encode($_REQUEST);
// echo json_encode($_POST);
// echo 'mkay';

// $payload = [
// 	"variableOne" => $_POST['variableOne'],
// 	"variableTwo" => $_POST['variableOne'],
// 	"api_key" => $api_key,
// 	"Peter" => "35",
// 	"Ben" => "37",
// 	"Joe" => "43",
// ];

// echo json_encode($payload);

// if($_POST['']){
	
// }









