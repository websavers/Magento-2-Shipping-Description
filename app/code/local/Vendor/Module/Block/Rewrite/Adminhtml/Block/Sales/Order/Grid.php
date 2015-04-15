<?php

class Vendor_Module_Block_Rewrite_Adminhtml_Block_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    protected function _prepareColumns()
    {
        $this->addColumnAfter('shipping_description', array(
            'header' => Mage::helper('module')->__('Shipping Method'),
            'type' => 'options',
            'index' => 'shipping_description',
            'filter_index' => 'order.shipping_description',
            'options' => Mage::helper('module')->getShippingStatuses()
        ), 'status');

        return parent::_prepareColumns();
    }
}