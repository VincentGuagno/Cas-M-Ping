<?php
	
	/*
	 * Controller for new sector
	 * This class handles new sectors
	 *
	 * @author J�r�mie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	require_once('SectorController.php');
	 
	class AddController extends SectorController {
		
		/**
		 * Name of called view
		 */
		private $view_name = 'add';
		
		/**
		 * The constructor of AddController
		 */
		public function __construct() {
			try {
				$this->init();
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Initialize the AddController class and their parents
		 */
		public function init() {
			try {
				parent::init();	
			} catch (Exception $e) {
				throw new Exception('Une erreur est survenue durant le chargement du module: '.$e->getMessage());
			}
			
			if (file_exists (_CONTROLLERS_DIR_ .'/Tools.php')) {
				$url = Tools::getInstance()->request_url;
				$url .= '&id=ukn';
				$controller = Tools::getInstance()->getUrl_controller($url);
				
				if ($controller == 'AddController') {		
					if (file_exists (_SECTORS_VIEWS_ .'/'. $this->view_name .'.tpl')) {	
						try {	
							echo $this->twig->render($this->view_name .'.tpl', array('bootstrapPath' => _BOOTSTRAP_FILE_));
							
						} catch (Exception $e) {
							throw new Exception('Une erreur est survenue durant l\'affichage des donn�es: '.$e->getMessage());
						}
					} else {
						throw new Exception('Le template "'.$this->view_name .'" n\'existe pas dans "'._SECTORS_VIEWS_ .'"!');
					}
				} else {
					throw new Exception('Une erreur est survenue durant la phase de routage!');
				}
			} else {
				throw new Exception('L\'URL n\'est pas �valuable!');
			}
		}
		
		/**
	     * @see SectorController::checkAccess()
	     * @return true if the controller is available for the current user/visitor, false any other cases
	     */
	    public function checkAccess() {
			return true;
	    }

		/**
		 * @see SectorController::viewAccess()
		 * @return true if the current user/visitor has valid view permissions, false any other cases
		 */
		public function viewAccess() {
			return true;
		}		
	}