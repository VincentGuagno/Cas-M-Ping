<?php

	/*
	 * Model for rentals modifications
	 * This class handles the display of a rent
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel {

		/**
		 * All rental's informations		
		 * @return 0 without errors, exception message any others cases
		 */		
		public function display_rentals() {
			try {
				$model = $this->db->prepare('SELECT * FROM rental');	
				$model->execute();
				$model->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * All customer's informations from one customer 
		 * @param rent_id, rental's id
		 * @return 0 without errors, exception message any others cases
		 */		
		public function display_rental($rent_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM rental WHERE rent_id = ?');	
				$model->bindValue(1, $rent_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>