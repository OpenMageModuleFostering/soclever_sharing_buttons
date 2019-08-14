<?php

class Soclever_Socialsharesc_Model_Providers  extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    public function getproviders()
    {
        return array(
            array('value'=>2, 'label'=>'Facebook'),
            array('value'=>4, 'label'=>'Google+'),
            array('value'=>7, 'label'=>'LinkedIN'),            
            array('value'=>13, 'label'=>'Twitter'),
            array('value'=>17, 'label'=>'Pinterest'),
            array('value'=>18, 'label'=>'Whatsapp'),  
            array('value'=>19, 'label'=>'StumbleUpon'),
            array('value'=>20, 'label'=>'Reddit'),                     
            array('value'=>21, 'label'=>'Tumblr'),                     
        );
        /*$providers=array("2"=>"Facebook","4"=>"Google+","7"=>"LinkedIN","13"=>"Twitter","17"=>"Pinterest");
        return $providers;*/
    }
    
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
{        
    var_dump(get_class($element));    
    return $element->getElementHtml();
}
    
    public function getcounters()
    {
        /*return array(
            array('value'=>2, 'label'=>'No Counter'),
            array('value'=>1, 'label'=>'Vertical Counter'),
            array('value'=>0, 'label'=>'Horizontal Counter'),
        );*/
        $countersarray=array("2"=>"No Conter","1"=>"Vertical Counter","0"=>"Horizontal Counter");
        //$countersarray=array("2"=>"No Conter");
        return $countersarray;
    }
    public function getgaps()
    {
        $gaparr=array();
        for($i=0;$i<=20;$i++)
        {
            $gaparr[$i]=$i;
        }
        return $gaparr;
        
    }
    public function geticonsize()
    {
        $iconsize=array();
        $iconsize=array("30x30"=>"30X30","32x32"=>"32X32","40x40"=>"40X40","50x50"=>"50X50","60x60"=>"60X60","70x70"=>"70X70","85x85"=>"85X85","100x100"=>"100X100");
        return $iconsize;
        
    }
    public function displaystyle()
    {
        $displaysize=array();
        $displaysize=array("0"=>"Horizontal","1"=>"Vertical Left","2"=>"Vertical Right");
        return $displaysize;
        
    }
    public function yourstyle()
    {
        $yourstyle=array();
        
$yourstyle=array("2"=>'Rounded Corner',"3"=>'Transparent Grey',"4"=>'Rounded Black',"5"=>'Flower',
                        "6"=>'Glossy',"7"=>'Leaf',"8"=>'Polygon',"10"=>'Rectangular',"11"=>'Waterdrop',"custom"=>'Custom');
        
        return $yourstyle;
        
    }
    public function sharewithautho()
    {
        $sharewithautho=array();
        $sharewithautho=array("0"=>"No","1"=>"Yes");
        return $sharewithautho;
        
    }
    public function getpreview()
    {
        return array("0"=>"Good");
    }
public function gethelphtml()
    {
        $help_date="<h1>Help..............</h1>";
        return array("0"=>$help_date);
    }

}


?>