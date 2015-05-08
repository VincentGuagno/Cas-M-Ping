<?php

	/*
	 * Model for location modifications
	 * This class handles the creation of a location
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class addModel extends LocationModel{
		
		/**
		 * Modify all location's informations from one location 
		 *
		 * @param loc_secId, location's id
		 * @param loc_typeId, location's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function add_location($loc_secId, $loc_typeId) {
			try {
				$qry = $this->db->prepare('INSERT INTO camping.location (loc_id, loc_sec_id, loc_type_id) VALUES (NULL, ?, ?)');
				$qry->bindValue(1, $loc_secId, PDO::PARAM_STR);
				$qry->bindValue(2, $loc_typeId, PDO::PARAM_STR);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>