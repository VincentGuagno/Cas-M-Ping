<?php
	
	/*
	 * Controller tools
	 * This class contains many functions to configure controllers
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	require __DIR__ .'/ini.php'; // importation of configuration's file
	
	class Util {
		
		/**
		 * getDomain returns domain's name according to configuration
		 * @return the domain's name, cast to string (project's directory)
		 */
		public static function getDomain() {
			return _BASE_URL_;
		}
		
		/**
		 * getModelsDirectory returns models's directory according
		 * to configuration
		 * @return the models's directory, cast to string 
		 */
		public static function getModelsDirectory() {
			return _MODELS_DIR_;
		}
		
		/**
		 * getViewsDirectory returns models's directory according
		 * to configuration
		 * @return the views's directory, cast to string
		 */
		public static function getViewsDirectory() {
			return _VIEWS_DIR_;
		}
		
		/**
		 * getControllersDirectory returns controllers's directory according
		 * to configuration
		 * @return the controllers's directory, cast to string
		 */
		public static function getControllersDirectory() {
			return _CONTROLLERS_DIR_;
		}
		
		/**
		 * getDependenciesDirectory returns dependencies's directory
		 * according to configuration
		 * @return the dependencies's directory, cast to string
		 */
		public static function getDependenciesDirectory() {
			return _DEPENDENCIES_DIR_;
		}
		
		/**
		 * safeOutput returns a secure string
		 * @return the secure string
		 */
		public static function safeOutput($string) {
			return htmlentities(   
				strip_tags($string),    // deletes all HTML & PHP signs 
				ENT_QUOTES,             // converts ' & " 
				'utf-8'                 // uses UTF-8 encodage
			);
		}
		
	}