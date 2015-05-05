<?php

	/*
	 * Model for season modifications
	 * This class handles the modification of a season
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class modifyModel {

		/**
		 * Modify season's informations
		 *
		 * @param seas_id n seas'id
		 * @param seas_name, season's name
		 * @param seas_StartDate, season's begin
		 * @param seas_EndDate, season's end
		 * @param seas_coeff, season's coeff
		 * @return 0 without errors, exception message any others cases
		 */
		public function modify_season($seas_id, $seas_name, $seas_StartDate, $seas_EndDate, $seas_coeff) {
			try {
				$qry = $this->db->prepare('UPDATE season SET seas_name = "?",seas_start_date = "?", seas_end_date = "?",seas_coeff = "?" WHERE seas_id = ?');
				$qry->bindValue(1, $seas_name, PDO::PARAM_STR);
				$qry->bindValue(2, $seas_StartDate, PDO::PARAM_STR);
				$qry->bindValue(3, $seas_EndDate, PDO::PARAM_STR);
				$qry->bindValue(4, $seas_coeff, PDO::PARAM_STR);					
				$qry->bindValue(5, $seas_id, PDO::PARAM_INT);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>