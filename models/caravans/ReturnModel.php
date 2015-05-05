



<?php

	/*
	 * Model for caravan modifications
	 * This class handles the return of a caravan
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class returnModel {


		/**
		 * Delete the renting with the "rent_cust_id"
		 *
		 * @param rent_custId, customer rent id
		 * @return 0 without errors, exception message any others cases
		 */
		public function return_caravan($rent_custId) {
			try {
				$qry = $this->db->prepare('DELETE FROM rental WHERE rent_cust_id = ?');	
				$qry->bindValue(1, $rent_custId, PDO::PARAM_INT);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>