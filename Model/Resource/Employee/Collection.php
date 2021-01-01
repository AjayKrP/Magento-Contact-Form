<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Literacis\ContactForm\Model\Resource\Employee;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Literacis\ContactForm\Model\Employee', 'Literacis\ContactForm\Model\Resource\Employee');
        //$this->_map['fields']['page_id'] = 'main_table.page_id';
    }
}
