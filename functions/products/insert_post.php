<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../objects/posts.php';
 
$database = new Database();
$db = $database->getConnection();

$user = new posts($db);
// get posted data
$data = json_decode(file_get_contents("php://input"));    

$user->post_title = $data->post_title;
$user->sub_post = $data->sub_post;
$user->created_by = $data->created_by;
$user->assigned_to = $data->assigned_to;
$user->created_time = date("d/m/Y");

if ($user->create_post()) {
	echo 'product created.';
}
else{
	echo 'Unable to create product';
}