<?php

/**
 * Title: NEOS - Internet Kassa - Integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_NEOS_InternetKassa_Integration extends Pronamic_WP_Pay_Gateways_Ogone_OrderStandard_Integration {
	public function __construct() {
		$this->id         = 'neos-internetkassa';
		$this->name       = 'NEOS - Internet Kassa';
		$this->provider   = 'neos';
		$this->deprecated = true;
	}
}
