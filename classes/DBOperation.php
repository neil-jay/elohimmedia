<?php

class DBOperation {

    private $host = "";
    private $username = "";
    private $password = "";
    private $database = "";
    public $connection = "";

    /*     * ********************************* CONNECTION CREATION STARTS *********************************** */

    public function __construct() {
        $this->host = "localhost";
        $this->username = "u657473256_emp";
        $this->password = "yH@DDsG'~dK36DZv";
        $this->database = "u657473256_elohimproduct";
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    public function getConnection() {
        return $this->connection;
    }

    /*     * ********************************* CONNECTION CREATION ENDS *********************************** */


    /*     * ********************************* COUNT ENTRIES STARTS *********************************** */

    public function countEntries($sql) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $num_rows = $result->num_rows;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        return $num_rows;
    }

    /*     * ********************************* COUNT ENTRIES ENDS *********************************** */

    /*     * ********************************* FETCH DATA STARTS *********************************** */

    public function fetchdata($sql) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
             while ($row = $result->fetch_assoc()) {
              $data[] = $row;
              } 
            $stmt->free_result();
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        return $data;
    }

    /*     * ********************************* FETCH DATA ENDS *********************************** */

    /*     * ********************************* INSERT, UPDATE, DELETE STARTS *********************************** */

    public function cud($sql) {
        try {
            $stmt = $this->connection->prepare($sql);
            $ret_val = $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        return $ret_val;
    }

    /*     * *********************************  INSERT, UPDATE, DELETE ENDS *********************************** */
    	
	/*     * *********************************  Resize Image *********************************** */
	function resizeImage($resourceType,$image_width,$image_height,$resizeWidth,$resizeHeight) {
		$imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
		imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
		return $imageLayer;
	}
	/*     * *********************************  Resize Image *********************************** */
	
}
