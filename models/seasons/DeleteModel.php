



<?php

	/**********************     REQUEST     *********************/
	/** Season                                           
	/************************************************************/

class deleteModel {


	/***
	* delete a specified season
	*
	*/
	public function delete_model($seas_name) {
		try {
			$model = $this->db->prepare('DELETE FROM `season` WHERE `seas_name` = ?');
			$model->bindValue(1, $seas_name, PDO::PARAM_STR);
			$model->execute();
			$model->closeCursor();
		}
		/catch(Exception $e) {header('Location: ./erreur/500');}
	}

}




?>