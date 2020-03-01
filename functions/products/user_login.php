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
include_once '../objects/user.php';

$database = new Database();
$db = $database->getConnection();
 
$user = new user($db);
// get posted data
$data = json_decode(file_get_contents("php://input"));    

$email_id = $data->email;
$pass = $data->password;
if($user->check_existing_user($email_id)==1){
	$stmt = $user->login_retrive_password($email_id);
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		if($pass==$password){
			http_response_code(200);
			echo json_encode('Successful');
		}
		else{
			echo "Password Does not match.";
		}
	}
}
else{
	echo "User does not exist.";
}


 ?>