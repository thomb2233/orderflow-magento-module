<?php
 
class SixBySix_CustomValue_Model_RealTimeDespatch_Sales_Order extends SixBySix_RealTimeDespatch_Model_Sales_Order {

	/**
	 * Returns a custom value.
	 *
	 * This could be a call to a helper, service, additional business logic etc.
	 *
	 * @return string
	 */
	public function getCustomField()
	{
		return 'custom order field value';
	}


	/** Example to retrieve the order create date
	 *
	 * @return string
	 */

	public function getOrderCreateDate()
	{
		return $this->getCreatedAtDate();
	}

}