<?php

	/*
	 * Model for seasons modifications
	 * This class handles the display of a seasons
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class displayModel extends seasonModel{


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
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;
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
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * return season's id
		 *
		 * @param seas_id, season's id		
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_seasonId($seas_id) {
			try {
	
				$qry = $this->db->prepare('SELECT * FROM season WHERE seas_id = ?');	
                        								
				$qry->bindValue(1, $seas_id, PDO::PARAM_STR);		

				$qry->execute();
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;

			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>