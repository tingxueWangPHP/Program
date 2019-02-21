<?php
namespace usr;

use model\test as testaa;

class test
{
	private $testModel;
	
	public $name = 'yuanting';
	
	public function __construct(testaa $test)
	{
		$this->testModel = $test;
	}
	
	public function one()
	{
		echo $this->testModel->index();
	}
	
	public function two()
	{
		echo 'test2 xiang2 yuan2';
	}
}