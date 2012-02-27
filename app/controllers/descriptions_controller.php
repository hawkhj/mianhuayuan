<?php
class DescriptionsController extends AppController {

	var $name = 'Descriptions';

	function index() {
		$this->Description->recursive = 0;
		$this->set('descriptions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid description', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('description', $this->Description->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Description->create();
			if ($this->Description->save($this->data)) {
				$this->Session->setFlash(__('The description has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The description could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid description', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Description->save($this->data)) {
				$this->Session->setFlash(__('The description has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The description could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Description->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for description', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Description->delete($id)) {
			$this->Session->setFlash(__('Description deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Description was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Description->recursive = 0;
		$this->set('descriptions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid description', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('description', $this->Description->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Description->create();
			if ($this->Description->save($this->data)) {
				$this->Session->setFlash(__('The description has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The description could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid description', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Description->save($this->data)) {
				$this->Session->setFlash(__('The description has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The description could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Description->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for description', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Description->delete($id)) {
			$this->Session->setFlash(__('Description deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Description was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
