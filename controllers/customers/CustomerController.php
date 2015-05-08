<?php
	
	/*
	 * Customer controller core
	 * This class is above all customer classes
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class CustomerController {
		
		/**
		 * State of CustomerController
		 */
		public static $initialized = false;
		
		/**
	     * Check that the controller is available for the current user/visitor
	     */
	    abstract public function checkAccess();

	    /**
	     * Check that the current user/visitor has valid view permissions
	     */
	    abstract public function viewAccess();
		
		/**
		 * The constructor of CustomerController
		 */
		public function __construct() {
			if (self::$initialized) {
				return;
			}
			self::$initialized = true;
		}
		
	}