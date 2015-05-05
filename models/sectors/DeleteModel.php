<?php

	/**********************     REQUEST     *********************/
	/** sector                                           
	/************************************************************/

	class deleteModel {


		/***
		* delete a specified sector
		*
		*/
		public function delete_model($sec_id) {
			try {
				$model = $this->db->prepare('DELETE FROM sector WHERE sec_id = ?');
				$model->bindValue(1, $sec_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}


?>