<?php
	
	/*
	 * Customer controller core
	 * This class is above all customer classes
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	abstract class CustomerController {
		
		/**
		 * State of CustomerController
		 */
		public static $initialized = false;
		
		/**
	     * Check that the controller is available for the current user/visitor
	     */
	    abstract protected function checkAccess();

	    /**
	     * Check that the current user/visitor has valid view permissions
	     */
	    abstract protected function viewAccess();
		
		/**
		 * Twig's instance (template's engine)
		 */
		public $twig = null;
		
		/**
		 * Initialize the CustomerController class
		 */
		public function init() {
			if (self::$initialized) {
				return;
			}
			self::$initialized = true;
			
			if(file_exists(_TWIG_AUTOLOADER_)) {
				require_once(_TWIG_AUTOLOADER_);
				
				Twig_Autoloader::register();
			
				$loader = new Twig_Loader_Filesystem(_CUSTOMERS_VIEWS_); 
				$this->twig = new Twig_Environment($loader, array(
				  'cache' => _TWIG_CACHE_
				));
			} else {
				throw new Exception('Il n\'existe pas le fichier de démarrage Twig à cet emplacement "'._TWIG_AUTOLOADER_ .'"!');
			}
		}
	}