<?php
	
	/*
	 * Controller for customer displays
	 * This class handles the customer displays
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	require_once('CustomerController.php');
	 
	class DisplayController extends CustomerController {
		
		/**
		 * Name of called model
		 */
		private $model_name = 'Display';
		
		/**
		 * Name of called view
		 */
		private $view_name = 'display';
		
		/**
		 * The constructor of DisplayController
		 */
		public function __construct() {
			try {
				$this->init();
			} catch(Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Initialize the DisplayController class and their parents
		 */
		public function init() {
			try {
				parent::init();	
			} catch(Exception $e) {
				throw new Exception('Une erreur est survenue durant le chargement du module: '.$e->getMessage());
			}
			
			if (file_exists(_CUSTOMERS_MODELS_ .'/'. $this->model_name .'Model.php')) {			
				if(file_exists(_CUSTOMERS_VIEWS_ .'/'. $this->view_name .'.tpl')) {	
					require_once(_CUSTOMERS_MODELS_ .'/'. $this->model_name .'Model.php');
					
					try {
						$data = DisplayModel::getInstance()->display_customers();
						print_r($data);
						/*$customers[0] = new stdClass();
						$customers[1] = new stdClass();
						
						$customers[0]->renting_Id = 13;
						$customers[0]->firstName = 'Liechti';
						$customers[0]->lastName = 'Jeremie';
						$customers[0]->zipCode = '12000';
						$customers[0]->city = 'Rodez';
						$customers[0]->telephone = 'chatte';

						$customers[1]->renting_Id = 14;
						$customers[1]->firstName = 'Guagno';
						$customers[1]->lastName = 'Vincent';
						$customers[1]->zipCode = '12000';
						$customers[1]->city = 'Rodez';
						$customers[1]->telephone = 'AAAAAAAAAAAAAiiiiiiiiiiiiiiiiiigggggggggggghhhhhhhhhhhhhhhhhht';*/
						
						echo $this->twig->render($this->view_name .'.tpl', array('customers' => $data));
					} catch(Exception $e) {
						throw new Exception('Une erreur est survenue durant la récupération des données: '.$e->getMessage());
					}
				} else {
					throw new Exception('Le template "'.$this->view_name .'" n\'existe pas dans "'._CUSTOMERS_VIEWS_ .'"!');
				}
			} else {
				throw new Exception('Le modèle "'. $this->model_name .'" n\'existe pas dans "'._CUSTOMERS_MODELS_ .'"!');
			}
		}
		
		/**
	     * @see CustomerController::checkAccess()
	     * @return true if the controller is available for the current user/visitor, false any other cases
	     */
	    public function checkAccess() {
			return true;
	    }

		/**
		 * @see CustomerController::viewAccess()
		 * @return true if the current user/visitor has valid view permissions, false any other cases
		 */
		public function viewAccess() {
			return true;
		}
		
	}