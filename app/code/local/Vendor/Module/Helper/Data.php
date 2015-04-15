<?php
class Vendor_Module_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getShippingStatuses()
    {
        $collection = Mage::getModel('sales/order')->getCollection();
        $collection
            ->getSelect()
            ->reset(Zend_Db_Select::COLUMNS)
            ->columns('shipping_description')
            ->group('shipping_description')
            ->where('`shipping_description` IS NOT NULL');
        $collection->load();

        foreach ($collection as $shippingDescr) {
            $descr = $shippingDescr->getShippingDescription();
            $options[$descr] = $descr;
        }

        return $options;
    }
}