<?php 

require('DBconnection.php');


class vendor extends dbconnection{

	public $ven_id;
	public $cat_id;
	public $email;
	public $name;
	public $pass;
	public $phone;
	public $address;
	public $img;
	public $active;
	

	public function create(){
		$query = "INSERT INTO vendor(ven_name,ven_email,ven_pass,ven_phone,ven_add,ven_img,cat_id,active)
				 VALUES('$this->name','$this->email','$this->pass','$this->phone','$this->address','$this->img','$this->cat_id','$this->active')";
		return $this->performQuery($query);
	}
	


	

	public function readAll(){
		$query  = "SELECT * FROM vendor , category WHERE category.cat_id= vendor.cat_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM vendor WHERE ven_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

	public function update($id){
		$query = "UPDATE vendor SET      ven_name = '$this->name',
		                              ven_email   = '$this->email',
							          ven_pass   = '$this->pass',
									 ven_phone    = '$this->phone',
									ven_add    = '$this->address',
									 ven_img     = '$this->img'
									
						    WHERE     ven_id   = '$id'";
		 $this->performQuery($query);
	}

	public function delete($id){
		$query = "DELETE FROM vendor WHERE ven_id = $id";
		$this->performQuery($query);
	}
	public function login($email,$pass){
		$query  = "SELECT * FROM vendor 
		           WHERE ven_email = '$email'AND
					     ven_pass  = '$pass'
					   

					     ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	 

   public function readAllcat(){
		$query  = "SELECT * FROM category";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function active($id,$active){
		$query  = "UPDATE vendor SET active = '1' WHERE ven_id = $id";
		return $this->performQuery($query);
	}

	public function count(){
		$query  = "SELECT COUNT(ven_id) AS 'Numbers' FROM vendor";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
}
