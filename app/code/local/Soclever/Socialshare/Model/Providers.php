<?php

class Soclever_Socialshare_Model_Providers
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
        );
        /*$providers=array("2"=>"Facebook","4"=>"Google+","7"=>"LinkedIN","13"=>"Twitter","17"=>"Pinterest");
        return $providers;*/
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
        $iconsize=array("30x30"=>"30X30<br/>","32x32"=>"32X32<br/>","40x40"=>"40X40<br/>","50x50"=>"50X50<br/>","60x60"=>"60X60<br/>","70x70"=>"70X70<br/>","85x85"=>"85X85<br/>","100x100"=>"100X100<br/>");
        return $iconsize;
        
    }
    public function displaystyle()
    {
        $displaysize=array();
        $displaysize=array("0"=>"Horizontal<br/>","1"=>"Vertical Left<br/>","2"=>"Vertical Right<br/>");
        return $displaysize;
        
    }
    public function yourstyle()
    {
        $yourstyle=array();
        $yourstyle=array("1"=>'<div style="margin-top: -26px;margin-left:20px;">&nbsp;&nbsp;<img src="https://www.socleversocial.com/dashboard/images/preview/style201.png" style="width:140px;" alt="Square Icons" title="Square Icons" /></div>',"2"=>'<div style="margin-top: -26px;margin-left:20px;">&nbsp;&nbsp;<img src="https://www.socleversocial.com/dashboard/images/preview/style202.png" style="width:140px;" alt="Rounded Icons" title="Rounded Icons" /></div>',"3"=>'<div style="margin-top: -22px;margin-left:20px;">&nbsp;&nbsp;<img src="https://www.socleversocial.com/dashboard/images/preview/style203.png" style="width:140px;" alt="Square Grey Icons" title="Square Grey Icons" /></div>',"4"=>'<div style="margin-top: -22px;margin-left:20px;">&nbsp;&nbsp;<img src="https://www.socleversocial.com/dashboard/images/preview/style204.png" style="width:140px;" alt="Rounded Grey Icons" title="Rounded Grey Icons"  /></div>');
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