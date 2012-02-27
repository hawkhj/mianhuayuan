<?php
/* Contacters Test cases generated on: 2011-11-10 16:20:18 : 1320938418*/
App::import('Controller', 'Contacters');

class TestContactersController extends ContactersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContactersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contacter');

	function startTest() {
		$this->Contacters =& new TestContactersController();
		$this->Contacters->constructClasses();
	}

	function endTest() {
		unset($this->Contacters);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
