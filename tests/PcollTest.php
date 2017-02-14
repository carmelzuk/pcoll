<?php

/**
 * Class PcollTest
 *
 * Test Pcoll.
 */
class PcollTest extends PHPUnit_Framework_TestCase{
	
  /**
  * Just check if the YourClass has no syntax error
  */
  public function testIsThereAnySyntaxError(){
	$var = new Carmelzuk\Pcoll\Pcoll();
	$this->assertTrue(is_object($var));
	unset($var);
  }

  public function testGetMock(){
      $var = new Carmelzuk\Pcoll\Pcoll();
      $this->assertEquals('mock', $var->getDummyStruct());
      unset($var);
  }

  
}