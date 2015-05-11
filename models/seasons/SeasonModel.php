<?php
	/*
	 * Model for season modifications
	 * This class handles the add  of a season
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	class SeasonModel {
	
		/**
		 * Initialize the SeasonModel class
		 */
		public function init() {}

		/**
		 * Modify season's informations
		 *
		 * @param car_id, season's id
		 * @return 0 without errors, exception message any others cases
		 */
		public function has_season($car_id) {
			try {
	
				$qry = $this->db->prepare('SELECT season.seas_id FROM season WHERE season.seas_id = ?');	

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