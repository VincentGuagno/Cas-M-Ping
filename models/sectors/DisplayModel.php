

<?php

	/*
	 * Model for sectors modifications
	 * This class handles the display of a sectors
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel {

		
		/**
		* display all Sector's informations
		*
		* @param sec_id, sector's id
		*
		* @return 0 without errors, exception message any others cases
		*/	
		public function display_sectors() {
			try {
				$qry = $this->db->prepare('SELECT * FROM sector');	
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
		* all Sector's informations from one customer 
		*
		* @param sec_id, sector's id
		*
		* @return 0 without errors, exception message any others cases
		*/	
		public function display_sector($sec_id) {
		try {
			$qry = $this->db->prepare('SELECT sec_name FROM sector WHERE sec_id');	
			$qry->bindValue(1, $sec_id, PDO::PARAM_INT);
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