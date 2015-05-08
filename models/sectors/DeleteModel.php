<?php

	/*
	 * Model for sectors modifications
	 * This class handles the delete of a sector
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class deleteModel {

		/**
		 * Delete a specified sector
		 *
		 * @param sec_id, sector's id
		 * @return 0 without errors, exception message any others cases
		 */
		public function delete_sector($sec_id) {
			try {
				// Supprestion des informations du sectors  avec commune avec la clé etrangère de la table link_season_location
				$qry = $this->db->prepare('DELETE FROM sector 
												INNER JOIN  link_season_location 
												ON sector.sec_id = ?
												AND sector.sec_id = link_season_location.link_seas_id ');
				
				$qry->bindValue(1, $sec_id, PDO::PARAM_INT);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>