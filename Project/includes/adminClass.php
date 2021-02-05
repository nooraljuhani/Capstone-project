<?php 

require('DBconnection.php');

class admin extends dbconnection{

	public $admin_id;
	public $email;
	public $password;
	public $name;
	



	public function create(){
		$query = "INSERT INTO admin(email,password,name)
				 VALUES('$this->email','$this->password','$this->name')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM admin";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readById($id){
		$query  = "SELECT * FROM admin WHERE admin_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE admin SET      email      = '$this->email',
								   password 		= '$this->password',
								         name       = '$this->name'
								   WHERE admin_id   = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM admin WHERE admin_id = $id";
		$this->performQuery($query);
	}
	public function login($email,$password){
		$query  = "SELECT * FROM admin 
		           WHERE email = '$email' AND
					     password 	 = '$password' ";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}


	public function cs_count(){
		$query  = "SELECT COUNT(c_id) AS 'count' FROM customer";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function v_count(){
		$query  = "SELECT COUNT(ven_id) AS 'count' FROM vendor";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function p_count(){
		$query  = "SELECT COUNT(pro_id) AS 'count' FROM product";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function c_count(){
		$query  = "SELECT COUNT(cat_id) AS 'count' FROM category";
		
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function top(){
		$query  = "SELECT vendor.ven_id,vendor.ven_name,COUNT(vendor.ven_id)AS 'top' FROM product,item_order,vendor WHERE product.pro_id=item_order.pro_id AND product.ven_id=vendor.ven_id
       GROUP BY vendor.ven_id ORDER BY top DESC LIMIT 5";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
}
