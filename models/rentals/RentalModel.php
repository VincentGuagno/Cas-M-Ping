<?php
	/*
	 * Model for rental modifications
	 * This class handles the add  of a rental
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	
	class RentalModel {
	

		/**
		 * Initialize the RentalModel class
		 */
		public function init() {}

		/**
		 * Modify rental's informations
		 *
		 * @param car_id, rental's id		
		 * @return 0 without errors, exception message any others cases
		 */
		public function has_rental($car_id) {
			try {
	
				$qry = $this->db->prepare('SELECT rental.car_id FROM rental WHERE rental.car_id = ?');	

				$qry->bindValue(1, $car_id, PDO::PARAM_STR);				

				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		
	}
?>