<?php
 
namespace Lalitmohan\Maintenance\Block\Adminhtml\AdjustSettings\Edit;
 
use Magento\Backend\Block\Widget\Tabs as WidgetTabs;


/**
 * Class Tabs
 * @package Lalitmohan\Maintenance\Block\Adminhtml\AdjustSettings\Edit
 */
class Tabs extends WidgetTabs
{
    /**
     * Class constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('adjustsettings_edit_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Maintenance'));
    }


    /**
     * @return $this
     * @throws \Exception
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _beforeToHtml()
    {
        $this->addTab(
            'adjustsettings_info',
            [
                'label' => __('Adjust Settings'),
                'title' => __('Adjust Settings'),
                'content' => $this->getLayout()->createBlock(
                    'Lalitmohan\Maintenance\Block\Adminhtml\AdjustSettings\Edit\Tab\Info'
                )->toHtml(),
                'active' => true
            ]
        );
 
        return parent::_beforeToHtml();
    }
}