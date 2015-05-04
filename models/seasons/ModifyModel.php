

<?php

	/**********************     REQUEST     *********************/
	/** seamo,                                          
	/************************************************************/

	class modifyModel {


	
		/***
		*  modify season's informations
		*
		*/
		public function modify_model($seas_name, $seas_start_date, $seas_end_date, $seas_coeff) {
			try {
				$model = $this->db->prepare('UPDATE season SET seas_name = ?,seas_start_date = ?, seas_end_date = ?,seas_coeff = ? WHERE seas_name = ?');
				$model->bindValue(1, $seas_name, PDO::PARAM_STR);
				$model->bindValue(2, $seas_start_date, PDO::PARAM_STR);
				$model->bindValue(3, $seas_end_date, PDO::PARAM_STR);
				$model->bindValue(4, $seas_coeff, PDO::PARAM_STR);				
				//pas sure de pouvoir modifier son nom vue que je prens 2 fois le mêmes paramètre.
				$model->bindValue(5, $cust_name, PDO::PARAM_STR);
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>