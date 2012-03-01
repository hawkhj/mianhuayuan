<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/958/The-Pages-Controller
 */
 class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';
/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses=array('Contacter','Category','User','Customer','Mail');
/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html', 'Session');




/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function home()
	{
		$this->layout = '';
		if(!$this->Session->read('username'))
		{
			$this->redirect(array('controller' => 'users', 'action'=>'login'));
			
		}
		
	}
	function head()
	{
		if(!$this->Session->read('username'))
		{
			$this->redirect(array('controller' => 'users', 'action'=>'login'));
			return;
		}
		$this->layout = 'head';
		$list = array();
		array_push($list,array('退出',array('controller'=>'Users','action' => 'logout'),array('target'=>'_parent')));
		if($this->Session->read('Lvl')=='0')//admin
		{
			array_push($list,array('用户维护',array('admin'=>true,'controller'=>'Users','action' => 'index'),array('target'=>'right')));
			array_push($list,array('客户维护',array('admin'=>true,'controller'=>'customers','action' => 'admin_index'),array('target'=>'right')));
			array_push($list,array('产品维护',array('controller'=>'productions','action' => 'index'),array('target'=>'right')));
			array_push($list,array('产品分类维护',array('controller'=>'categories','action' => 'index'),array('target'=>'right')));
			array_push($list,array('订单维护',array('controller'=>'Orders','action' => 'index'),array('target'=>'right')));
		}elseif($this->Session->read('Lvl')=='1')//manager
		{
			array_push($list,array('更改个人信息',array('controller'=>'Users','action' => 'edit',$this->Session->read('username')),array('target'=>'right','onclick'=>"window.parent.document.getElementById('left').src='/pages/left'")));
			array_push($list,array('客户管理',array('controller'=>'customers','action' => 'index_first'),array('target'=>'right','onclick'=>"window.parent.document.getElementById('left').src='/pages/LeftCustomer'")));
			array_push($list,array('邮件管理',array('controller'=>'pages','action' => 'LeftMailManage'),array('target'=>'left','onclick'=>"window.parent.document.getElementById('right').src='/mails/index_all/".$this->Session->read('username')."'")));
			array_push($list,array('产品管理',array('controller'=>'pages','action' => 'LeftProductManage'),array('target'=>'left')));
			array_push($list,array('报价管理',array('controller'=>'customers','action' => 'index'),array('target'=>'right','onclick'=>"window.parent.document.getElementById('left').src='/pages/left'")));
			
		}elseif($this->Session->read('Lvl')=='2')//deptmanager
		{
			array_push($list,array('更改个人信息',array('controller'=>'Users','action' => 'edit',$this->Session->read('username')),array('target'=>'right')));
		}
		elseif($this->Session->read('Lvl')=='3')//user
		{
			array_push($list,array('更改个人信息',array('controller'=>'Users','action' => 'edit',$this->Session->read('username')),array('target'=>'right')));
		}
		$this->set('list',$list);
	}
	function index()
	{
		$this->helpers[] = 'DataUtil';
		//$this->Customer->recursive = 0;
		
		
		$us = $this->User->find('all');
		$rows_data = array();
		foreach($us as $user)
		{
			if($user['User']['username']==$this->Session->read('user'))
			{
				$u_name = $user['User']['username'];
				$c1=array();
				$c1=$this->Customer->find('all',array(
				'conditions'=>array(
					'Permission' => $user['User']['Id'],
					'CustomerType'=>1
									)));
				$c0=array();
				$c0=$this->Customer->find('all',array(
				'conditions'=>array(
					'Permission' => $user['User']['Id'],
					'CustomerType'=> 0
									)));
				$mn= count($this->Mail->find('all',
				array(
					'conditions'=>array(
									'PopMailBox'=>$user['User']['Email']
										)
				)
				));
				//$mn=0;
				
				array_push($rows_data,array('name'=>$u_name,'c1'=>count($c1),'c0'=>count($c0),'mn'=>$mn));
			}
		}
		$this->set('rows',$rows_data);

	}
	function left()
	{$this->layout = 'default';}
	function LeftCustomer()
	{
		$this->layout = 'default';
		$this->helpers[] = 'DataUtil';
		$this->set('Users',$this->User->find('all'));
	}
	function LeftMailManage()
	{
		$this->layout = 'default';
		$Customers = $this->Customer->find('all',array(
			'conditions'=>array(
				'Permission'=>' like "%'+$this->Session->read('username')+'%"'
								)));
		$listtree=array(); 
		$n=0;
		
		foreach($Customers as $Customer)
		{
			array_push($listtree,array(
								'title'=>$Customer['Customer']['CompName'],
								'email'=>$Customer['Customer']['Email'],
								'name' =>$Customer['Customer']['CompContact'],
								'id'=>$Customer['Customer']['Id'],
								'index'=>$n,
								'lvl'=>0
								));
			$Contacters = $this->Contacter->find('all',array(
				'conditions'=>array(
					'CustomerId'=>$Customer['Customer']['Id']
									)));
			foreach($Contacters as $Contacter)
			{
				$n=$n+1;
				array_push($listtree,array(
								'title'=>$Contacter['Contacter']['ContactName'],
								'email'=>$Contacter['Contacter']['Email'],
								'name' =>$Contacter['Contacter']['ContactName'],
								'id' => $Contacter['Contacter']['ContacterId'],
								'index'=>$n,
								'lvl'=>1
								));
			}
			$n=$n+1;
		}
		$this->set('listtree',$listtree);
	}
	function LeftProductManage()
	{
		$this->layout = 'default';
		
		$this->set('categories', $this->Category->find('all'));
	}
}
