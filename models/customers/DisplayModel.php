

<?php

	/**********************     REQUEST     *********************/
	/** Application access database                                           
	/************************************************************/

	class displayModel {


		/***
		* all customers's informations
		*
		*/
		public function display_models() {
			try {
				$model = $this->db->prepare('SELECT * FROM customer ORDER BY customer.cust_name DESC');	
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

		/***
		*  all customer's informations from one customer 
		*
		*/
			public function display_model($cust_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM customer WHERE cust_id = ?');	
				$model->bindValue(1, $cust_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>