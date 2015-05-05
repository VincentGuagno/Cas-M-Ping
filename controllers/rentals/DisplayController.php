<?php
	
	/*
	 * Controller for rental displays
	 * This class handles the rental displays
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class DisplayController extends RentalController {
		
		/**
		 * The constructor of DisplayController
		 */
		public function __construct() {
			
		}
		
		/**
	     * @see RentalController::checkAccess()
	     * @return boolean
	     */
	    public function checkAccess() {
			return true;
	    }

		/**
		 * @see RentalController::viewAccess()
		 * @return boolean
		 */
		public function viewAccess() {
			return true;
		}
		
	}