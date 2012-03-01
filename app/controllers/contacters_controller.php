<?php
class ContactersController extends AppController {

	var $name = 'Contacters';

	function index() {
		$this->Contacter->recursive = 0;
		$this->set('contacters', $this->paginate());
	}
	function index_customer($id){
		$this->Contacter->recursive = 0;
		$this->set('contacters', $this->paginate(array('CustomerId'=>$id)));
		$this->set('id',$id);
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contacter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contacter', $this->Contacter->read(null, $id));
	}

	function add($id) {
		if (!empty($this->data)) {
			$this->Contacter->create();
			if ($this->Contacter->save($this->data)) {
				$this->data['Contacter']['AddUser']=$this->Session->read('user')."[".$this->Session->read('username')."]";
				$this->data['Contacter']['AddDate']=date("Y-m-d H:i:s");
				$this->Session->setFlash(__('The contacter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacter could not be saved. Please, try again.', true));
			}
		}
		$this->set('id',$id);
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contacter', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contacter->save($this->data)) {
				$this->Session->setFlash(__('The contacter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contacter->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contacter', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contacter->delete($id)) {
			$this->Session->setFlash(__('Contacter deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contacter was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Contacter->recursive = 0;
		$this->set('contacters', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid contacter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contacter', $this->Contacter->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Contacter->create();
			if ($this->Contacter->save($this->data)) {
				$this->Session->setFlash(__('The contacter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacter could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid contacter', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contacter->save($this->data)) {
				$this->Session->setFlash(__('The contacter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contacter->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for contacter', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contacter->delete($id)) {
			$this->Session->setFlash(__('Contacter deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Contacter was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
