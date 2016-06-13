<?php

	require_once 'person.php';

	class PersonTest extends PHPUNIT_Framework_TestCase
	{
		public $test;

		public function setUp()
		{
			$this->test = new Person("Mike");
		}

		public function testName()
		{
			$mike = $this->test->getName();
			$this->assertTrue($mike == "Mi2ke");
		}
	}
?>