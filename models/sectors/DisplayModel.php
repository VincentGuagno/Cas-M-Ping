

<?php

	/**********************     REQUEST     *********************/
	/** Sector                                          
	/************************************************************/

	class displayModel {


		/***
		* display all Sector's informations
		*
		*/		
		public function display_models() {
			try {
				$model = $this->db->prepare('SELECT * FROM sector');	
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}
		/***
		*  all Sector's informations from one customer 
		*
		*/
			public function display_model($sec_id) {
			try {
				$model = $this->db->prepare('SELECT sec_name FROM sector WHERE sec_id');	
				$model->bindValue(1, $sec_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>