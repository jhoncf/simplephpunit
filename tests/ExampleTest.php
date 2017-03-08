<?php 

namespace Test\ExampleTest;

class ExampleTest extends \PHPUnit\Framework\TestCase {
  
    public function setUp(){
    	//@TODO
    }
    
    public function testExample(){
	    $this->assertEquals('teste', 'teste');
    }
}
