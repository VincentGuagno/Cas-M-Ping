<?php
	/*
	 * Model for location modifications
	 * This class handles the add  of a location
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	 
	namespace Location;  
	 
	class LocationModel {
	

		/**
		 * Initialize the CustomerModel class
		 */
		public function init() {}

		/**
		 * Modify location's informations
		 *
		 * @param loc_id, location's id		 
		 * @return 0 without errors, exception message any others cases
		 */
		public function has_location($loc_id) {
			try {
	
				$qry = $this->db->prepare('SELECT location.loc_id FROM location WHERE location.loc_id = ?');	

				$qry->bindValue(1, $loc_id, PDO::PARAM_STR);				

				//put  the result into an object
				$return_qry = $qry->fetchAll();
				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		
	}
?>