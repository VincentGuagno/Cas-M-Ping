<?php
	/*
	 * Model for customer modifications
	 * This class handles the add  of a customer
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	class CustomerModel {
		
		/**
		 * Initialize the CustomerModel class
		 */
		public function init() {}
		
		/**
		 * Modify customer's informations
		 *
		 * @param cust_firstName, customer's name
		 * @param cust_lastName, customer's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function has_customer($cust_firstName, $cust_lastName) {
			try {
	
				$qry = $this->db->prepare('SELECT customer.cust_id FROM customer 
											WHERE customer.cust_firstName = ? AND customer.cust_lastName =?');	

				$qry->bindValue(1, $cust_firstName, PDO::PARAM_STR);
				$qry->bindValue(2, $cust_lastName, PDO::PARAM_STR);

				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		
	}