<?php
/* Express Fixture generated on: 2011-11-10 16:07:55 : 1320937675 */
class ExpressFixture extends CakeTestFixture {
	var $name = 'Express';

	var $fields = array(
		'ExpressId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'primary', 'comment' => '货代编号'),
		'CustomerId' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '客户编号', 'charset' => 'utf8'),
		'Port' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '港口', 'charset' => 'utf8'),
		'CompName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '公司名称', 'charset' => 'utf8'),
		'ContactName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '联系人', 'charset' => 'utf8'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '邮箱', 'charset' => 'utf8'),
		'MSN' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'MSN', 'charset' => 'utf8'),
		'SKYPE' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'SKYPE', 'charset' => 'utf8'),
		'Mobile' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '手机', 'charset' => 'utf8'),
		'Phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '电话', 'charset' => 'utf8'),
		'Fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '传真', 'charset' => 'utf8'),
		'AddDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '添加时间'),
		'AddUser' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '添加人', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'ExpressId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'ExpressId' => 1,
			'CustomerId' => 'Lorem ipsum dolor ',
			'Port' => 'Lorem ipsum dolor sit amet',
			'CompName' => 'Lorem ipsum dolor sit amet',
			'ContactName' => 'Lorem ipsum dolor sit amet',
			'Email' => 'Lorem ipsum dolor sit amet',
			'MSN' => 'Lorem ipsum dolor sit amet',
			'SKYPE' => 'Lorem ipsum dolor sit amet',
			'Mobile' => 'Lorem ipsum dolor ',
			'Phone' => 'Lorem ipsum dolor ',
			'Fax' => 'Lorem ipsum dolor ',
			'AddDate' => '2011-11-10 16:07:55',
			'AddUser' => 'Lorem ipsum dolor '
		),
	);
}
