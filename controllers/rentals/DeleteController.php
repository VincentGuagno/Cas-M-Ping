<?php
	
	/*
	 * Controller for rental deletions
	 * This class handles the deletion of a rental
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	public class DeleteController extends RentalController {
		
		/**
		 * The constructor of DeleteController
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