<?php 

require('DBconnection.php');

class product extends dbconnection{

	public $pro_id;
	public $name;
	public $pro_desc;
	public $price;
	public $image;
    public $ven_id;
	



	public function create(){
		$query = "INSERT INTO product(name,pro_desc,price,image,ven_id)
				 VALUES('$this->name','$this->pro_desc','$this->price','$this->image','$this->ven_id')";
		return $this->performQuery($query);
	}

	public function readAll(){
		$query  = "SELECT * FROM product,vendor WHERE product.ven_id=vendor.ven_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}
	public function readAllven(){
		$query  = "SELECT * FROM product WHERE ven_id=$id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readById($id){
		$query  = "SELECT * FROM product WHERE pro_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}

public function readByven($id){
		$query  = "SELECT * FROM product WHERE ven_id = $id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);	
	}
	public function update($id){
		$query = "UPDATE product SET name      = '$this->name',
								   	  pro_desc = '$this->pro_desc',
								   	  price    = '$this->price',
								   	   image   = '$this->image',
								      ven_id   =  $this->ven_id
						      WHERE pro_id     = $id";
		return $this->performQuery($query);
	}
	public function delete($id){
		$query = "DELETE FROM product WHERE pro_id = $id";
		$this->performQuery($query);
	}

	
    
}