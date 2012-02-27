<?php
/* Expresses Test cases generated on: 2011-11-10 16:21:32 : 1320938492*/
App::import('Controller', 'Expresses');

class TestExpressesController extends ExpressesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ExpressesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.express');

	function startTest() {
		$this->Expresses =& new TestExpressesController();
		$this->Expresses->constructClasses();
	}

	function endTest() {
		unset($this->Expresses);
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
