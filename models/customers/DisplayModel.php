

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
				$model = $this->db->prepare('SELECT * FROM `customer` WHERE 1 ORDER BY `customer`.`cust_name` DESC');	
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

		/***
		*  all customer's informations from one customer 
		*
		*/
			public function display_models($cust_name) {
			try {
				$model = $this->db->prepare('SELECT * FROM `customer` WHERE `cust_name` = ?');	
				$model->bindValue(1, $cust_name, PDO::PARAM_STR);
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>