<?php
class Soclever_Socialshare_Block_Adminhtml_Positions extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    
    
    
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        
          $site_id=Mage::getStoreConfig('socialshare_options/apisettings/scss_siteid');
          $api_secret=Mage::getStoreConfig('socialshare_options/apisettings/scss_appsecret');
          $api_key=Mage::getStoreConfig('socialshare_options/apisettings/scss_appid');  
          
          $valid_data=file_get_contents("https://www.socleversocial.com/dashboard/wp_activate.php?site_id=".$site_id."&api_key=".$api_key."&api_secret=".$api_secret."&csplatform=magento");
          if($valid_data && $valid_data[0]!='0')
          {
            $display_style=Mage::getStoreConfig('socialshare_options/displaysettings/displaystyle');
       
       $countersetting=Mage::getStoreConfig('socialshare_options/displaysettings/countersetting'); 
       $yourstyle=Mage::getStoreConfig('socialshare_options/displaysettings/yourstyle');
       $display_option=($display_style=='1' || $display_style=='2')?'1':'0';
       $div_style="";
       $imgeStyle="style='width:380px;margin-top:-10px;'";
       if($display_style=='1' || $display_style=='2')
       {
        $imgeStyle="";
        $div_style=($display_style=='1')?'style="float:left;"':'style="float:right;"';
       }
       
         
      $fileContent="<div ".$div_style."><img src='https://www.socleversocial.com/dashboard/images/preview/style".$countersetting.$display_option.$yourstyle.".png' ".$imgeStyle." alt='Current Soclever Social Share Preview' title='Current Soclever Social Share Preview'  ></div>";
      return $fileContent;
      
        
      }
         else
         {
            return "<h1>Please provide valid API setting</h1>";
         }
 
 
            
        
        
        
    }
    
}
?>