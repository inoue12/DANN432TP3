<?php
/**
 * Detail Fixture
 */
class DetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer','default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'fish',
			'created' => '',
			'modified' => ''
		),
		array(
			'id' => 2,
			'name' => 'allergy',
			'created' => '',
			'modified' => ''
		),
		array(
			'id' => 3,
			'name' => 'yoyo',
			'created' => '',
			'modified' => ''
		),
		array(
			'id' => 4,
			'name' => 'falafel',
			'created' => '',
			'modified' => ''
		),
	);

}
