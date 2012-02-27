<?php
/* Productions Test cases generated on: 2011-11-10 16:22:09 : 1320938529*/
App::import('Controller', 'Productions');

class TestProductionsController extends ProductionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.production');

	function startTest() {
		$this->Productions =& new TestProductionsController();
		$this->Productions->constructClasses();
	}

	function endTest() {
		unset($this->Productions);
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
