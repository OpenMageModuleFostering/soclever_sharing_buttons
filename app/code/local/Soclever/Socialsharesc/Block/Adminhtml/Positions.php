<?php
class Soclever_Socialsharesc_Block_Adminhtml_Positions extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    
    
    
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        
          $site_id=Mage::getStoreConfig('socialsharesc_options/apisettings/scss_siteid');
          $api_secret=Mage::getStoreConfig('socialsharesc_options/apisettings/scss_appsecret');
          $api_key=Mage::getStoreConfig('socialsharesc_options/apisettings/scss_appid');  
          $yourstyle=Mage::getStoreConfig('socialsharesc_options/displaysettings/yourstyle');
          $iconsize=Mage::getStoreConfig('socialsharesc_options/displaysettings/iconsize');
          $gap=Mage::getStoreConfig('socialsharesc_options/displaysettings/gapsetting');
          
          $valid_data=file_get_contents("https://www.socleversocial.com/dashboard/mage_share_activate.php?site_id=".$site_id."&api_key=".$api_key."&api_secret=".$api_secret."&csplatform=magento&yourstyle=".$yourstyle."&iconsize=".$iconsize."&gap=".$gap."&networks=".Mage::getStoreConfig('socialsharesc_options/displaysettings/socialproviders'));
          if($valid_data && $valid_data[0]!='0')
          {
            $display_style=Mage::getStoreConfig('socialsharesc_options/displaysettings/displaystyle');
       
       $countersetting=Mage::getStoreConfig('socialsharesc_options/displaysettings/countersetting'); 
       
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