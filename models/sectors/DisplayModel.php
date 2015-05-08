<?php

	/*
	 * Model for sectors modifications
	 * This class handles the display of a sectors
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class displayModel extends sectorModel{

		/**
		 * Display all Sector's informations
		 *	
		 * @param sec_id, sector's id
		 * @return 0 without errors, exception message any others cases
		 */	
		public function display_sectors() {
			try {
				// Récupèration de tout les secteur avec la liste de leurs emplacement	
				//et récupération de la jointure location et type_location
				$qry = $this->db->prepare('SELECT sector.*, location.loc_id, type_location.type_location_name FROM sector 
												INNER JOIN location ON  sector.sec_id = location.loc_sec_id
												INNER JOIN type_location ON location.loc_type_id = type_location.type_location_id');
				
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
		 * All Sector's informations from one customer 
		 *
		 * @param sec_id, sector's id
		 * @return 0 without errors, exception message any others cases
		 */	
		public function display_sector($sec_id) {
			try {
				// select secteur left join emplacement(location) )				
				$qry = $this->db->prepare('SELECT sec_name FROM sector WHERE sec_id');	
				$qry->bindValue(1, $sec_id, PDO::PARAM_INT);
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
		 * return sector's id
		 *
		 * @param sec_id, sector's id		
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_sectorId($sec_id) {
			try {
	
				$qry = $this->db->prepare('SELECT * FROM sector WHERE sec_id = ?');	
                        								
				$qry->bindValue(1, $sec_id, PDO::PARAM_STR);		

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