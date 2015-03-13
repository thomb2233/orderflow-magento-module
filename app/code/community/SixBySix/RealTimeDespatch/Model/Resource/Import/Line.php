<?php

/**
 * Import Line Resource Model.
 */
class SixBySix_RealTimeDespatch_Model_Resource_Import_Line extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Constructor.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('realtimedespatch/import_line', 'entity_id');
    }
}