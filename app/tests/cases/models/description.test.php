<?php
/* Description Test cases generated on: 2011-11-10 16:05:59 : 1320937559*/
App::import('Model', 'Description');

class DescriptionTestCase extends CakeTestCase {
	var $fixtures = array('app.description');

	function startTest() {
		$this->Description =& ClassRegistry::init('Description');
	}

	function endTest() {
		unset($this->Description);
		ClassRegistry::flush();
	}

}
