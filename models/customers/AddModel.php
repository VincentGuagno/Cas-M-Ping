



<?php

	/**********************     REQUEST     *********************/
	/** Application access database                                           
	/************************************************************/

class addModel {


	/***
	* @param all customer's informations
	*
	*/
	public function add_model($cust_name, $cust_address, $cust_postal_code, $cust_city, $cust_phone_number, $cust_record_number) {
		try {
			$model = $this->db->prepare('INSERT INTO `camping`.`customer` (`cust_id`, `cust_name`, `cust_address`, `cust_postal_code`, `cust_city`, `cust_phone_number`, `cust_record_number`) VALUES (NULL, ?, ?, ?, ?, ?, ?)');
			$model->bindValue(1, $cust_name, PDO::PARAM_STR);
			$model->bindValue(2, $cust_address, PDO::PARAM_STR);
			$model->bindValue(3, $cust_postal_code, PDO::PARAM_STR);
			$model->bindValue(4, $cust_city, PDO::PARAM_STR);
			$model->bindValue(5, $cust_phone_number, PDO::PARAM_STR);
			$model->bindValue(6, $cust_record_number, PDO::PARAM_STR);
			$model->execute();
			$model->closeCursor();
		}
		/catch(Exception $e) {header('Location: ./erreur/500');}
	}

}




?>