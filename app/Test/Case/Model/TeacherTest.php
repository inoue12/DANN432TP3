<?php
App::uses('Teacher', 'Model');

/**
 * Teacher Test Case
 */
class TeacherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.teacher',
		'app.group',
		'app.subject',
		'app.program',
		'app.student',
		'app.students_group',
		'app.teachers_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Teacher = ClassRegistry::init('Teacher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Teacher);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedBy() {
		$post_id = 1;
		$user_id = 1;
		
		//$this->User->isOwnedBy(1, 1);
		$user = $this->Teacher->findById($post_id);
		$leRetour = $this->Teacher->isOwnedBy($post_id, $user['Teacher']['user_id']);
		$this->assertTrue(true,$leRetour);
	}
	
	
	public function testIsNotOwnedBy() {
		$post_id = 2;
		$user_id = 1;
		
		//$this->User->isOwnedBy(1, 1);
		$user = $this->Teacher->findById($post_id);
		$leRetour = $this->Teacher->isOwnedBy($post_id, $user['Teacher']['user_id']);
		$this->assertFalse(false,$leRetour);
	}

}
