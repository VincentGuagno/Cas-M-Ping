<?php
	
	/*
	 * Controller for customer displays
	 * This class handles the customer displays
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	require('CustomerController.php');
	 
	class DisplayController extends CustomerController {
		
		/**
		 * The constructor of DisplayController
		 */
		public function __construct() {
			DisplayController::init();
		}
		
		/**
		 * Initialize the DisplayController class and their parents
		 */
		public function init()
		{
			parent::init();	
			$template = $this->twig->loadTemplate('display.tpl');
					
			$customers[0] = new stdClass();
			$customers[1] = new stdClass();
			
			$customers[0]->renting_Id = 13;
			$customers[0]->firstName = 'Liechti';
			$customers[0]->lastName = 'Jeremie';
			$customers[0]->zipCode = '12000';
			$customers[0]->city = 'Rodez';
			$customers[0]->telephone = 'chatte';

			$customers[1]->renting_Id = 14;
			$customers[1]->firstName = 'Guagno';
			$customers[1]->lastName = 'Vincent';
			$customers[1]->zipCode = '12000';
			$customers[1]->city = 'Rodez';
			$customers[1]->telephone = 'AAAAAAAAAAAAAiiiiiiiiiiiiiiiiiigggggggggggghhhhhhhhhhhhhhhhhht';
			
			echo $template->render(array('customers' => $customers));
		}
		
		/**
	     * @see CustomerController::checkAccess()
	     * @return true if the controller is available for the current user/visitor, false any other cases
	     */
	    public function checkAccess() {
			return true;
	    }

		/**
		 * @see CustomerController::viewAccess()
		 * @return true if the current user/visitor has valid view permissions, false any other cases
		 */
		public function viewAccess() {
			return true;
		}
		
	}