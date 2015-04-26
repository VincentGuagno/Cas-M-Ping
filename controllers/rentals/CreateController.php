<?php
	
	/*
	 * Controller for rental creations
	 * This class handles the creation of a rental
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class CreateController extends RentalController {
		
		/**
		 * The constructor of CreateController
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