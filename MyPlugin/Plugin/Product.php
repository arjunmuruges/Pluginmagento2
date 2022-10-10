<?php
namespace Arjun\MyPlugin\Plugin;

use Magento\Backend\Block\Widget\Grid\Column\Filter\Price;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $name)
    {

        $name="Arjun ".$name;  
        // $name.="Arjun ";
        return  $name ;
    }
}