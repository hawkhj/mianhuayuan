<?php
App::import('Sanitize');    
class UsersController extends AppController {
	
	var $name = 'Users';
	function logout()
	{
		$this->Session->destroy();
		$this->redirect('/', null, true);
	}
	function login() {
		if(!empty($this->data))
		{
			$results = $this->User->find('first',array('conditions' =>array('username' => Sanitize::paranoid($this->data['User']['username']))));

			if ($results &&
			 $results['User']['password'] == md5($this->data['User']['password'])){
				$this->Session->write('Lvl', $results['User']['Lvl']);
                $this->Session->write('username', $results['User']['Id']);
                $this->Session->write('user', $results['User']['username']);
                
                $this->redirect('/', null, true);
			}else
			{
				
				$this->data=null;
				$this->set('error', true);
			}
		}
	}
	
	function index() {
		$list=array('0'=>'无上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		$this->helpers[] = 'DataUtil';
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		$list=array('0'=>'无上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		$this->helpers[] = 'DataUtil';
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		$list=array('0'=>'选择上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		if (!empty($this->data)) {
			$this->User->create();
			$this->data['User']['password'] = md5($this->data['User']['password']);
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$list=array('0'=>'选择上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		$findUser=$this->User->read(null, $id);
		if (!empty($this->data)) {
			if($this->data['User']['password'] !== $findUser['User']['password'])
			{
				$this->data['User']['password'] = md5($this->data['User']['password']);
			}
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$list=array('0'=>'无上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		$this->helpers[] = 'DataUtil';
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		$list=array('0'=>'无上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		$this->helpers[] = 'DataUtil';
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		$list=array('0'=>'选择上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$list=array('0'=>'选择上级');
		
		$Users = $this->User->find('all',array(
			'conditions'=>'Lvl in (1,2)'));
		foreach ($Users as $User)
		{
			$list[$User['User']['Id']]=$User['User']['username'];
		}
		//var_dump($list);
		$this->set('parents',$list);
		
		$findUser=$this->User->read(null, $id);
		if (!empty($this->data)) {
			if($this->data['User']['password'] !== $findUser['User']['password'])
			{
				$this->data['User']['password'] = md5($this->data['User']['password']);
			}
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			
			$this->data = $this->User->read(null, $id);
		}
		
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
