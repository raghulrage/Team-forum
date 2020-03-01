<?php 
	class posts{
		private $conn;
    	private $table = "posts";
    	public $post_id;
    	public $post_title;
    	public $sub_post;
    	public $created_by;
    	public $assigned_to;
    	public $created_time;

    	public function __construct($db){
        $this->conn = $db;
    	}

    function create_post(){
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table. "
                SET
                    post_title=:post_title,
                    sub_post=:sub_post, 
                    created_by=:created_by,
                    assigned_to=:assigned_to,
                    created_time=:created_time";
        // prepare query
        $stmt = $this->conn->prepare($query);
     
        // sanitize
        $this->post_title=htmlspecialchars(strip_tags($this->post_title));
        $this->sub_post=htmlspecialchars(strip_tags($this->sub_post));
        $this->created_by=htmlspecialchars(strip_tags($this->created_by));
        $this->assigned_to=htmlspecialchars(strip_tags($this->assigned_to));
        $this->created_time=htmlspecialchars(strip_tags($this->created_time));
     
        // bind values
        $stmt->bindParam(":post_title", $this->post_title);
        $stmt->bindParam(":sub_post", $this->sub_post);
        $stmt->bindParam(":created_by", $this->created_by);
     	$stmt->bindParam(":assigned_to", $this->assigned_to);
     	$stmt->bindParam(":created_time", $this->created_time);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;    
    } 

    
    function get_all_posts(){
    	$query = "SELECT * FROM posts";
    	$stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

   }
 ?>