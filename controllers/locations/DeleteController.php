<?php
	
	/*
	 * Controller for location deletions
	 * This class handles the locations deletions
	 *
	 * @author J�r�mie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	require_once('LocationController.php');
	 
	class DeleteController extends LocationController {
		
		/**
		 * Name of called model
		 */
		private $model_name = 'Delete';
		
		/**
		 * The constructor of DeleteController
		 */
		public function __construct() {
			try {
				$this->init();
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Initialize the DeleteController class and their parents
		 */
		public function init() {
			try {
				parent::init();	
			} catch (Exception $e) {
				throw new Exception('Une erreur est survenue durant le chargement du module: '.$e->getMessage());
			}
			
			if (file_exists (_CONTROLLERS_DIR_ .'/Tools.php')) {
				$url = Tools::getInstance()->request_url;
				$controller = Tools::getInstance()->getUrl_controller($url);
				
				if ($controller == 'DeleteController') {
					if (file_exists (_LOCATIONS_MODELS_ .'/'. $this->model_name .'Model.php')) {				
						try {	
							require_once (_LOCATIONS_MODELS_ .'/'. $this->model_name .'Model.php');
							$id = Tools::getInstance()->getUrl_id($url);

							switch ($id) {
								case 'all':
									\Location\DeleteModel::getInstance()->delete_locations();
									break;
								default:
									if(\Location\DeleteModel::getInstance()->has_location($id) == 1) {
										\Location\DeleteModel::getInstance()->delete_location($id);	
									} else {
										header('Location: /Cas-M-Ping/errors/404');
									}	
									break;
							}
							header('Location: /Cas-M-Ping/locations/show/all');
							
						} catch (Exception $e) {
							throw new Exception('Une erreur est survenue durant la modification des donn�es: '.$e->getMessage());
						}
					} else {
						throw new Exception('Le mod�le "'. $this->model_name .'" n\'existe pas dans "'._LOCATIONS_MODELS_ .'"!');
					}
				} else {
					throw new Exception('Une erreur est survenue durant la phase de routage!');
				}
			} else {
				throw new Exception('L\'URL n\'est pas �valuable!');
			}
		}
		
		/**
	     * @see LocationController::checkAccess()
	     * @return true if the controller is available for the current user/visitor, false any other cases
	     */
	    public function checkAccess() {
			return true;
	    }

		/**
		 * @see LocationController::viewAccess()
		 * @return true if the current user/visitor has valid view permissions, false any other cases
		 */
		public function viewAccess() {
			return true;
		}
		
	}