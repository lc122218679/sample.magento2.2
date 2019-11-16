<?php
/**
 * Created by PhpStorm.
 * User: LiangChao
 * Date: 2019/11/16
 * Time: 15:15
 */
namespace Foggyline\Office\Model\ResourceModel;
class Department extends  \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('foggyline_office_department', 'entity_id');
    }
}