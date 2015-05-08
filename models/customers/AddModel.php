<?php

	/*
	 * Model for customer modifications
	 * This class handles the add  of a customer
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class addModel extends CustomerModel{
		
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
		public function add_customer($cust_name, $cust_address, $cust_zipCode, $cust_city, $cust_phoneNumber, $cust_recordNumber) {
			try {
				$qry = $this->db->prepare('INSERT INTO `camping`.`customer` (`cust_id`, `cust_name`, `cust_address`, `cust_postal_code`, `cust_city`, `cust_phone_number`, `cust_record_number`) VALUES (NULL, ?, ?, ?, ?, ?, ?)');
				$qry->bindValue(1, $cust_name, PDO::PARAM_STR);
				$qry->bindValue(2, $cust_address, PDO::PARAM_STR);
				$qry->bindValue(3, $cust_zipCode, PDO::PARAM_STR);
				$qry->bindValue(4, $cust_city, PDO::PARAM_STR);
				$qry->bindValue(5, $cust_phoneNumber, PDO::PARAM_STR);
				$qry->bindValue(6, $cust_recordNumber, PDO::PARAM_STR);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}



	//je cherche si il existe un CLI_ID dans CLIENT ou CLI_NOM = param et CLI_PRENOM = param2. Si il existe je le crée pas et j'utilise cet id pour l'insérer dans LOCATION. Sinon je le crée et je récupère son CLI_ID que je met dans LOCATION.
	
	}
	
?>