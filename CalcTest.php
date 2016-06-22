<?php
require ('Calc.php');

class CalcTest extends PHPUnit_Framework_TestCase {

    private $calc;

    function __construct() {
      $this->calc = new Calc();
    }

    public function testAddEmptyString() {
        $result = $this->calc->add("");
        $this->assertEquals($result, 0);
    }

    public function testAddOneNumber() {
        $result = $this->calc->add("1");
        $this->assertEquals($result, 1);
    }

    public function testAddTwoNumber() {
        $result = $this->calc->add("1,2");
        $this->assertEquals($result, 3);
    }

    public function testAddMultipleNumbers() {
        $result = $this->calc->add("1,2,3,4,5");
        $this->assertEquals($result, 15);
    }

    public function testAddMultipleNumbersWithNewLines() {
        $result = $this->calc->add("1,2,3\n4,5");
        $this->assertEquals($result, 15);
    }

    public function testSupportDifferentDelimiters() {
      $result = $this->calc->add("//;\n1;2");
      $this->assertEquals($result, 3);
    }
}
