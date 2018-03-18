<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.03.18
 * Time: 20:23
 */
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTests extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

}