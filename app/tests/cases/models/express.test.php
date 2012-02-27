<?php
/* Express Test cases generated on: 2011-11-10 16:07:55 : 1320937675*/
App::import('Model', 'Express');

class ExpressTestCase extends CakeTestCase {
	var $fixtures = array('app.express');

	function startTest() {
		$this->Express =& ClassRegistry::init('Express');
	}

	function endTest() {
		unset($this->Express);
		ClassRegistry::flush();
	}

}
