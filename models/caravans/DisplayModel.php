

<?php

	/*
	 * Model for caravan modifications
	 * This class handles the display of a caravan
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	class displayModel {

		/**
		* display all caravans's informations
		*		
		* @return 0 without errors, exception message any others cases
		*/	
		public function display_caravans() {
			try {
				$qry = $this->db->prepare('SELECT * FROM caravan');	
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} 
			catch(Exception $e)
			{
				return $e->getMessage();
			}
		}


		/**
		* all caravan's informations from one caravan 
		*
		* @param car_id, caravan's id
		*
		* @return 0 without errors, exception message any others cases
		*/
			public function display_caravan($car_id) {
			try {
				$qry = $this->db->prepare('SELECT * FROM caravan WHERE car_id = ?');	
				$qry->bindValue(1, $car_id, PDO::PARAM_INT);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} 
			catch(Exception $e)
			{
				return $e->getMessage();
			}
		}

	}

?>