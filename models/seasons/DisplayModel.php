

<?php

	/**********************     REQUEST     *********************/
	/** Season                                          
	/************************************************************/

	class displayModel {


		/***
		* display all season's informations
		*
		*/		
		public function display_models() {
			try {
				$model = $this->db->prepare('SELECT seas_name, seas_start_date, seas_end_date, seas_coeff FROM season');	
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

		/***
		*  all season's informations from one customer 
		*
		*/
			public function display_model($seas_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM season WHERE seas_id = ?');	
				$model->bindValue(1, $seas_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>