<?php
/* Customer Fixture generated on: 2011-11-10 16:54:05 : 1320940445 */
class CustomerFixture extends CakeTestFixture {
	var $name = 'Customer';

	var $fields = array(
		'Id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '序号'),
		'CustomerId' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '客户编号', 'charset' => 'utf8'),
		'CustomerType' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '分类'),
		'Country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '国家', 'charset' => 'utf8'),
		'CompName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'comment' => '公司名称', 'charset' => 'utf8'),
		'CompURL' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_general_ci', 'comment' => '公司网址', 'charset' => 'utf8'),
		'CompContact' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '联系人', 'charset' => 'utf8'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '邮箱', 'charset' => 'utf8'),
		'MSN' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => 'MSN', 'charset' => 'utf8'),
		'SKYPE' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => 'SKYPE', 'charset' => 'utf8'),
		'Mobile' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '手机', 'charset' => 'utf8'),
		'Phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '电话', 'charset' => 'utf8'),
		'Fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '传真', 'charset' => 'utf8'),
		'Address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '地址', 'charset' => 'utf8'),
		'Source' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '来源', 'charset' => 'utf8'),
		'Production' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '产品', 'charset' => 'utf8'),
		'PortAndBelong' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '到货港口及所属国家', 'charset' => 'utf8'),
		'StartTime' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '合作开始时间'),
		'Type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '类型', 'charset' => 'utf8'),
		'Permission' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_general_ci', 'comment' => '权限', 'charset' => 'utf8'),
		'AddDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '添加时间'),
		'AddUser' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '添加人', 'charset' => 'utf8'),
		'UpdateDate' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'comment' => '更新时间'),
		'UpdateUser' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'comment' => '更新人', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'Id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'Id' => 1,
			'CustomerId' => 'Lorem ipsum dolor ',
			'CustomerType' => 1,
			'Country' => 'Lorem ipsum dolor sit amet',
			'CompName' => 'Lorem ipsum dolor sit amet',
			'CompURL' => 'Lorem ipsum dolor sit amet',
			'CompContact' => 'Lorem ipsum dolor sit amet',
			'Email' => 'Lorem ipsum dolor sit amet',
			'MSN' => 'Lorem ipsum dolor sit amet',
			'SKYPE' => 'Lorem ipsum dolor sit amet',
			'Mobile' => 'Lorem ipsum dolor ',
			'Phone' => 'Lorem ipsum dolor ',
			'Fax' => 'Lorem ipsum dolor ',
			'Address' => 'Lorem ipsum dolor sit amet',
			'Source' => 'Lorem ipsum dolor sit amet',
			'Production' => 'Lorem ipsum dolor sit amet',
			'PortAndBelong' => 'Lorem ipsum dolor sit amet',
			'StartTime' => '2011-11-10 16:54:05',
			'Type' => 'Lorem ipsum dolor sit amet',
			'Permission' => 'Lorem ipsum dolor sit amet',
			'AddDate' => '2011-11-10 16:54:05',
			'AddUser' => 'Lorem ipsum dolor ',
			'UpdateDate' => '2011-11-10 16:54:05',
			'UpdateUser' => 'Lorem ipsum dolor '
		),
	);
}
