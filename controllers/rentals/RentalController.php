<?php
	
	/*
	 * Rentals controller core
	 * This class is above all rentals classes
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class RentalController {
		
		/**
	     * Check that the controller is available for the current user/visitor
	     */
	    abstract public function checkAccess();

	    /**
	     * Check that the current user/visitor has valid view permissions
	     */
	    abstract public function viewAccess();
		
		/**
		 * The constructor of RentalController
		 */
		public function __construct() {
		
		}
		
	}