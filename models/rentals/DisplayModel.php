<?php

	/*
	 * Model for rentals modifications
	 * This class handles the display of a rent
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class displayModel extends rentalModel{

		/**
		 * All rental's informations		
		 * @return 0 without errors, exception message any others cases
		 */		
		public function display_rentals() {
			try {

//TODO NOT FINISHED
				$qry = $this->db->prepare('SELECT  * FROM rental 
												   INNER JOIN customer ON  sector.sec_id = rental.
												   INNER JOIN location ON location.loc_type_id = rental.');
				
				$model = $this->db->prepare('SELECT * FROM rental');	
				$model->execute();
				$model->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * All customer's informations from one customer 
		 * @param rent_id, rental's id
		 * @return 0 without errors, exception message any others cases
		 */		
		public function display_rental($rent_id) {
			try {
				$model = $this->db->prepare('SELECT * FROM rental WHERE rent_id = ?');	
				$model->bindValue(1, $rent_id, PDO::PARAM_INT);
				$model->execute();
				$model->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * return rental's id
		 *
		 * @param rent_id, rental's id		
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_rentalId($rent_id) {
			try {
	
				$qry = $this->db->prepare('SELECT * FROM rental WHERE rent_id = ?');	
                        								
				$qry->bindValue(1, $rent_id, PDO::PARAM_STR);		

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