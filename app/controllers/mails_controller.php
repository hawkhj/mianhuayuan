<?php
class MailsController extends AppController {

	var $name = 'Mails';
	function index($id) {
		$this->mail->recursive = 0;
		$this->set('mails', $this->Mail->find('all',array('condition'=>array('contacters'=>'='+$id))));
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
