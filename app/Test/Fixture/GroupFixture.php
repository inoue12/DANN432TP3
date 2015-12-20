<?php
/**
 * Group Fixture
 */
class GroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'unsigned' => false, 'key' => 'primary'),
		'groupe' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
		'local_num' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
		'session' => array('type' => 'string', 'default' => null, 'length' => 25, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'maximum' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
		'subject_id' => array('type' => 'integer', 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'date', 'default' => null),
		'modified' => array('type' => 'date', 'default' => null),
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
			'groupe' => 1,
			'local_num' => 1,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 1,
			'subject_id' => 1,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 1
		),
		array(
			'id' => 2,
			'groupe' => 2,
			'local_num' => 2,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 2,
			'subject_id' => 2,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 2
		),
		array(
			'id' => 3,
			'groupe' => 3,
			'local_num' => 3,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 3,
			'subject_id' => 3,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 3
		),
		array(
			'id' => 4,
			'groupe' => 4,
			'local_num' => 4,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 4,
			'subject_id' => 4,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 4
		),
		array(
			'id' => 5,
			'groupe' => 5,
			'local_num' => 5,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 5,
			'subject_id' => 5,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 5
		),
		array(
			'id' => 6,
			'groupe' => 6,
			'local_num' => 6,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 6,
			'subject_id' => 6,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 6
		),
		array(
			'id' => 7,
			'groupe' => 7,
			'local_num' => 7,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 7,
			'subject_id' => 7,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 7
		),
		array(
			'id' => 8,
			'groupe' => 8,
			'local_num' => 8,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 8,
			'subject_id' => 8,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 8
		),
		array(
			'id' => 9,
			'groupe' => 9,
			'local_num' => 9,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 9,
			'subject_id' => 9,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 9
		),
		array(
			'id' => 10,
			'groupe' => 10,
			'local_num' => 10,
			'session' => 'Lorem ipsum dolor sit a',
			'maximum' => 10,
			'subject_id' => 10,
			'created' => '2015-12-10',
			'modified' => '2015-12-10',
			'user_id' => 10
		),
	);

}
