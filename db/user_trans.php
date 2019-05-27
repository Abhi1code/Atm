<?php
/**
 * user transaction like input and output to database
 */
class Usertrans
{
	private $type_id;
	private $product_id;
	private $mconn;
	

    public function get_type_id(){ return $this->type_id; }
    public function set_type_id($id){ $this->type_id = $id; }
    
	public function get_product_id(){ return $this->product_id; }
    public function set_product_id($id){ $this->product_id = $id; }
    

	function __construct()
	{
		require_once('db_connect.php');
		$conn = new Dbconnect;
		$this->mconn = $conn->establish_conn();
			
	}

	public function verifyuser($customer_id, $card_pin){

		$sql = "SELECT `customer_id` FROM `account_details` WHERE `customer_id` = :id AND `card_pin` = :pin";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":id", $customer_id);
		$bind->bindParam(":pin", $card_pin);

    	try {
    		if ($bind->execute()) {
    			$user = $bind->fetch(PDO::FETCH_ASSOC);
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	return $user;
	}
	
	public function selectaccount($customer_id, $type){

		$sql = "SELECT `account_number` FROM `account_details` WHERE `customer_id` = :id AND `account_type` = :type";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":id", $customer_id);
		$bind->bindParam(":type", $type);

    	try {
    		if ($bind->execute()) {
    			$user = $bind->fetch(PDO::FETCH_ASSOC);
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	return $user;
	}
	
	public function fetch_transaction_details($account_number){

		$sql = "SELECT * FROM `transaction_detail` WHERE `account_number` = :number";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":number", $account_number);
		
    	try {
    		if ($bind->execute()) {
    			$user = $bind->fetchAll(PDO::FETCH_ASSOC);
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	return $user;
	}

	public function change_pin($id, $number, $type, $curr_pin, $new_pin){
		$sql = "UPDATE `account_details` SET `card_pin` = :newpin WHERE `customer_id` = :id AND `account_number` = :number AND `account_type` = :type AND `card_pin` = :old";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":newpin", $new_pin);
		$bind->bindParam(":id", $id);
		$bind->bindParam(":number", $number);
		$bind->bindParam(":old", $curr_pin);
    	$bind->bindParam(":type", $type);
		
		

    	try {
    		if ($bind->execute()) {
    			return true;
    		}else{
    			return false;
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
	}

	public function withdraw_cash($id, $type, $amount){
		$sql = "SELECT `balance` FROM `account_details` WHERE `customer_id` = :id AND `account_type` = :type";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":id", $id);
		$bind->bindParam(":type", $type);

    	try {
    		if ($bind->execute()) {
				$user = $bind->fetch(PDO::FETCH_ASSOC);
				$new_balance = $user['balance'] - $amount;
				
				$sql = "UPDATE `account_details` SET `balance` = :newbalance WHERE `customer_id` = :id AND `account_type` = :type";
    	$bind = $this->mconn->prepare($sql);
    	$bind->bindParam(":newbalance", $new_balance);
    	$bind->bindParam(":type", $type);
		$bind->bindParam(":id", $id);

    	try {
    		if ($bind->execute()) {
				
				return true;
    		}else{
    			return false;
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
	}

	public function submit_cash($id, $type, $amount){
		$sql = "SELECT `balance` FROM `account_details` WHERE `customer_id` = :id AND `account_type` = :type";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":id", $id);
		$bind->bindParam(":type", $type);

    	try {
    		if ($bind->execute()) {
				$user = $bind->fetch(PDO::FETCH_ASSOC);
				$new_balance = $user['balance'] + ($amount);
				
				$sq_l = "UPDATE `account_details` SET `balance` = :newbalance WHERE `customer_id` = :id AND `account_type` = :type";
    	$bin_d = $this->mconn->prepare($sq_l);
		$bin_d->bindParam(":newbalance", $new_balance);
		$bin_d->bindParam(":id", $id);
    	$bin_d->bindParam(":type", $type);

    	try {
    		if ($bin_d->execute()) {
    			return true;
    		}else{
    			return false;
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
	}

	public function balance_enquiry($id, $type){

		$sql = "SELECT `balance` FROM `account_details` WHERE `customer_id` = :id AND `account_type` = :type";
    	$bind = $this->mconn->prepare($sql);
		$bind->bindParam(":id", $id);
		$bind->bindParam(":type", $type);

    	try {
    		if ($bind->execute()) {
    			$user = $bind->fetch(PDO::FETCH_ASSOC);
    		}
    	} catch (Exception $e) {
    		echo $e->getMessage();
    	}
    	return $user;
	}
}

?>