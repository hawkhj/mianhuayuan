<?php
/* Contacter Test cases generated on: 2011-11-09 17:50:56 : 1320857456*/
App::import('Model', 'Contacter');

class ContacterTestCase extends CakeTestCase {
	var $fixtures = array('app.contacter');

	function startTest() {
		$this->Contacter =& ClassRegistry::init('Contacter');
	}

	function endTest() {
		unset($this->Contacter);
		ClassRegistry::flush();
	}

}
