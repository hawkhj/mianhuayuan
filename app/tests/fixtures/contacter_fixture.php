<?php
/* Contacter Fixture generated on: 2011-11-09 17:50:56 : 1320857456 */
class ContacterFixture extends CakeTestFixture {
	var $name = 'Contacter';

	var $fields = array(
		'ContacterId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'primary', 'comment' => '联系人编号'),
		'CustomerId' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '客户编号', 'charset' => 'utf8'),
		'ContactName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '联系人', 'charset' => 'utf8'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '邮箱', 'charset' => 'utf8'),
		'MSN' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'msn', 'charset' => 'utf8'),
		'SKYPE' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'skype', 'charset' => 'utf8'),
		'Mobile' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '手机', 'charset' => 'utf8'),
		'Phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '电话', 'charset' => 'utf8'),
		'Fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '传真', 'charset' => 'utf8'),
		'Address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '地址', 'charset' => 'utf8'),
		'Job' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '主管事宜', 'charset' => 'utf8'),
		'AddDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '添加时间'),
		'AddUser' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '添加人', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'ContacterId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'ContacterId' => 1,
			'CustomerId' => 'Lorem ipsum dolor ',
			'ContactName' => 'Lorem ipsum dolor sit amet',
			'Email' => 'Lorem ipsum dolor sit amet',
			'MSN' => 'Lorem ipsum dolor sit amet',
			'SKYPE' => 'Lorem ipsum dolor sit amet',
			'Mobile' => 'Lorem ipsum dolor ',
			'Phone' => 'Lorem ipsum dolor ',
			'Fax' => 'Lorem ipsum dolor ',
			'Address' => 'Lorem ipsum dolor sit amet',
			'Job' => 'Lorem ipsum dolor sit amet',
			'AddDate' => '2011-11-09 17:50:56',
			'AddUser' => 'Lorem ipsum dolor '
		),
	);
}
