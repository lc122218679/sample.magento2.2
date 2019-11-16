<?php
/**
 * Created by PhpStorm.
 * User: LiangChao
 * Date: 2019/11/16
 * Time: 15:38
 */
namespace Foggyline\Office\Model\ResourceModel\Employee;
class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\Employee','Foggyline\Office\Model\ResourceModel\Employee');
    }
}
