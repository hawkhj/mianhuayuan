<?php
class MailsController extends AppController {

	var $name = 'Mails';
	var $uses=array('Mail','User','Contacter','Customer');
	function index($id) {
		$this->mail->recursive = 0;
		$findContacter=$this->Contacter->read(null, $id);

		$this->set('mails', $this->Mail->find('all',
					array('conditions'=>array(
										'From'=>$findContacter['Contacter']['Email']
											)
						)
					)
				   );
		
	}
	function index_customer($id)
	{
		$this->mail->recursive = 0;
		$findCustomer=$this->Customer->read(null, $id);

		$this->set('mails', $this->Mail->find('all',
					array('conditions'=>array(
										'contacters LIKE'=>'%'.$findCustomer['Customer']['Email'].'%'
											)
						)
					)
				   );
		
	}
	function index_contacter($id)
	{
		$this->mail->recursive = 0;
		$findContacter=$this->Contacter->read(null, $id);

		$this->set('mails', $this->Mail->find('all',
					array('conditions'=>array(
										'contacters LIKE'=>'%'.$findContacter['Contacter']['Email'].'%'
											)
						)
					)
				   );
	}
	function index_all($id)
	{
		$this->mail->recursive = 0;
		$findUser=$this->User->read(null, $id);

		$this->set('mails', $this->Mail->find('all',
					array('conditions'=>array(
										'PopMailBox'=>$findUser['User']['Email']
											)
						)
					)
				   );
	}
	function view($id)
	{
		if (!$id) {
			$this->Session->setFlash(__('不存在的邮件', true));
			$this->redirect(array('action' => 'index',$id));
		}
		$this->set('mail', $this->Mail->read(null, $id));
	}
	function reply($id)
	{
		if (!$id) {
			$this->Session->setFlash(__('不存在的邮件', true));
			$this->redirect(array('action' => 'view',$id));
		}
		$this->set('mail', $this->Mail->read(null, $id));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid order', true));
			$this->redirect(array('action' => 'view',$id));
		}
		if (!empty($this->data)) {
			if ($this->Order->save($this->data)) {
				$this->Session->setFlash(__('The order has been saved', true));
				$this->redirect(array('action' => 'view',$id));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mail->read(null, $id);
		}
	}
	
}
