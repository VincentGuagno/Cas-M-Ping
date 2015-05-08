<?php

	/*
	 * Model for location modifications
	 * This class handles the display of a location
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel extends LocationModel{
	
		/**
		 * All location's informations
		 * @param loc_id, location's id
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function display_locations() {
			try {

				$qry = $this->db->prepare('SELECT  sector.sec_name,
												   type_location.type_location_name,
												   type_location.type_location_price FROM location 
												   INNER JOIN sector ON  sector.sec_id = location.loc_sec_id
												   INNER JOIN type_location ON location.loc_type_id = type_location.type_location_id');
				
				$model->execute();
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * All customer's informations from one customer 
		 * @param loc_id, location's id
		 * @return return_qry : result into an object, exception message any others cases
		 */		
		public function display_location($loc_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM location WHERE loc_id = ?');	
				$model->bindValue(1, $loc_id, PDO::PARAM_INT);
				$model->execute();
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * return location's id
		 *
		 * @param loc_id, location's name		
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_LocationId($loc_id) {
			try {
	
				$qry = $this->db->prepare('SELECT * FROM location WHERE loc_id = ?');	
                        								
				$qry->bindValue(1, $loc_id, PDO::PARAM_STR);
				
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