



<?php

	/**********************     REQUEST     *********************/
	/** caravanc                                         
	/************************************************************/

	class returnModel {


		/***
		* delete the renting with the "rent_cust_id"
		*
		*/		
		public function return_models($rent_cust_id) {
			try {
				$model = $this->db->prepare('DELETE FROM rental WHERE rent_cust_id = ?');	
				$model->bindValue(1, $rent_cust_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>