<?php
class Soclever_Socialsharesc_Block_Adminhtml_Help extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
         
      $fileContent='<ul style="float:left; margin-right:43px">
			<li>1. <a target="_blank" href="https://www.socleversocial.com/dashboard/login.php">Login</a> to your SoClever account. Or <a target="_blank" href="https://www.socleversocial.com/pricing/">Register</a> for free account to generate API Keys.  </li>
			<li>2. Go to <a target="_blank" href="https://www.socleversocial.com/dashboard/billing_profile_setting.php">Site Settings</a> . Your API key, API secret and site ID will be displayed on this page.</li>
			<li>3. Configure your API details on API settings tab on your magento Admin Panel.</li>
			<li>4. Please select social networks you want to use for social sharing and save settings.</li>
			<li>Feel free to <a target="_blank" href="https://www.socleversocial.com/contact-us/">contact us</a> for any assistance you may require.</li>
			</ul>';
      return $fileContent;
      
        
      }
        
   
    
}
?>