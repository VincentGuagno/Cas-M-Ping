<?php

	/*
	 * Model for location modifications
	 * This class handles the display of a location
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel {
	
		/**
		 * All location's informations
		 * @param loc_id, location's id
		 * @return 0 without errors, exception message any others cases
		 */
		public function display_locations() {
			try {
				$model = $this->db->prepare('SELECT * FROM location');	
				$model->execute();
				$model->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * All customer's informations from one customer 
		 * @param loc_id, location's id
		 * @return 0 without errors, exception message any others cases
		 */		
		public function display_location($loc_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM location WHERE loc_id = ?');	
				$model->bindValue(1, $loc_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>