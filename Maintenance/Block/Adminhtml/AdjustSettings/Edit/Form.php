<?php
 
namespace Lalitmohan\Maintenance\Block\Adminhtml\AdjustSettings\Edit;
 
use Magento\Backend\Block\Widget\Form\Generic;

/**
 * Class Form
 * @package Lalitmohan\Maintenance\Block\Adminhtml\AdjustSettings\Edit
 */
class Form extends Generic
{


    /**
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id'    => 'edit_form',
                    'action' => $this->getData('action'),
                    'method' => 'post'
                ]
            ]
        );
        $form->setUseContainer(true);
        $this->setForm($form);
 
        return parent::_prepareForm();
    }
}