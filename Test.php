<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}

  	public function testTwoTimesTwo(){
  		$this->assertEquals(2*2,5);
  	}

  	public function testTwoTimesFive(){
  		$this->assertEquals(2*5,11);
  	}
}

?>
