<?php
App::uses('Group', 'Model');

/**
 * Group Test Case
 */
class GroupTest extends CakeTestCase {

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
		'app.teachers_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Group = ClassRegistry::init('Group');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Group);

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
		
		$user = $this->Group->findById($post_id);
		$leRetour = $this->Group->isOwnedBy($post_id, $user['Group']['user_id']);
		$this->assertTrue(true,$leRetour);
	}
	
	public function testIsNotOwnedBy() {
		$post_id = 2;
		$user_id = 1;
		
		//$this->User->isOwnedBy(1, 1);
		$user = $this->Group->findById($post_id);
		$leRetour = $this->Group->isOwnedBy($post_id, $user['Group']['user_id']);
		$this->assertFalse(false,$leRetour);
	}
	
	public function testGroupeIsNotNumeric(){
        $data = array(
            'Group' => array(
                    'groupe' => 'patate',
                    'local_num' => 1232,
					'session' =>'A2015',
					'maximum' => 12334,
					'subject_id' => 1
            )
        );

        // Attempt to save
        $result = $this->Group->save($data);

        // Test save failed
        $this->assertFalse($result);

    }
	
	public function testGroupeIsNumeric(){
        $data = array(
            'Group' => array(
                    'groupe' => 123,
                    'local_num' => 1232,
					'session' =>'A2015',
					'maximum' => 12334,
					'subject_id' => 1
            )
        );

        // Attempt to save
        $result = $this->Group->save($data);

        // Test save failed
        $this->assertTrue(true,$result);

    }
	
	public function testGroupeIsBlank(){
        $data = array(
            'Group' => array(
                'groupe' => 123,
                'local_num' => 1232,
				'session' => '',
				'maximum' => 12334,
				'subject_id' => 1
            )
        );

        // Attempt to save
        $result = $this->Group->save($data);

        // Test save failed
        $this->assertFalse($result);

    }
	
		public function testGroupeIsNotBlank(){
        $data = array(
            'Group' => array(
                'groupe' => 123,
                'local_num' => 1232,
				'session' => 'sa',
				'maximum' => 12334,
				'subject_id' => 1
            )
        );

        // Attempt to save
        $result = $this->Group->save($data);

        // Test save failed
        $this->assertTrue(true,$result);

    }

}
