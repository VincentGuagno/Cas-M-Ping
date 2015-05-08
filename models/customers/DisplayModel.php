<?php

	/*
	 * Model for customer modifications
	 * This class handles the display of a customer
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class displayModel extends CustomerModel{

		/**
		 * Display all customer's informations from one customer 
		 *
		 * @return 0 without errors, exception message any others cases
		 */
		public function display_customers() {
			try {
				$qry = $this->db->prepare('SELECT * FROM customer');	
                        								
				$qry->bindValue(1, $cust_id, PDO::PARAM_STR);				

				$qry->execute();
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetchAll(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * return customer's id
		 *	
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function display_customer($cust_id) {
			try {
				$qry = $this->db->prepare('SELECT * FROM customer WHERE customer.cust_id  =?');	
                        								
				$qry->bindValue(1, $cust_id, PDO::PARAM_STR);				

				$qry->execute();
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * return customer's id
		 *
		 * @param cust_firstName, customer's name
		 * @param cust_lastName, customer's name
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_customerId($cust_firstName, $cust_lastName) {
			try {
	
				$qry = $this->db->prepare('SELECT customer.cust_id FROM	customer
                        					WHERE customer.cust_firstName =? and customer.cust_lastName =?');	
                        								
				$qry->bindValue(1, $cust_firstName, PDO::PARAM_STR);
				$qry->bindValue(2, $cust_lastName, PDO::PARAM_STR);

				$qry->execute();
				//get customer's ID      put  the result into an object
				$return_qry = $this->db->fetch(PDO::FETCH_OBJ);

				$qry->closeCursor();
				return $return_qry;

			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		
	}

?>