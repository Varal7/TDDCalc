<?php
require ('Calc.php');

class CalcTest extends PHPUnit_Framework_TestCase {
    public function testAddEmptyString() {
        $c = new Calc();
        $result = $c->add("");
        $this->assertEquals($result, 0);
    }
    public function testAddOneNumber() {
        $c = new Calc();
        $result = $c->add("1");
        $this->assertEquals($result, 1);
    }
}
