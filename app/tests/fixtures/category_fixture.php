<?php
/* Category Fixture generated on: 2011-11-10 16:19:15 : 1320938355 */
class CategoryFixture extends CakeTestFixture {
	var $name = 'Category';

	var $fields = array(
		'CategoryId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9, 'key' => 'primary', 'comment' => '序号'),
		'CategoryName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'comment' => '名字', 'charset' => 'utf8'),
		'ParentId' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '父节点'),
		'Order' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '排序'),
		'Permission' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 400, 'collate' => 'utf8_general_ci', 'comment' => '权限', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '状态'),
		'indexes' => array('PRIMARY' => array('column' => 'CategoryId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'CategoryId' => 1,
			'CategoryName' => 'Lorem ipsum dolor sit amet',
			'ParentId' => 1,
			'Order' => 1,
			'Permission' => 'Lorem ipsum dolor sit amet',
			'status' => 1
		),
	);
}
