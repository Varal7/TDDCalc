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
}
