<?php
	/*
	 * Model for caravan modifications
	 * This class handles the add  of a caravan
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	public class CaravanModel {
	
		/**
		 * Modify caravan's informations
		 *
		 * @param car_id, caravan's id		
		 * @return 0 without errors, exception message any others cases
		 */
		public function has_Caravan($car_id) {
			try {
	
				$qry = $this->db->prepare('SELECT caravan.car_id FROM caravan WHERE caravan.car_id = ?');	

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