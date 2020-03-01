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
// make sure data is not empty
if(
    !empty($data->user_name) &&
    !empty($data->email) && 
    !empty($data->password)
){
    $email=$data->email;
    $cnt = $user->check_existing_user($email);
    if ($cnt==0) {
        // set product property values
        $user->user_name = $data->user_name;
        $user->email = $data->email;
        $user->password = $data->password;
        // create the product
        if($user->create_user()){
     
            // set response code - 201 created
            http_response_code(200);
            
            // tell the user
            echo "product was created.";
        }
     
        // if unable to create the product, tell the user
        else{
     
            // set response code - 503 service unavailable
            http_response_code(200);
     
            // tell the user
            echo json_encode("Unable to create product.");
        }
    }
    else{
        echo "Existing user";
    }
 
    

}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create product. Data is incomplete."));
}
?>