<?php
class ExpressesController extends AppController {

	var $name = 'Expresses';

	function index() {
		$this->Express->recursive = 0;
		$this->set('expresses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid express', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('express', $this->Express->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Express->create();
			if ($this->Express->save($this->data)) {
				$this->Session->setFlash(__('The express has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The express could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid express', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Express->save($this->data)) {
				$this->Session->setFlash(__('The express has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The express could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Express->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for express', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Express->delete($id)) {
			$this->Session->setFlash(__('Express deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Express was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Express->recursive = 0;
		$this->set('expresses', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid express', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('express', $this->Express->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Express->create();
			if ($this->Express->save($this->data)) {
				$this->Session->setFlash(__('The express has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The express could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid express', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Express->save($this->data)) {
				$this->Session->setFlash(__('The express has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The express could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Express->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for express', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Express->delete($id)) {
			$this->Session->setFlash(__('Express deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Express was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
