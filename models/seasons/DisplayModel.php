

<?php

	/**********************     REQUEST     *********************/
	/** Season                                          
	/************************************************************/

	class displayModel {


		/***
		* display all season's informations
		*
		*/
		SELECT `seas_name`, `seas_start_date`, `seas_end_date`, `seas_coeff` FROM `season` WHERE 1
		public function display_models() {
			try {
				$model = $this->db->prepare('SELECT seas_name, seas_start_date, seas_end_date, seas_coeff FROM `season` WHERE 1');	
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