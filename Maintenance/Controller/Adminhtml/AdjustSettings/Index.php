<?php

namespace Lalitmohan\Maintenance\Controller\Adminhtml\AdjustSettings;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action as Action;

class Index extends Action
{
	
    /**
     * Index action
     *
     * @return void
     */
	public function execute()
	{
		$this->_forward('edit');
	}
}