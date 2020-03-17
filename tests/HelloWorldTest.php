<?php 

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $helloWorld = 'Hello World';

        $this->assertEquals('Hello World', $helloWorld);
    }
}
