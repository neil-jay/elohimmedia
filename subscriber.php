<?php
include './classes/DBOperation.php';
$connection = new DBOperation();

if (isset($_POST['val'])) {
        $subs_email = mysqli_real_escape_string($connection->getConnection(), trim($_POST['subs_email']));
        
        $sqlquery = 'SELECT count(*) as total from subscriber_list where `subscriber_email` = '.'"'.$subs_email.'"';
        $result=mysqli_query($connection->getConnection(), $sqlquery);
        if(isset($result)) {
            $data=mysqli_fetch_assoc($result);
            if ($data['total'] > 0) {
                echo json_encode(array("statusCode"=>202));die();
            }
        }
        $reg_date = date("Y-m-d");
        $insert_sql = "INSERT INTO subscriber_list VALUES (DEFAULT, '$subs_email', '$reg_date')";
        $status=$connection->cud($insert_sql);
        if($status==true){
            	echo json_encode(array("statusCode"=>200));
        }
        else {
			echo json_encode(array("statusCode"=>201));
		}
mysqli_close($connection->getConnection());
}
?>