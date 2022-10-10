<?php
namespace Arjun\MyPlugin\Controller\Index;
class TestEvent extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Sandalwood'));
		$this->_eventManager->dispatch(magenest_display_text, ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}