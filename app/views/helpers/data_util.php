<?php
/*
 * Created on 2011-11-19
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 class DataUtilHelper extends AppHelper {    
 	//var $helpers = array('Html');    
 	 function getDeptName($id)
        {
        	switch ($id)
			{
			case '0':
			  return '经理';
			  break;  
			case '1':
			  return '销售';
			  break;
			case '2':
			  return '采购';
			  break;
			case '3':
			  return '其他';
			  break;
			default:
			  return '无';
			}
        }
        function getLvlName($id)
        {
        	switch ($id)
			{
			case '0':
			  return '管理员';
			  break;  
			case '1':
			  return '总经理';
			  break;
			case '2':
			  return '部门经理';
			  break;
			case '3':
			  return '销售业务员';
			  break;
			default:
			  return '无';
			}
        }
        function getStatusName($id)
        {
        	switch ($id)
			{
			case '0':
			  return '离职';
			  break;  
			case '1':
			  return '在职';
			  break;
			case '2':
			  return '停薪留职';
			  break;
			case '3':
			  return '其他';
			  break;
			default:
			  return '无';
			}
        }
        function getCustomerTypeName($id)
        {
        	switch ($id)
			{
			case '0':
			  return '重要客户';
			  break;  
			case '1':
			  return '一般客户';
			  break;
			default:
			  return '无';
			}
        }
        function listsubUser($users,$parent)
        {
        	echo '<ul>';
        	foreach($users as $user)
			{
				if($user['User']['Parent']==$parent)
				{
					//echo '<li>'.$html->link($user['User']['username'],array('controller'=>'customers','action' => 'UserAll','uid'=>$user['User']['Id']),array('target'=>'right')).'</li>';
					echo '<li><a href="/customers/UserAll/'.$user['User']['Id'].'" target="right">'.$user['User']['username'].'</a></li>';
					$this->listsubUser($users,$user['User']['Id']);
				}
			}
			echo '</ul>';
        }
 }
?>
