<?php
/* Image Fixture generated on: 2011-11-10 16:08:25 : 1320937705 */
class ImageFixture extends CakeTestFixture {
	var $name = 'Image';

	var $fields = array(
		'ImageId' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => '序号'),
		'Name' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '名称'),
		'URL' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '地址'),
		'Status' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '状态'),
		'ProductionID' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '所属产品'),
		'AddDate' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '添加时间'),
		'AddUser' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => '添加者 '),
		'indexes' => array('PRIMARY' => array('column' => 'ImageId', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'ImageId' => 1,
			'Name' => 1,
			'URL' => 1,
			'Status' => 1,
			'ProductionID' => 1,
			'AddDate' => 1,
			'AddUser' => 1
		),
	);
}
