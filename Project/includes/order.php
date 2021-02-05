<?php 

require('DBconnection.php');

class order extends dbconnection{

	public $order_id;
    public $odate;
	public $c_id;
	public $ven_id;
	public $total;
	public $detail_id;
	public $pro_id;
	public $qty;
	
	public function create(){
		$query = "INSERT INTO orders(odate,c_id,total,ven_id)
				 VALUES('$this->odate','$this->c_id','$this->total',,'$this->ven_id')";
		return $this->performQuery($query);
	}

	public function test($id){
		$query ="SELECT item_order.order_id,orders.odate,customer.c_id,product.pro_id,
			item_order.qty,item_order.total,product.name,customer.mobile,customer.full_name,customer.email,
			customer.address,product.price FROM orders 
			INNER JOIN item_order  ON orders.order_id  = item_order.order_id
			INNER JOIN customer    ON customer.c_id = orders.c_id
			INNER JOIN product 	   ON product.pro_id  = item_order.pro_id
			WHERE ven_id  = $id";
			$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}

	public function readAll(){
		$query  = "SELECT * FROM orders,vendor,customer WHERE order_id=order_id And  orders.ven_id=vendor.ven_id AND orders.c_id=customer.c_id";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}


	public function readAllc($id){
		$query  = "SELECT * FROM orders,customer WHERE orders.c_id=customer.c_id ";
		$result = $this->performQuery($query);
		return $this->fetchAll($result);
	}


	


	public function delete($id){
		$query = "DELETE FROM orders WHERE order_id=$id";
		$this->performQuery($query);
	}



public function createitem(){
		$query = "INSERT INTO item_order(order_id,pro_id,qty)
				 VALUES('$this->order_id','$this->pro_id','$this->qty')";
		return $this->performQuery($query);
	}
	
}
