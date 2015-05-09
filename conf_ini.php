<?php
	
	/*
	 * Configuration settings
	 * This file contains all constants settings for application
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */
	 
	/**
	 * Models's directory
	 */
	define('_MODELS_DIR_', __DIR__ .'/models');
	
	/**
	 * Views's directory
	 */
	define('_VIEWS_DIR_', __DIR__ .'/views');
	
	/**
	 * Controllers's directory
	 */
	define('_CONTROLLERS_DIR_', __DIR__ .'/controllers');
	
	/**
	 * Dependencies's directory
	 */
	define('_DEPENDENCIES_DIR_', __DIR__ .'/dependencies');
	
	/**
	 * Project's name
	 */
	define('_PROJECT_NAME_', 'Cas-M-Ping');
	
	/**
	 * Domain's path
	 */
	define('_BASE_URL_', __DIR__ .'/'. _PROJECT_NAME_);
	
	/**
	 * Put Twig's results into cache part
	 */
	define('_TWIG_CACHE_', false);