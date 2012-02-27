<?php
/* Description Fixture generated on: 2011-11-10 16:05:59 : 1320937559 */
class DescriptionFixture extends CakeTestFixture {
	var $name = 'Description';

	var $fields = array(
		'DescId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'primary', 'comment' => '详情编号'),
		'CustomerId' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '客户编号', 'charset' => 'utf8'),
		'PriceTerm' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '价格术语', 'charset' => 'utf8'),
		'PayCadition' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '付款条件', 'charset' => 'utf8'),
		'LessOrMorePercent' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '溢短装', 'charset' => 'utf8'),
		'Bank' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '银行信息', 'charset' => 'utf8'),
		'Express' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '快递公司', 'charset' => 'utf8'),
		'Account' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '到付账号', 'charset' => 'utf8'),
		'Requir' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '单据要求', 'charset' => 'utf8'),
		'AddDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '添加时间'),
		'AddUser' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '添加人', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'DescId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'DescId' => 1,
			'CustomerId' => 'Lorem ipsum dolor sit amet',
			'PriceTerm' => 'Lorem ipsum dolor sit amet',
			'PayCadition' => 'Lorem ipsum dolor sit amet',
			'LessOrMorePercent' => 'Lorem ipsum dolor ',
			'Bank' => 'Lorem ipsum dolor sit amet',
			'Express' => 'Lorem ipsum dolor sit amet',
			'Account' => 'Lorem ipsum dolor sit amet',
			'Requir' => 'Lorem ipsum dolor sit amet',
			'AddDate' => '2011-11-10 16:05:59',
			'AddUser' => 'Lorem ipsum dolor '
		),
	);
}
