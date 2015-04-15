<?php

class Vendor_Module_Model_Observer
{
    public function salesOrderGridCollectionLoadBefore($observer)
    {
        $collection = $observer->getOrderGridCollection();
        $select = $collection->getSelect();
        $select->joinLeft(array('order'=>$collection->getTable('sales/order')), 'order.entity_id=main_table.entity_id', 'shipping_description');
    }
}