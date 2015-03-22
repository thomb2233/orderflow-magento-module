<?php

/**
 * Custom Valued Product Model.
 */
class SixBySix_CustomValue_Model_Catalog_Product extends SixBySix_RealTimeDespatch_Model_Catalog_Product
{
    /**
     * Returns a custom value.
     *
     * This could be a call to a helper, service, additional business logic etc.
     *
     * @return string
     */
    public function getCustomValue()
    {
        return 'Test Value';
    }
}
