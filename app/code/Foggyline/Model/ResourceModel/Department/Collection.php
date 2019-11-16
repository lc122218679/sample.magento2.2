<?php
/**
 * Created by PhpStorm.
 * User: LiangChao
 * Date: 2019/11/16
 * Time: 15:18
 */
namespace Foggyline\Office\Model\ResourceModel\Department;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\ResourceModel\Department'
        );
    }
}
