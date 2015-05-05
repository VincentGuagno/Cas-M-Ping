

<?php

	/*
	 * Model for sectors modifications
	 * This class handles the modification of a sectors
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */


	class modifyModel {
	
		/**
		* modify sector's informations
		*
		* @param sec_id, sector's id
		* @param sec_name, sec_name's id
		*
		* @return 0 without errors, exception message any others cases
		*/	
		public function modify_sector($sec_id, $sec_name) {
			try {
				$qry = $this->db->prepare('UPDATE sector SET sec_name="?" WHERE sec_id = ?');
				$qry->bindValue(1, $sec_id, PDO::PARAM_INT);
				$qry->bindValue(2, $sec_name, PDO::PARAM_STR);
				
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