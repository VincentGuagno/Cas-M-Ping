

<?php

	/**********************     REQUEST     *********************/
	/** caravan                                         
	/************************************************************/

	class rentingModel {


		/***
		* rent a caravans.  You need to find the => rent_cust_id!
		*
		*/		
		public function renting_model($rent_name, $rent_begin, $rent_end, $rent_nb_person ,
									 $rent_location_state, $rent_caution_state, $rent_days_number,
									 $rent_price , $rent_cust_id) {
			try {
				$model = $this->db->prepare('INSERT INTO camping.rental (rent_id, rent_name, rent_begin, rent_end, rent_nb_person, rent_location_state, rent_caution_state, rent_days_number, rent_price, rent_cust_id) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				$model->bindValue(1, $rent_name, PDO::PARAM_STR);
				$model->bindValue(2, $rent_begin, PDO::PARAM_STR);
				$model->bindValue(3, $rent_end, PDO::PARAM_STR);
				$model->bindValue(4, $rent_nb_person, PDO::PARAM_STR);		
				$model->bindValue(5, $rent_location_state, PDO::PARAM_STR);
				$model->bindValue(6, $rent_caution_state, PDO::PARAM_STR);
				$model->bindValue(7, $rent_days_number, PDO::PARAM_STR);
				$model->bindValue(8, $rent_price, PDO::PARAM_STR);
				$model->bindValue(9, $rent_cust_id, PDO::PARAM_STR);
				$model->execute();
				$model->closeCursor();
			}
			catch(Exception $e) {header('Location: ./erreur/500');}
		}

	}

?>