<?php
	
	/*
	 * Model for caravan modifications
	 * This class handles the display of a caravan
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel extends CaravanModel {


		/**
		 * Display all caravans's informations
		 *		
		 * @return return_qry : result into an object, exception message any others cases
		 */	
		public function display_caravans() {
			try {
				$qry = $this->db->prepare('SELECT * FROM caravan');	
				$qry->execute();

				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * All caravan's informations from one caravan 
		 *
		 * @param car_id, caravan's id
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function display_caravan($car_id) {
			try {
				$qry = $this->db->prepare('SELECT * FROM caravan WHERE car_id = ?');	
				$qry->bindValue(1, $car_id, PDO::PARAM_INT);
				$qry->execute();

				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetchAll(PDO::FETCH_OBJ);

				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	

		/**
		 * return caravan's id
		 *
		 * @param car_id, caravan's name		
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_caravanId($car_id) {
			try {
	
				$qry = $this->db->prepare('SELECT * FROM caravan WHERE car_id = ?');	
                        								
				$qry->bindValue(1, $car_id, PDO::PARAM_STR);
				
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