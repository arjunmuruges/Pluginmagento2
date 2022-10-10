<?php
namespace Arjun\MyPlugin\Plugin;
class ProductAround
{
    public function aroundAddProduct(\Magento\Catalog\Model\Product $subject,
        \Closure $proceed,
        $productInfo,
        $requestInfo = null
    ) {
        $requestInfo['qty'] = 5; // Increased quantity to 5
        $result = $proceed($productInfo, $requestInfo);
        // Apply logic here
        return $result;
    }
}