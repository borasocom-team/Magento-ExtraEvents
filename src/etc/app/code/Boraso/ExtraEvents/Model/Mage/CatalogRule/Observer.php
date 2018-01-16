<?php

class Boraso_ExtraEvents_Model_Mage_CatalogRule_Observer extends Mage_CatalogRule_Model_Observer
{
    /**
     * catalogrules_apply_all
     * ----------------------
     *
     * @param $observer
     * @return $this
     */
    public function dailyCatalogUpdate($observer)
    {
        Mage::dispatchEvent('catalogrule_apply_all_before');

        //
        $parentReturn = parent::dailyCatalogUpdate($observer);

        Mage::dispatchEvent('catalogrule_apply_all_after');

        return $parentReturn;
    }
}

