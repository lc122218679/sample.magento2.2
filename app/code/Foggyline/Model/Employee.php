<?php
/**
 * Created by PhpStorm.
 * User: LiangChao
 * Date: 2019/11/16
 * Time: 15:31
 */
namespace Foggyline\Office\Model;
class Employee extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'foggyline_office_employee';
    public function _construct()
    {
        $this-> _init('Foggyline\Office \Model \ResourceModel\Employee');
    }
}
