<?php
/**
 * Created by PhpStorm.
 * User: LiangChao
 * Date: 2019/11/16
 * Time: 15:10
 */
class Department extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this-> _init('Foggyline\Office\Model\ResourceModel\Department');
    }
}
