

<?php

	/*
	 * Model for caravan modifications
	 * This class handles the renting of a caravan
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class rentingModel {


		/**
		 * Rent a caravans.  You need to find the => rent_cust_id!
		 *		
		 * @param rent_name, caravans's name
		 * @param rent_begin, caravans's begin of the rent
		 * @param rent_end, caravans's end of the rent
		 * @param rent_nbPerson, nb of persone for the rent
		 * @param rent_locationState, 
		 * @param rent_cautionState,
		 * @param rent_daysNumber, 
		 * @param rent_price, caravans's price
		 * @param rent_custId, customer rent id
		 * @return 0 without errors, exception message any others cases
		 */
		public function renting_caravan($rent_name, $rent_begin, 
										$rent_end, $rent_nbPerson,
									 	$rent_locationState, $rent_cautionState,
									 	$rent_daysNumber,$rent_price , $rent_custId) {
			try {
				$qry = $this->db->prepare('INSERT INTO camping.rental (rent_id,
																	   rent_name, 
																	   rent_begin, 
																	   rent_end, 
																	   rent_nb_person, 
																	   rent_location_state, 
																	   rent_caution_state, 
																	   rent_days_number, 
																	   rent_price, 
																	   rent_cust_id) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				


				$qry->bindValue(1, $rent_name, PDO::PARAM_STR);
				$qry->bindValue(2, $rent_begin, PDO::PARAM_STR);
				$qry->bindValue(3, $rent_end, PDO::PARAM_STR);
				$qry->bindValue(4, $rent_nbPerson, PDO::PARAM_STR);		
				$qry->bindValue(5, $rent_locationState, PDO::PARAM_STR);
				$qry->bindValue(6, $rent_cautionState, PDO::PARAM_STR);
				$qry->bindValue(7, $rent_daysNumber, PDO::PARAM_STR);
				$qry->bindValue(8, $rent_price, PDO::PARAM_STR);
				$qry->bindValue(9, $rent_custId, PDO::PARAM_STR);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>