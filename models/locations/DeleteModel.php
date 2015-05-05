

<?php

	/*
	 * Model for location modifications
	 * This class handles the delete of a location
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class deleteModel {


		/**
		* delete a specified sector
		* @param loc_id, location's id
		*
		* @return 0 without errors, exception message any others cases
		*/

		public function delete_location($loc_id) {
			try {
				$qry = $this->db->prepare('DELETE FROM location WHERE `loc_id = ?');
				$qry->bindValue(1, $loc_id, PDO::PARAM_INT);
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