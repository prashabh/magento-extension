<?php
class Vendor_Vcatalog_Block_Adminhtml_Vsubscription_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('vsubscription_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('vcatalog')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('vcatalog')->__('Subscription Information'),
          'title'     => Mage::helper('vcatalog')->__('Subscription Information'),
          'content'   => $this->getLayout()->createBlock('vcatalog/adminhtml_vsubscription_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}