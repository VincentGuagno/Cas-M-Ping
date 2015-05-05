

<?php

	/**********************     REQUEST     *********************/
	/** caravan                                       
	/************************************************************/

	class displayModel {


		/***
		* display all caravans's informations
		*
		*/		
		public function display_models() {
			try {
				$model = $this->db->prepare('SELECT * FROM caravan');	
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

		/***
		*  all caravan's informations from one customer 
		*
		*/
			public function display_model($car_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM caravan WHERE car_id = ?');	
				$model->bindValue(1, $car_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>