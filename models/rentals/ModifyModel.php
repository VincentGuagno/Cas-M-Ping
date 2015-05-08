<?php

	/*
	 * Model for rental modifications
	 * This class handles the creation of a rental
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class ModifyModel {
		
		/**
		 * Modify all rental's informations from one rental 
		 *
		 * @param iii, rental's id
		 * @param iii, rental's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function modify_model() {
			try {
				$qry = $this->db->prepare('UPDATE INTO iii (iii) VALUES (NULL, ?, ?)');
				$qry->bindValue(1, $iii, PDO::PARAM_STR);
				$qry->bindValue(2, $iii, PDO::PARAM_STR);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>