<?php
App::uses('Detail', 'Model');

/**
 * Detail Test Case
 */
class DetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group',
		'app.subject',
		'app.program',
		'app.student',
		'app.students_group',
		'app.teacher',
		'app.teachers_group',
		'app.detail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Detail = ClassRegistry::init('Detail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Detail);

		parent::tearDown();
	}

/**
 * testGetDetailNames method
 *
 * @return void
 */
	public function testGetDetailNamesDeuxCaractere() {
		$details = $this->Detail->getDetailNames('f');
		$this->assertEqual(2,count($details));
	}
	public function testGetDetailNamesUnCaracteres() {
		$details = $this->Detail->getDetailNames('fi');
		$this->assertEqual(1,count($details));
	}
	public function testGetDetailNamesPasDispo() {
		$details = $this->Detail->getDetailNames('z');
		$this->assertEqual(0,count($details));
	}
	public function testGetDetailNamesVide() {
		$details = $this->Detail->getDetailNames('');
		$this->assertEqual(1,count($details));
	}


}
