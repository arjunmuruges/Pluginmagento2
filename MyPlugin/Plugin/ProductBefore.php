<?php
namespace Arjun\MyPlugin\Plugin;

use Magento\Backend\Block\Widget\Grid\Column\Filter\Price;

class ProductBefore
{
    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {

        // $name="Arjunmuruga".$name;  
        $name.="Arjun ";
        return  $name ;
    }
}