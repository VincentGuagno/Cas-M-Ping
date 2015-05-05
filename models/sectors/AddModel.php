<?php

	/**********************     REQUEST     *********************/
	/** sector                                           
	/************************************************************/

	class addModel {

		/***
		* add new sector 
		*
		*/
		public function add_model($sec_name) {
			try {
				$model = $this->db->prepare('INSERT INTO camping.sector (sec_id, sec_name) VALUES (NULL, theSecName)');
				$model->bindValue(1, $sec_name, PDO::PARAM_STR);			
				$model->execute();
				$model->closeCursor();
			}
			/catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>