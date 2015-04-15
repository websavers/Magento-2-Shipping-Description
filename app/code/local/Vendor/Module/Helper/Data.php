<?php
class Vendor_Module_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getShippingStatuses()
    {
        $cariers = Mage::getSingleton('shipping/config')->getActiveCarriers();

        foreach ($cariers as $carrier) {
            $code = $carrier->getId();
            $title = Mage::getStoreConfig("carriers/".$code."/title") . ' - ' . Mage::getStoreConfig("carriers/".$code."/name");
            $options[$title] = $title;
        }
        return $options;
    }
}