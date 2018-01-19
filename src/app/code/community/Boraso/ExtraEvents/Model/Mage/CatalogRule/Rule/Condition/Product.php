<?php

class Boraso_ExtraEvents_Model_Mage_CatalogRule_Rule_Condition_Product extends Mage_CatalogRule_Model_Rule_Condition_Product
{

    protected function _prepareDatetimeValue($value, $object)
    {
        $arrEventParams = array(
                            "value"     => $value,
                            "object"    => $object,
                            "origin"    => $this
                        );

        Mage::dispatchEvent('catalogrule_condition_product_prepareDatetimeValue_before', $arrEventParams);

        //
        $parentReturn = parent::_prepareDatetimeValue($value, $object);
        $arrEventParams["parent_return"] = $parentReturn;

        Mage::dispatchEvent('catalogrule_condition_product_prepareDatetimeValue_after', $arrEventParams);

        return $parentReturn;
    }
}
