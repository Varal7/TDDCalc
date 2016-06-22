<?php
require ('Calc.php');

class CalcTest extends PHPUnit_Framework_TestCase {
    public function testAddEmptyString() {
        $c = new Calc();
        $result = $c->add("");
        $this->assertEquals($result, 0);
    }
}
