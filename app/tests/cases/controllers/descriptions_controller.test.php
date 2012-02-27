<?php
/* Descriptions Test cases generated on: 2011-11-10 16:21:13 : 1320938473*/
App::import('Controller', 'Descriptions');

class TestDescriptionsController extends DescriptionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DescriptionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.description');

	function startTest() {
		$this->Descriptions =& new TestDescriptionsController();
		$this->Descriptions->constructClasses();
	}

	function endTest() {
		unset($this->Descriptions);
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
