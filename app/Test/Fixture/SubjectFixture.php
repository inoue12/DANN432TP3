<?php
/**
 * Subject Fixture
 */
class SubjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'number' => array('type' => 'string', 'default' => null, 'length' => 15, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'default' => null, 'length' => 40, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
		'program_id' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
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
			'number' => 'PATATE',
			'title' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'program_id' => 1
		),
		array(
			'id' => 2,
			'number' => 'PATATE2',
			'title' => 'Lorem ipsum dolor sit amet',
			'user_id' => 2,
			'program_id' => 2
		),
		array(
			'id' => 3,
			'number' => 'PATATE3',
			'title' => 'Lorem ipsum dolor sit amet',
			'user_id' => 3,
			'program_id' => 3
		)
	);

}
