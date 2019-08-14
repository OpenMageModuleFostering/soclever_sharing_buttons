<?php
class Soclever_Socialshare_Block_Adminhtml_Help extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
         
      $fileContent="<h3>For more information on configuration, Please refer to our developer page <a href='http://developers.socleversocial.com' target='_blank'>Socleversocial.com</a></h3>";
      return $fileContent;
      
        
      }
        
   
    
}
?>