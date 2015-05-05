<?php

	/*
	 * Model for sectors modifications
	 * This class handles the add  of a sector
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class addModel {

		/**
		 * Add new sector 
		 *
		 * @param sec_name, sector's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function add_sector($sec_name) {
			try {
				$qry = $this->db->prepare('INSERT INTO camping.sector (sec_id, sec_name) VALUES (NULL, theSecName)');
				$qry->bindValue(1, $sec_name, PDO::PARAM_STR);			
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>