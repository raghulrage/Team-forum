<?php 
	class user{
		private $conn;
    	private $table = "users";
    	public $user_id;
    	public $user_name;
    	public $email;
    	public $password;

    	public function __construct($db){
        $this->conn = $db;
    	}


    function create_user(){

        // query to insert record
        $query = "INSERT INTO
                    " . $this->table. "
                SET
                    user_name=:user_name,
                    email=:email, 
                    password=:password";
        // prepare query
        $stmt = $this->conn->prepare($query);
     
        // sanitize
        $this->user_name=htmlspecialchars(strip_tags($this->user_name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->password=htmlspecialchars(strip_tags($this->password));
     
        // bind values
        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
     
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;    
    } 

    function check_existing_user($email_id){
    	$query = "SELECT * FROM ".$this->table." where email='$email_id'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $i=0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        	extract($row);
		$i=$i+1;
		}
		return $i;
    }

    function login_retrive_password($email_id){
    	$query = "SELECT * FROM ".$this->table." where email='$email_id'";
    	$stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function get_all_users(){
    	$query = 'SELECT user_id,email FROM '.$this->table;
    	$stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}

?>