<?php


require_once __DIR__.'/database.class.php';


class Crud {

    private $db;
    private $conn;
   
    private static $_instance; //The single instance

    public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
        }
        
        
		return self::$_instance;
    }
    
    private function __construct() {
       
        $db = Database::getInstance();
        $conn = $db->getConnection(); 
	
		// Error handling
		if(!$conn) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
   
    // CURD  methods.

    
    public function addNewSmsPara($conn, $smsid, $snumber, $msg, $time){

        try {

            $sql = "INSERT INTO sms_in(smsid, snumber, msg, sdatetime)
            VALUES ($smsid, '".$snumber."', '".$msg."', $time)";
            $conn->query($sql);

        }catch(PDOException $e){
        echo "Error : ".$sql . "<br>" . $e->getMessage();
        }
    
        return true;
    }


    public function addNewSms($conn){

        try {

            $sql = "INSERT INTO sms_in(smsid, snumber, msg, sdatetime)
            VALUES (20020, '+9332423432', 'sadjdsadas', 32432432423432)";
            $conn->query($sql);

        }catch(PDOException $e){
        echo "Error : ".$sql . "<br>" . $e->getMessage();
        }
    
        return true;
    }


    public function getSms($conn){
    
        try{

            $query = "SELECT * FROM sms_in";
            $result =  $conn->query($query);
       
        }catch(PDOException $e){
          echo "Error : ".$result . "<br>" . $e->getMessage();
        }

        return $result;
    }



}

?>