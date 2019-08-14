<?php
Mage::app('default');
function getMazeTable($tbl){
	$tableName = Mage::getSingleton('core/resource')->getTableName($tbl);
	return($tableName);
}
class Soclever_Socialsharesc_IndexController extends Mage_Core_Controller_Front_Action
{
public function indexAction()
    {
       
  $this->loadLayout();     
  $this->renderLayout();
    }
	
}
?>