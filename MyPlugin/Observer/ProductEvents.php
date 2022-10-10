<?php
namespace Arjun\MyPlugin\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
class ProductEvents implements ObserverInterface
{
   public function execute(Observer $observer)
   {
       $product = $observer->getProduct();
       $originalName = $product->getName();
       $modifiedName = $originalName . ' - Cinima ';
       $product->setName($modifiedName);
   }
}