<?php

	/*
	 * Model for seasons modifications
	 * This class handles the display of a seasons
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel {


		/**
		 * Display all season's informations
		 *
		 * @param seas_id, season's name
		 * @return 0 without errors, exception message any others cases
		 */	
		public function display_seasons() {	
			try {
				$qry = $this->db->prepare('SELECT seas_name, seas_start_date, seas_end_date, seas_coeff FROM season');	
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) 
				return $e->getMessage();
			}
		}

		/**
		 * All season's informations from one customer 
		 *
		 * @param seas_id, season's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function display_season($seas_id) {
			try {
				$qry = $this->db->prepare('SELECT * FROM season WHERE seas_id = ?');	
				$qry->bindValue(1, $seas_id, PDO::PARAM_INT);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>