<?php

	/*
	 * Model for rental modifications
	 * This class handles the creation of a rental
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	require_once('RentalModel.php'); 
	class CreateModel extends RentalModel{
		
		/**
		 * CreateModel instance
		 */
		public static $instance = null;
		
		/**
		 * Database object
		 */
		private $db = null;
		
		/**
		 * The constructor of CreateModel
		 */
		public function __construct() {
			try {
				CreateModel::init();
			} catch(Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Get current instance of CreateModel (singleton)
		 *
		 * @return CreateModel
		 */
		public static function getInstance() {
			if (!self::$instance) {
				self::$instance = new CreateModel();
			}
			return self::$instance;
		}
		
		/**
		 * Initialize the CreateModel class
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
		 * Modify all rental's informations from one rental 
		 *
		 * @param iii, rental's id
		 * @param iii, rental's name
		 * @return 0 without errors, exception message any others cases
		 */
		public function create_rental() {
			try {
				$qry = $this->db->prepare('INSERT INTO iii (iii) VALUES (NULL, ?, ?)');
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