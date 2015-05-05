<?php
	
	/*
	 * Controller for rental cancellations
	 * This class handles canceled rental
	 *
	 * @author Jérémie LIECHTI
	 * @version 0.0.1
	 * @copyright 2015 3iL
	 */

	class CancelController extends RentalController {
		
		/**
		 * The constructor of CancelController
		 */
		public function __construct() {
			
		}
		
		/**
		 * Initialize cancel controller
		 * @see FrontController::init()
		 */
		public function init()
		{
			/*
			 * Globals are DEPRECATED as of version 1.5.
			 * Use the Context to access objects instead.
			 * Example: $this->context->cart
			 */
			global $useSSL, $cookie, $smarty, $cart, $iso, $defaultCountry, $protocol_link, $protocol_content, $link, $css_files, $js_files, $currency;

			parent::init();

			// For compatibility with globals, DEPRECATED as of version 1.5
			$css_files = $this->css_files;
			$js_files = $this->js_files;

			if ($this->ajax)
			{
				$this->display_header = false;
				$this->display_footer = false;
			}

			ob_start();

			// Init cookie language
			// @TODO This method must be moved into switchLanguage
			Tools::setCookieLanguage($this->context->cookie);

			$this->context->link = $link;

			if ($this->auth && !$this->context->customer->isLogged($this->guestAllowed))
				Tools::redirect('index.php?controller=authentication'.($this->authRedirection ? '&back='.$this->authRedirection : ''));

			
			
			
			/* get page name to display it in body id */

		
			if (!empty($this->page_name))
				$page_name = $this->page_name;
			elseif (!empty($this->php_self))
				$page_name = $this->php_self;
			elseif (Tools::getValue('fc') == 'module' && $module_name != '' && (Module::getInstanceByName($module_name) instanceof PaymentModule))
				$page_name = 'module-payment-submit';
			// @retrocompatibility Are we in a module ?
			elseif (preg_match('#^'.preg_quote($this->context->shop->physical_uri, '#').'modules/([a-zA-Z0-9_-]+?)/(.*)$#', $_SERVER['REQUEST_URI'], $m))
				$page_name = 'module-'.$m[1].'-'.str_replace(array('.php', '/'), array('', '-'), $m[2]);
			else
			{
				$page_name = Dispatcher::getInstance()->getController();
				$page_name = (preg_match('/^[0-9]/', $page_name) ? 'page_'.$page_name : $page_name);
			}

			$this->context->smarty->assign(Meta::getMetaTags($this->context->language->id, $page_name));
			$this->context->smarty->assign('request_uri', Tools::safeOutput(urldecode($_SERVER['REQUEST_URI'])));

			/* Breadcrumb */
			$navigationPipe = (Configuration::get('PS_NAVIGATION_PIPE') ? Configuration::get('PS_NAVIGATION_PIPE') : '>');
			$this->context->smarty->assign('navigationPipe', $navigationPipe);

			// Automatically redirect to the canonical URL if needed
			if (!empty($this->php_self) && !Tools::getValue('ajax'))
				$this->canonicalRedirection($this->context->link->getPageLink($this->php_self, $this->ssl, $this->context->language->id));

			Product::initPricesComputation();

			$display_tax_label = $this->context->country->display_tax_label;
			if (isset($cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')}) && $cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')})
			{
				$infos = Address::getCountryAndState((int)($cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')}));
				$country = new Country((int)$infos['id_country']);
				$this->context->country = $country;
				if (Validate::isLoadedObject($country))
					$display_tax_label = $country->display_tax_label;
			}

			$languages = Language::getLanguages(true, $this->context->shop->id);
			$meta_language = array();
			foreach ($languages as $lang)
				$meta_language[] = $lang['iso_code'];

			$compared_products = array();
			if (Configuration::get('PS_COMPARATOR_MAX_ITEM') && isset($this->context->cookie->id_compare))
				$compared_products = CompareProduct::getCompareProducts($this->context->cookie->id_compare);

			$this->context->smarty->assign(array(

			));

			foreach ($assign_array as $assign_key => $assign_value)
				if (substr($assign_value, 0, 1) == '/' || $protocol_content == 'https://')
					$this->context->smarty->assign($assign_key, $protocol_content.Tools::getMediaServer($assign_value).$assign_value);
				else
					$this->context->smarty->assign($assign_key, $assign_value);

			/*
			 * These shortcuts are DEPRECATED as of version 1.5.
			 * Use the Context to access objects instead.
			 * Example: $this->context->cart
			 */
			self::$cookie = $this->context->cookie;
			self::$cart = $cart;
			self::$smarty = $this->context->smarty;
			self::$link = $link;
			$defaultCountry = $this->context->country;


			if (Tools::isSubmit('live_edit') && !$this->checkLiveEditAccess())
				Tools::redirect('index.php?controller=404');
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