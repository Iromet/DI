<?php

class UserTest extends PHPUnit_Framework_TestCase {
	public function testTrue(){
		$this->assertTrue(True);
	}
	
	public function testGetPrenom(){
		$user = new Entity\User("toto", "tata", 15);
		$this->assertEquals("tata", $user->getPrenom());
	}
}