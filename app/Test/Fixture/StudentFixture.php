<?php
/**
 * Student Fixture
 */
class StudentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'middle_name' => array('type' => 'string', 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'other_details' => array('type' => 'string', 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'filename' => array('type' => 'string', 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'filepath' => array('type' => 'string', 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'thumb' => array('type' => 'string', 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'middle_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'other_details' => 'Lorem ipsum dolor sit amet',
			'thumb' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'middle_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'other_details' => 'Lorem ipsum dolor sit amet',
			'thumb' => 'Lorem ipsum dolor sit amet',
			'user_id' => 2
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'middle_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'other_details' => 'Lorem ipsum dolor sit amet',
			'thumb' => 'Lorem ipsum dolor sit amet',
			'user_id' => 3
		)
	);

}
