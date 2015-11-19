<?php

class Pronamic_WP_Pay_Gateways_NEOS_InternetKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id         = 'neos-internetkassa';
		$this->name       = 'NEOS - Internet Kassa';
		$this->provider   = 'neos';
		$this->deprecated = true;
	}
}
