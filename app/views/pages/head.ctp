<?php
/*
 * Created on 2011-11-13
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<?php //echo $html->link('退出', array('controller'=>'Users','action' => 'logout'),array('target'=>'_parent')); ?>
<?php //echo $html->link('用户维护', array('controller'=>'Users','action' => 'index'),array('target'=>'body')); ?>
<?php //echo $html->link('客户维护', array('controller'=>'customers','action' => 'index'),array('target'=>'body')); ?>
<?php //echo $html->link('产品维护', array('controller'=>'productions','action' => 'index'),array('target'=>'body')); ?>
<?php //echo $html->link('产品分类维护', array('controller'=>'categories','action' => 'index'),array('target'=>'body')); ?>
<?php //echo $html->link('订单维护', array('controller'=>'Orders','action' => 'index'),array('target'=>'body')); ?>
<?php
if(isset($list))
{
	while (list($key, $val) = each($list))
	{
		echo $html->link($val[0],$val[1],$val[2])." | ";
		
		//echo "$val[0] => $val[1]<br />";
		
	}

}
?>
