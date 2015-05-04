



<?php

	/**********************     REQUEST     *********************/
	/** Season                                           
	/************************************************************/

class addModel {


	/***
	* add new season informations
	*
	*/
	public function add_model($seas_name, $seas_start_date, $seas_end_date, $seas_coeff) {
		try {
			$model = $this->db->prepare('INSERT INTO `season`(seas_name, seas_start_date, seas_end_date,`seas_coeff) VALUES (?,?,?,?)');
			$model->bindValue(1, $seas_name, PDO::PARAM_STR);
			$model->bindValue(2, $seas_start_date, PDO::PARAM_STR);
			$model->bindValue(3, $seas_end_date, PDO::PARAM_STR);
			$model->bindValue(4, $seas_coeff, PDO::PARAM_STR);		
			$model->execute();
			$model->closeCursor();
		}
		/catch(Exception $e) {header('Location: ./erreur/500');}
	}

}




?>