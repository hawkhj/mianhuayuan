<?php
/*
 * Created on 2011-11-9
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class AdminController extends AppController {
 	var $name="Categorys";
 	function CategoryIndex()
 	{
 		$this->set('$Categorys',$this->Category->find('all'));
 	}
 	
 }
?>
