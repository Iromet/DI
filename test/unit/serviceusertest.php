<?php

class ServiceUserTest extends PHPUnit_Framework_TestCase {
	
	protected $mock;

	function __construct() {
		$this->mock = $this->GetMockBuilder("DAO\DAOUserSession")->getMock();
		$this->mock->method("get")->will($this->returnValue("John"));
	}

	/**
	*@cover Service\ServiceUser::fullName()
	*/
	
	public function testFullName(){
		// $mock = $this->GetMockBuilder("DAO\DAOUserSession")->getMock();
		// $mock->method("get")->will($this->returnValue("John"));

		$service = new Service\ServiceUser($this->mock);
		$this->assertEquals("John John", $service->fullName());
	}
}