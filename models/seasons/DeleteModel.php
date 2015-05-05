



<?php

	/**********************     REQUEST     *********************/
	/** Season                                           
	/************************************************************/

	class deleteModel {


		/***
		* delete a specified season
		*
		*/
		public function delete_model($seas_id) {
			try {
				$model = $this->db->prepare('DELETE FROM season WHERE seas_id = ?');
				$model->bindValue(1, $seas_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}




?>