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


$posts = new posts($db);
// get posted data
// $data = json_decode(file_get_contents("php://input"));  

$stmt = $posts->get_all_posts();

$cnt = 0;

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        	extract($row);
		$cnt=$cnt+1;
		}

$stmt = $posts->get_all_posts();
if ($cnt>0) {
	
   	$products_arr=array();
    $products_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $product_item=array(
            "post_id" => $post_id,
            "post_title" => $post_title,
            "sub_post" => $sub_post,
            "created_by" => $created_by,
            "assigned_to" => $assigned_to,
            "created_time" => $created_time
        );
 
        array_push($products_arr["records"], $product_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($products_arr);
}
else{
	echo 'No Records Found';
}

 ?>