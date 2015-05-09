

<?php

	/*
	 * Model for caravan modifications
	 * This class handles the renting of a caravan
	 *
	 * @author Bastien VAUTIER
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	require_once('CaravanModel.php'); 
	class RentingModel extends CaravanModel {

		/**
		 * RentingModel instance
		 */
		public static $instance = null;
		
		/**
		 * Database object
		 */
		private $db = null;
		
		/**
		 * The constructor of RentingModel
		 */
		public function __construct() {
			try {
				RentingModel::init();
			} catch(Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Get current instance of RentingModel (singleton)
		 *
		 * @return RentingModel
		 */
		public static function getInstance() {
			if (!self::$instance) {
				self::$instance = new RentingModel();
			}
			return self::$instance;
		}
		
		/**
		 * Initialize the RentingModel class
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
		 * Rent a caravans.  You need to find the => rent_cust_id!
		 *		
		 * @param rent_name, caravans's name
		 * @param rent_begin, caravans's begin of the rent
		 * @param rent_end, caravans's end of the rent
		 * @param rent_nbPerson, nb of persone for the rent
		 * @param rent_locationState, 
		 * @param rent_cautionState,
		 * @param rent_daysNumber, 
		 * @param rent_price, caravans's price
		 * @param rent_custId, customer rent id
		 * @return 0 without errors, exception message any others cases
		 */
		public function renting_caravan($rent_name, $rent_begin, 
										$rent_end, $rent_nbPerson,
									 	$rent_locationState, $rent_cautionState,
									 	$rent_daysNumber,$rent_price , $rent_custId) {
			try {
				$qry = $this->db->prepare('INSERT INTO camping.rental (rent_id,
																	   rent_name, 
																	   rent_begin, 
																	   rent_end, 
																	   rent_nb_person, 
																	   rent_location_state, 
																	   rent_caution_state, 
																	   rent_days_number, 
																	   rent_price, 
																	   rent_cust_id) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
				


				$qry->bindValue(1, $rent_name, PDO::PARAM_STR);
				$qry->bindValue(2, $rent_begin, PDO::PARAM_STR);
				$qry->bindValue(3, $rent_end, PDO::PARAM_STR);
				$qry->bindValue(4, $rent_nbPerson, PDO::PARAM_STR);		
				$qry->bindValue(5, $rent_locationState, PDO::PARAM_STR);
				$qry->bindValue(6, $rent_cautionState, PDO::PARAM_STR);
				$qry->bindValue(7, $rent_daysNumber, PDO::PARAM_STR);
				$qry->bindValue(8, $rent_price, PDO::PARAM_STR);
				$qry->bindValue(9, $rent_custId, PDO::PARAM_STR);
				$qry->execute();
				$qry->closeCursor();
				return 0;
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
	}

?>