

<?php

	/*
	 * Model for customer modifications
	 * This class handles the display of a customer
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel {


	
		/**
		* display all customer's informations from one customer 
		*
		* @return 0 without errors, exception message any others cases
		*/

		public function display_customers() {
			try {
				$qry = $this->db->prepare('SELECT * FROM customer ORDER BY customer.cust_name DESC');	
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
		* all customer's informations from one customer 
		*
		* @return 0 without errors, exception message any others cases
		*/
		public function display_customer($cust_id) {
			try {
				$qry = $this->db->prepare('SELECT * FROM customer WHERE cust_id = ?');	
				$qry->bindValue(1, $cust_id, PDO::PARAM_INT);
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