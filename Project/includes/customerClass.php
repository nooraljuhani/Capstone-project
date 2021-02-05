<?php 

require('DBconnection.php');

class customer extends dbconnection{

	public $c_id;
	public $email;
	public $full_name;
	public $password;
	public $mobile;
	public $address;
	



	public function create(){
		$query = "INSERT INTO customer(full_name,email,password,address,mobile)
				 VALUES('$this->full_name','$this->email','$this->password','$this->address','$this->mobile')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM customer";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM customer WHERE c_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE customer SET full_name = '$this->full_name',
		                              email     = '$this->email',
									password    = '$this->password',
									address     = '$this->address',
									 mobile     = '$this->mobile'
									WHERE c_id  = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM customer WHERE c_id = $id";
		$this->performQuery($query);
	}
	public function login($email,$password){
		$query  = "SELECT * FROM customer 
		           WHERE email = '$email' AND
					     password 	 = '$password' ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}


}
