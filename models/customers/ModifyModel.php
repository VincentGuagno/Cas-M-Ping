

<?php

	/**********************     REQUEST     *********************/
	/** Application access database                                           
	/************************************************************/

	class modifyModel {


	
		/***
		*  modify all customer's informations from one customer 
		*
		*/
		public function modify_model($cust_id, $cust_name, $cust_address, $cust_postal_code, $cust_city, $cust_phone_number, $cust_record_number) {
			try {
				$model = $this->db->prepare('UPDATE camping.customer SET cust_name = "?",cust_address = "?",cust_postal_code = "?",cust_city ="?", cust_phone_number = "?",cust_record_number = "?"  WHERE cust_id = ?');
				$model->bindValue(1, $cust_name, PDO::PARAM_STR);
				$model->bindValue(2, $cust_address, PDO::PARAM_STR);
				$model->bindValue(3, $cust_postal_code, PDO::PARAM_STR);
				$model->bindValue(4, $cust_city, PDO::PARAM_STR);
				$model->bindValue(5, $cust_phone_number, PDO::PARAM_STR);
				$model->bindValue(6, $cust_record_number, PDO::PARAM_STR);
				//pas sure de pouvoir modifier son nom vue que je prens 2 fois le mêmes paramètre.
				$model->bindValue(7, $cust_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>