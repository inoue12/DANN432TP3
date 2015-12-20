<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'default' => null, 'length' => 30, 'key' => 'unique', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'default' => null),
		'modified' => array('type' => 'date', 'default' => null),
		'active' => array('type' => 'integer', 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'username' => array('column' => 'username', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'chwarles',
			'password' => 'Lorem ipsum dolor sit amet',
			'role' => 'admin',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'active' => 1
		),
		array(
			'id' => 2,
			'username' => 'daniel',
			'password' => 'Lorem ipsum dolor sit amet',
			'role' => 'teacher',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'active' => 2
		),
		array(
			'id' => 3,
			'username' => 'melanie',
			'password' => 'Lorem ipsum dolor sit amet',
			'role' => 'student',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'active' => 3
		)
	);

}
