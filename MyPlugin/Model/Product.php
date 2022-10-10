<?php
namespace Arjun\MyPlugin\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function GetName()
    {
        $name=parent::getName();

        // $name="Arjun ".$name;  
        $name.="Arjun ";
        return  $name ;
    }
}