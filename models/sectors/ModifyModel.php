

<?php

	/**********************     REQUEST     *********************/
	/** sector,                                          
	/************************************************************/

	class modifyModel {


	
		/***
		*  modify sector's informations
		*
		*/
		public function modify_model($sec_id, $sec_name) {
			try {
				$model = $this->db->prepare('UPDATE sector SET sec_name="?" WHERE sec_id = ?');
				$model->bindValue(1, $sec_id, PDO::PARAM_INT);
				$model->bindValue(2, $sec_name, PDO::PARAM_STR);
				
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>