

<?php

	/**********************     REQUEST     *********************/
	/** season                                         
	/************************************************************/

	class modifyModel {


	
		/***
		*  modify season's informations
		*
		*/
		public function modify_model($seas_id, $seas_name, $seas_start_date, $seas_end_date, $seas_coeff) {
			try {
				$model = $this->db->prepare('UPDATE season SET seas_name = "?",seas_start_date = "?", seas_end_date = "?",seas_coeff = "?" WHERE seas_id = ?');
				$model->bindValue(1, $seas_name, PDO::PARAM_STR);
				$model->bindValue(2, $seas_start_date, PDO::PARAM_STR);
				$model->bindValue(3, $seas_end_date, PDO::PARAM_STR);
				$model->bindValue(4, $seas_coeff, PDO::PARAM_STR);					
				$model->bindValue(5, $seas_id, PDO::PARAM_INT);
				
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>