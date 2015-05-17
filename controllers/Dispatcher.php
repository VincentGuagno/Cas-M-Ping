<?php
	
	/*
	 * Dispatcher for all controllers
	 * This class handles the routes for all controllers
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class Dispatcher {
		
		/**
		 * Dispatcher instance
		 */
		public static $instance = null;

		/**
		 * Current request uri
		 */
		private $request_uri;
		
		/**
		 * Current controller directory and name
		 */
		private $controller = array(
			'directory',
			'controller',
			'formatter'
			);
			
		
		/**
		 * Any routes for application
		 */
		private $routes = array(
			
			'display-home' => array(
				'controller' => 'DisplayController',
				'directory' => 'rentals/',
				'url-formatter' => '/'
			),
			
			// Caravan routes
			'display-caravans' => array(
				'controller' => 'DisplayController',
				'directory' => 'caravans/',
				'url-formatter' => 'caravans/show/{id|all}'
			),
			'renting-caravans' => array(
				'controller' => 'RentingController',
				'directory' => 'caravans/',
				'url-formatter' => 'caravans/renting'
			),
			'confirm-renting-caravans' => array(
				'controller' => 'ConfirmAddController',
				'directory' => 'caravans/',
				'url-formatter' => 'caravans/renting/confirm'
			),
			'return-caravans' => array(
				'controller' => 'ReturnController',
				'directory' => 'caravans/',
				'url-formatter' => 'caravans/return/{id|all}'
			),
			
			// Customer routes
			'add-customers' => array(
				'controller' => 'AddController',
				'directory' => 'customers/',
				'url-formatter' => 'customers/add'
			),
			'confirm-add-customers' => array(
				'controller' => 'ConfirmAddController',
				'directory' => 'customers/',
				'url-formatter' => 'customers/add/confirm'
			),
			'delete-customers' => array(
				'controller' => 'DeleteController',
				'directory' => 'customers/',
				'url-formatter' => 'customers/delete/{id|all}'
			),
			'display-customers' => array(
				'controller' => 'DisplayController',
				'directory' => 'customers/',
				'url-formatter' => 'customers/show/{id|all}'
			),
			'modify-customers' => array(
				'controller' => 'ModifyController',
				'directory' => 'customers/',
				'url-formatter' => 'customers/modify/{id}'
			),
			'confirm-modify-customers' => array(
				'controller' => 'ConfirmModifyController',
				'directory' => 'customers/',
				'url-formatter' => 'customers/modify/confirm/{id}'
			),
			
			// Home routes
			'home' => array(
				'controller' => 'DisplayController',
				'directory' => 'home/',
				'url-formatter' => 'home'
			),
			
			// Location routes
			'create-locations' => array(
				'controller' => 'CreateController',
				'directory' => 'locations/',
				'url-formatter' => 'locations/add'
			),
			'delete-locations' => array(
				'controller' => 'DeleteController',
				'directory' => 'locations/',
				'url-formatter' => 'locations/delete/{id|all}'
			),
			'display-locations' => array(
				'controller' => 'DisplayController',
				'directory' => 'locations/',
				'url-formatter' => 'locations/show/{id|all}'
			),
			'modify-locations' => array(
				'controller' => 'ModifyController',
				'directory' => 'locations/',
				'url-formatter' => 'locations/modify/{id}'
			),
			
			// Rental routes
			'cancel-rentals' => array(
				'controller' => 'CancelController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/cancel/{id|all}'
			),
			'check-settings-rentals' => array(
				'controller' => 'CheckSettingsController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/settings/{id}'
			),
			'create-rentals' => array(
				'controller' => 'CreateController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/create'
			),
			'delete-rentals' => array(
				'controller' => 'DeleteController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/delete/{id|all}'
			),
			'display-rentals' => array(
				'controller' => 'DisplayController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/show/{id|all}'
			),
			'modify-rentals' => array(
				'controller' => 'ModifyController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/modify/{id}'
			),
			'confirm-modify-rentals' => array(
				'controller' => 'ConfirmModifyController',
				'directory' => 'rentals/',
				'url-formatter' => 'rentals/modify/confirm/{id}'
			),
			
			// Season routes
			'add-seasons' => array(
				'controller' => 'AddController',
				'directory' => 'seasons/',
				'url-formatter' => 'seasons/add'
			),
			'confirm-add-seasons' => array(
				'controller' => 'ConfirmAddController',
				'directory' => 'seasons/',
				'url-formatter' => 'seasons/add/confirm'
			),
			'delete-seasons' => array(
				'controller' => 'DeleteController',
				'directory' => 'seasons/',
				'url-formatter' => 'seasons/delete/{id|all}'
			),
			'display-seasons' => array(
				'controller' => 'DisplayController',
				'directory' => 'seasons/',
				'url-formatter' => 'seasons/show/{id|all}'
			),
			'modify-seasons' => array(
				'controller' => 'ModifyController',
				'directory' => 'seasons/',
				'url-formatter' => 'seasons/modify/{id}'
			),
			'confirm-modify-seasons' => array(
				'controller' => 'ConfirmModifyController',
				'directory' => 'seasons/',
				'url-formatter' => 'seasons/modify/confirm/{id}'
			),
			
			// Sector routes
			'add-sectors' => array(
				'controller' => 'AddController',
				'directory' => 'sectors/',
				'url-formatter' => 'sectors/add'
			),
			'delete-sectors' => array(
				'controller' => 'DeleteController',
				'directory' => 'sectors/',
				'url-formatter' => 'sectors/delete/{id|all}'
			),
			'display-sectors' => array(
				'controller' => 'DisplayController',
				'directory' => 'sectors/',
				'url-formatter' => 'sectors/show/{id|all}'
			),
			'modify-sectors' => array(
				'controller' => 'ModifyController',
				'directory' => 'sectors/',
				'url-formatter' => 'sectors/modify/{id}'
			),
			
			// Visitor routes
			'add-visitors' => array(
				'controller' => 'AddController',
				'directory' => 'visitors/',
				'url-formatter' => 'visitors/add'
			),
			'delete-visitors' => array(
				'controller' => 'DeleteController',
				'directory' => 'visitors/',
				'url-formatter' => 'visitors/delete/{id|all}'
			),
			'display-visitors' => array(
				'controller' => 'DisplayController',
				'directory' => 'visitors/',
				'url-formatter' => 'visitors/show/{id|all}'
			),
			'modify-visitors' => array(
				'controller' => 'ModifyController',
				'directory' => 'visitors/',
				'url-formatter' => 'visitors/modify/{id}'
			),
			
			// Errors routes
			'403-errors' => array(
				'controller' => '403Controller',
				'directory' => 'errors/',
				'url-formatter' => 'errors/403'
			),
			'404-errors' => array(
				'controller' => '404Controller',
				'directory' => 'errors/',
				'url-formatter' => 'errors/404'
			),
			'500-errors' => array(
				'controller' => '500Controller',
				'directory' => 'errors/',
				'url-formatter' => 'errors/500'
			)
		);

		/**
		 * The constructor of Dispatcher
		 */
		public function __construct() {
			$this->request_uri = null;
			$this->controller = null;
		}
		
		/**
		 * Get current instance of Dispatcher (singleton)
		 *
		 * @return Dispatcher
		 */
		public static function getInstance() {
			if (!self::$instance) {
				self::$instance = new Dispatcher();
			}
			return self::$instance;
		}
		
		/**
		 * Find the controller and instantiate it
		 */
		public function dispatch() {
			try {
				Dispatcher::get_requestUri();

				foreach ($this->routes as $key => $value) {
					if (Dispatcher::hasRoute($this->routes[$key]['url-formatter'])) {
						$this->controller['directory'] = $this->routes[$key]['directory'];
						$this->controller['controller'] = $this->routes[$key]['controller'];
						$this->controller['formatter'] = $this->routes[$key]['url-formatter'];
						break;
					}
				}
				
				if($this->request_uri == null) {
					header('Location: /'._PROJECT_NAME_ .'/rentals/show/all');
				}
				
				if($this->controller == null) {
					$this->controller['directory'] = $this->routes['404-errors']['directory'];
					$this->controller['controller'] = $this->routes['404-errors']['controller'];
					$this->controller['formatter'] = $this->routes['404-errors']['url-formatter'];
				}
				
				if (file_exists(_CONTROLLERS_DIR_ .'/Tools.php')) {
					require_once(_CONTROLLERS_DIR_ .'/Tools.php');		
				} else {
					throw new Exception('Fichier "'._CONTROLLERS_DIR_ .'/Tool.php" introuvable!');
				}	
				
				if (file_exists(_CONTROLLERS_DIR_ .'/'.$this->controller['directory'].$this->controller['controller'].'.php')) {
					require_once(_CONTROLLERS_DIR_ .'/'.$this->controller['directory'].$this->controller['controller'].'.php');		
				} else {
					throw new Exception('Fichier "'._CONTROLLERS_DIR_ .'/'.$this->controller['directory'].$this->controller['controller'].'.php" introuvable!');
				}
				
				Tools::getInstance()->createPost($_POST); 
				Tools::getInstance()->createUrl($this->controller['controller'], $this->request_uri);
				$controllerInstance = new $this->controller['controller']();
				
				if(!$controllerInstance->checkAccess() || !$controllerInstance->viewAccess()) {
					$this->controller['directory'] = $this->routes['403-errors']['directory'];
					$this->controller['controller'] = $this->routes['403-errors']['controller'];
					$this->controller['formatter'] = $this->routes['403-errors']['url-formatter'];
					
					if (file_exists(_CONTROLLERS_DIR_ .'/'.$this->controller['directory'].$this->controller['controller'].'.php')) {
						require_once(_CONTROLLERS_DIR_ .'/'.$this->controller['directory'].$this->controller['controller'].'.php');		
					} else {
						throw new Exception('Fichier "'._CONTROLLERS_DIR_ .'/'.$this->controller['directory'].$this->controller['controller'].'.php" introuvable!');
					}
					
					$controllerInstance = new $this->controller['controller']();
				}
			} catch (Exception $e) {
				throw new Exception('Une erreur est survenue durant la phase de routage: '.$e->getMessage());
			}
		}
		
		/**
		 * Get request's uri
		 */
		private function get_requestUri() {
			if (isset($_SERVER['REQUEST_URI'])) { // Any servers without IIS 
				$this->request_uri = $_SERVER['REQUEST_URI'];
			} elseif (isset($_SERVER['HTTP_X_REWRITE_URL'])) { // IIS only
				$this->request_uri = $_SERVER['HTTP_X_REWRITE_URL'];
			} else {
				$this->request_uri = null;
			}
			
			$this->request_uri = substr($this->request_uri, strlen(_PROJECT_NAME_)+2);
		}
		
		/**
		 * Check if the route exists
		 *
		 * @param route, route to test
		 * @return true if exist, false any others cases
		 */
		private function hasRoute($route) {
			if(preg_match('#errors/[0-9]{3}$#', $this->request_uri)) {
				return (preg_match('#^'.$this->request_uri .'$#', $route)) ? true : false;
			} elseif (preg_match('#/[0-9]{1,}$#', $this->request_uri) || (preg_match('#all$#', $this->request_uri) && preg_match('#{(.*)all(.*)}$#', $route))) {
				$urlBody = preg_replace('#^(.+)/(.+)$#', '$1', $this->request_uri);
				return (preg_match('#^'.$urlBody.'/(.+)#', $route)) ? true : false;
			} else {
				return (preg_match('#^'.$this->request_uri .'$#', $route)) ? true : false;
			}
		}	
	}