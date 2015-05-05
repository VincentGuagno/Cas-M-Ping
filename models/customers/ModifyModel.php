<?php

	/*
	 * Model for customer modifications
	 * This class handles the modification of a customer
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class modifyModel {

		/**
		 * Modify all customer's informations from one customer 
		 *
		 * @param cust_id, customer's id
		 * @param cust_name, customer's name
		 * @param cust_address, customer's address
		 * @param cust_zipCode, customer's zip code
		 * @param cust_city, customer's city
		 * @param cust_phoneNumber, customer's phone number
		 * @param cust_recordNumber, customer's record number
		 * @return 0 without errors, exception message any others cases
		 */
		public function modify_customer($cust_id, $cust_name, $cust_address, $cust_zipCode, $cust_city, $cust_phoneNumber, $cust_addNumber) {
			try {
				$qry = $this->db->prepare('UPDATE camping.customer SET cust_name =?, cust_address =?, cust_postal_code =?, cust_city =?, cust_phone_number =?, cust_record_number =? WHERE cust_id =?');
				$qry->bindValue(1, $cust_name, PDO::PARAM_STR);
				$qry->bindValue(2, $cust_address, PDO::PARAM_STR);
				$qry->bindValue(3, $cust_zipCode, PDO::PARAM_STR);
				$qry->bindValue(4, $cust_city, PDO::PARAM_STR);
				$qry->bindValue(5, $cust_phoneNumber, PDO::PARAM_STR);
				$qry->bindValue(6, $cust_addNumber, PDO::PARAM_STR);
				$qry->bindValue(7, $cust_id, PDO::PARAM_INT);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>