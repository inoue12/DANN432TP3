<?php
/**
 * TeachersGroup Fixture
 */
class TeachersGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'teacher_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'teacher_id' => 1,
			'group_id' => 1,
			'user_id' => 1
		),
		array(
			'id' => 2,
			'teacher_id' => 2,
			'group_id' => 2,
			'user_id' => 2
		),
		array(
			'id' => 3,
			'teacher_id' => 3,
			'group_id' => 3,
			'user_id' => 3
		),
		array(
			'id' => 4,
			'teacher_id' => 4,
			'group_id' => 4,
			'user_id' => 4
		),
		array(
			'id' => 5,
			'teacher_id' => 5,
			'group_id' => 5,
			'user_id' => 5
		),
		array(
			'id' => 6,
			'teacher_id' => 6,
			'group_id' => 6,
			'user_id' => 6
		),
		array(
			'id' => 7,
			'teacher_id' => 7,
			'group_id' => 7,
			'user_id' => 7
		),
		array(
			'id' => 8,
			'teacher_id' => 8,
			'group_id' => 8,
			'user_id' => 8
		),
		array(
			'id' => 9,
			'teacher_id' => 9,
			'group_id' => 9,
			'user_id' => 9
		),
		array(
			'id' => 10,
			'teacher_id' => 10,
			'group_id' => 10,
			'user_id' => 10
		),
	);

}
