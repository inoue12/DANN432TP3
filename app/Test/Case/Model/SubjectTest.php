<?php
App::uses('Subject', 'Model');

/**
 * Subject Test Case
 */
class SubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.group',
		'app.subject',
		'app.program',
		'app.student',
		'app.students_group',
		'app.teacher',
		'app.teachers_group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subject = ClassRegistry::init('Subject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subject);

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
		$user = $this->Subject->findById($post_id);
		$leRetour = $this->Subject->isOwnedBy($post_id, $user['Subject']['user_id']);
		$this->assertTrue(true,$leRetour);
	}
	
/**
 * testIsNotOwnedBy method
 *
 * @return void
 */

	public function testIsNotOwnedBy() {
		$post_id = 2;
		$user_id = 1;
		
		//$this->User->isOwnedBy(1, 1);
		$user = $this->Subject->findById($post_id);
		$leRetour = $this->Subject->isOwnedBy($post_id, $user['Subject']['user_id']);
		$this->assertFalse(false,$leRetour);
	}
	
	public function testGetByRProgram() {
 
		$names = $this->Subject->getByRProgram(1);
		$this->assertEqual(1,count($names));
	}
	

}
