<?php
class ProductionsController extends AppController {

	var $name = 'Productions';

	function index() {
		$this->Production->recursive = 0;
		$this->set('productions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid production', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('production', $this->Production->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Production->create();
			if ($this->Production->save($this->data)) {
				$this->Session->setFlash(__('The production has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid production', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Production->save($this->data)) {
				$this->Session->setFlash(__('The production has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Production->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for production', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Production->delete($id)) {
			$this->Session->setFlash(__('Production deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Production was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Production->recursive = 0;
		$this->set('productions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid production', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('production', $this->Production->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Production->create();
			if ($this->Production->save($this->data)) {
				$this->Session->setFlash(__('The production has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid production', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Production->save($this->data)) {
				$this->Session->setFlash(__('The production has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The production could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Production->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for production', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Production->delete($id)) {
			$this->Session->setFlash(__('Production deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Production was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
