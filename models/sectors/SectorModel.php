<?php
	/*
	 * Model for sector modifications
	 * This class handles the add  of a sector
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	public class class sectorModel {
	
		/**
		 * Modify sector's informations
		 *
		 * @param sec_id, sector's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function has_sector($sec_id) {
			try {
	
				$qry = $this->db->prepare('SELECT sector.sec_id FROM sector WHERE sector.sec_id = ?');	

				$qry->bindValue(1, $sec_id, PDO::PARAM_STR);				

				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		
	}
?>