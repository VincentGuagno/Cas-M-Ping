<?php
	
	/*
	 * Controller for season displays
	 * This class handles the season displays
	 *
	 * @author J�r�mie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	require_once('SeasonController.php');
	 
	class DisplayController extends SeasonController {
		
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
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		
		/**
		 * Initialize the DisplayController class and their parents
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
				
				if ($controller == 'DisplayController') {
					if (file_exists (_SEASONS_MODELS_ .'/'. $this->model_name .'Model.php')) {			
						if (file_exists (_SEASONS_VIEWS_ .'/'. $this->view_name .'.tpl')) {	
							try {	
								require_once (_SEASONS_MODELS_ .'/'. $this->model_name .'Model.php');
								$id = Tools::getInstance()->getUrl_id($url);
								
								switch ($id) {
									case 'all':
										$data = \Season\DisplayModel::getInstance()->display_seasons();
										break;
									default:
										$data = \Season\DisplayModel::getInstance()->display_season($id);
										break;
								}
								echo $this->twig->render($this->view_name .'.tpl', array('seasons' => $data, 'bootstrapPath' => _BOOTSTRAP_FILE_));
								
							} catch (Exception $e) {
								throw new Exception('Une erreur est survenue durant la r�cup�ration des donn�es: '.$e->getMessage());
							}
						} else {
							throw new Exception('Le template "'.$this->view_name .'" n\'existe pas dans "'._SEASONS_VIEWS_ .'"!');
						}
					} else {
						throw new Exception('Le mod�le "'. $this->model_name .'" n\'existe pas dans "'._SEASONS_MODELS_ .'"!');
					}
				} else {
					throw new Exception('Une erreur est survenue durant la phase de routage!');
				}
			} else {
				throw new Exception('L\'URL n\'est pas �valuable!');
			}
		}
		
		/**
	     * @see SeasonController::checkAccess()
	     * @return true if the controller is available for the current user/visitor, false any other cases
	     */
	    public function checkAccess() {
			return true;
	    }

		/**
		 * @see SeasonController::viewAccess()
		 * @return true if the current user/visitor has valid view permissions, false any other cases
		 */
		public function viewAccess() {
			return true;
		}
		
	}