<?php

	/*
	 * Model for location modifications
	 * This class handles the display of a location
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	require_once('LocationModel.php'); 
	class DisplayModel extends LocationModel{
	

		/**
		 * DisplayModel instance
		 */
		public static $instance = null;
		
		/**
		 * Database object
		 */
		private $db = null;
		
		/**
		 * The constructor of DisplayModel
		 */
		public function __construct() {
			try {
				DisplayModel::init();
			} catch(Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Get current instance of DisplayModel (singleton)
		 *
		 * @return DisplayModel
		 */
		public static function getInstance() {
			if (!self::$instance) {
				self::$instance = new DisplayModel();
			}
			return self::$instance;
		}
		
		/**
		 * Initialize the DisplayModel class
		 */
		public function init() {
			try {
				parent::init();	
			} catch(Exception $e) {
				throw new Exception('Une erreur est survenue durant le chargement du module: '.$e->getMessage());
			}
			try {	
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$this->db = new PDO('mysql:host='._HOST_ .';dbname='._DATABASE_, _LOGIN_, _PASSWORD_, $pdo_options);
				$this->db->exec('SET NAMES utf8');
			} catch(Exception $e) {
				throw new Exception('Connexion à la base de données impossible: '.$e->getMessage());
			}
		}

		/**
		 * All location's informations
		 * @param loc_id, location's id
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function display_locations() {
			try {

				$qry = $this->db->prepare('SELECT  sector.sec_name,
												   type_location.type_location_name,
												   type_location.type_location_price FROM location 
												   INNER JOIN sector ON  sector.sec_id = location.loc_sec_id
												   INNER JOIN type_location ON location.loc_type_id = type_location.type_location_id
												   ORDER BY location.loc_id');
				
				$qry->execute();
					//put  the result into an object
				$return_qry = $qry->fetchAll();
				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * All customer's informations from one customer 
		 * @param loc_id, location's id
		 * @return return_qry : result into an object, exception message any others cases
		 */		
		public function display_location($loc_id) {
			try {
				$qry = $this->db->prepare('SELECT * FROM location WHERE loc_id = ?');	
				$qry->bindValue(1, $loc_id, PDO::PARAM_INT);
				$qry->execute();
					//put  the result into an object
				$return_qry = $qry->fetchAll();
				$qry->closeCursor();
				return $return_qry;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

		/**
		 * return location's id
		 *
		 * @param loc_id, location's name		
		 * @return return_qry : result into an object, exception message any others cases
		 */
		public function get_LocationId($loc_id) {
			try {
	
				$qry = $this->db->prepare('SELECT * FROM location WHERE loc_id = ?');	
                        								
				$qry->bindValue(1, $loc_id, PDO::PARAM_STR);
				
				$qry->execute();
					//put  the result into an object
				$return_qry = $qry->fetchAll();
				$qry->closeCursor();
				return $return_qry;

			} catch(Exception $e) {
				return $e->getMessage();
			}
		}

	}

?>